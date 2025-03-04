<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Lot;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Purchase;
use App\Models\PurchaseDetails;
use App\Models\Stock;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return response()->json(['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
    try {
        DB::beginTransaction();
        $order = new Order;
        $order->customer_id = $request->customer_id;
        $order->order_date = now();
        $order->delivery_date = date('Y-m-d H:i:s', strtotime('+7 days'));
        $order->shipping_address = "";   //$request->shipping_address;
        $order->order_total = $request->order_total;
        $order->paid_amount = $request->paid_amount;
        $order->remark = "";   //$request->remark;
        $order->status_id = 1;
        $order->discount = $request->discount;
        $order->vat = $request->vat;
        date_default_timezone_set("Asia/Dhaka");
        $order->created_at = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Dhaka");
        $order->updated_at = date('Y-m-d H:i:s');
        $order->save();
        $lastInsertedId = $order->id;

        $productsdata = $request->products;

        // print_r( $productsdata);

        foreach ($productsdata as $key => $product) {
            $orderdetail = new OrderDetails;
            $orderdetail->order_id = $lastInsertedId;
            $orderdetail->product_id = $product['item_id'];
            $orderdetail->qty = $product['qty'];
            $orderdetail->price = $product['price'];
            $orderdetail->vat = "";
            $orderdetail->discount = $product['total_discount'];
            date_default_timezone_set("Asia/Dhaka");
            $orderdetail->created_at = date('Y-m-d H:i:s');
            date_default_timezone_set("Asia/Dhaka");
            $orderdetail->updated_at = date('Y-m-d H:i:s');
            $orderdetail->save();
            $cogs= 0; 
            $remainingQty = $product['qty'];
            while ($remainingQty > 0) {
                $lot = Lot::where('product_id', $product['item_id'])
                    ->where('quantity', '>', 0)
                    ->orderBy('created_at', 'asc')
                    ->first();

                if (!$lot) {
                    throw new Exception("Not enough stock for Product ID: " . $product['item_id']);
                }


                $deductQty = min($lot->quantity, $remainingQty);
                $lot->decrement('quantity', $deductQty);
                $remainingQty -= $deductQty;
                $cogs += $lot->cost_price;
                
                $stock = new Stock();
                $stock->product_id = $product['item_id'];
                $stock->qty =  -$deductQty;
                $stock->transaction_type_id = 2;
                $stock->remark = "Sales";
                $stock->created_at = date('Y-m-d H:i:s');
                $stock->updated_at = date('Y-m-d H:i:s');
                $stock->warehouse_id = 1;
                $stock->lot_id = $lot->id;

                $stock->save();
            }
        }

        //   cash    d
        //   sales   c
        
        //  cogs     d
        //  inv      c 

        // $cashTransaction= new Trans
        




          DB::commit();
        return response()->json(['success' => "success"]);

         } catch (\Throwable $th) {

            DB::rollBack();
            return response()->json(['success' => $th]);
         }
        
    }


    public function Purchase_store(Request $request)
    {

        // print_r($request->all());

        $purchase = new Purchase;
        $purchase->supplier_id = $request->customer_id;
        $purchase->purchase_date = now();
        $purchase->delivery_date = date('Y-m-d H:i:s', strtotime('+7 days'));
        $purchase->shipping_address = "";
        $purchase->purchase_total = $request->order_total;
        $purchase->paid_amount = $request->paid_amount;;
        $purchase->remark = "";
        $purchase->status_id = 1;
        $purchase->discount = $request->discount;
        $purchase->vat = $request->vat;
        $purchase->created_at = date('Y-m-d H:i:s');
        $purchase->updated_at = date('Y-m-d H:i:s');
        $purchase->save();
        $lastInsertedId = $purchase->id;


        $productsdata = $request->products;
        // print_r( $productsdata);

        foreach ($productsdata as $key => $product) {


            $purchasedetail = new PurchaseDetails();
            $purchasedetail->purchase_id = $lastInsertedId;
            $purchasedetail->product_id = $product['item_id'];
            $purchasedetail->qty = $product['qty'];
            $purchasedetail->price = $product['price'];
            $purchasedetail->vat = 0;
            $purchasedetail->discount = $product['total_discount'];

            $purchasedetail->save();



            $lot = new Lot();
            $lot->product_id = $product['item_id'];
            $lot->quantity = $product['qty'];
            $lot->cost_price = $product['price'];
            $lot->sales_price = "";
            $lot->warehouse_id = 1;
            $lot->transaction_type_id = 1;
            $lot->description = "";
            date_default_timezone_set("Asia/Dhaka");
            $lot->created_at = date('Y-m-d H:i:s');
            date_default_timezone_set("Asia/Dhaka");
            $lot->updated_at = date('Y-m-d H:i:s');
            $lot->save();

            $lastId = $lot->id;

            $stock = new Stock();
            $stock->product_id = $product['item_id'];
            $stock->qty = $product['qty'];
            $stock->transaction_type_id = 2;
            $stock->remark = "purchase";
            $stock->created_at = date('Y-m-d H:i:s');
            $stock->updated_at = date('Y-m-d H:i:s');
            $stock->warehouse_id = 1;
            $stock->lot_id = $lastId;

            $stock->save();
        }
        return response()->json(['success' => "success"]);
    }
}
