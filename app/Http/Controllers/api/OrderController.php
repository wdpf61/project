<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Stock;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $orders= Order::all();
       return response()->json(['orders'=>$orders]);
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
    //   print_r($request->all());


		$order = new Order;
		$order->customer_id=$request->customer_id;
		$order->order_date=now();
		$order->delivery_date= date('Y-m-d H:i:s', strtotime('+7 days'));
		$order->shipping_address= "";   //$request->shipping_address;
		$order->order_total=$request->order_total;
		$order->paid_amount=$request->paid_amount;
		$order->remark="";   //$request->remark;
		$order->status_id=1;
		$order->discount=$request->discount;
		$order->vat=$request->vat;
        date_default_timezone_set("Asia/Dhaka");
		$order->created_at=date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Dhaka");
		$order->updated_at=date('Y-m-d H:i:s');
		$order->save();
        $lastInsertedId = $order->id;

        $productsdata=$request->products;

       // print_r( $productsdata);
        
        foreach ($productsdata as $key => $product) {
            $orderdetail = new OrderDetails;
            $orderdetail->order_id= $lastInsertedId;
            $orderdetail->product_id= $product['item_id'];
            $orderdetail->qty=$product['qty'];
            $orderdetail->price=$product['price'];
            $orderdetail->vat="";
            $orderdetail->discount=$product['total_discount'];
            date_default_timezone_set("Asia/Dhaka");
            $orderdetail->created_at=date('Y-m-d H:i:s');
             date_default_timezone_set("Asia/Dhaka");
            $orderdetail->updated_at=date('Y-m-d H:i:s');
            $orderdetail->save();

            $stock = new Stock();

            $stock->product_id=$product['item_id'];
            $stock->qty=$product['qty'] * (-1);
            $stock->transaction_type_id= 2;
            $stock->remark="Sales";
            $stock->created_at=date('Y-m-d H:i:s');
            $stock->updated_at=date('Y-m-d H:i:s');
            $stock->warehouse_id=1;

		    $stock->save();
        }
        return response()->json(['success'=>"success"]);
		  










    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
