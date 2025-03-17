<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\PurchaseDetails;
use App\Models\Stock;
use App\Models\Supplier;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
  
    public function index()
    {
        $suppliers= Supplier::all();
       return response()->json(["suppliers"=>  $suppliers]);
    }


    public function warehouse()
    {
       $warehous= Warehouse::all();
       return response()->json(["warehouses"=> $warehous]);
    }

   
    public function products(Request $request)
    {
        $products= Product::all();
        return response()->json(["products"=> $products]);
    }

  
    public function saveReactpurchase(Request $request)
    {
        try {
          
       
        $purchase = new Purchase();
        $purchase->supplier_id = $request->supplier_id;
        $purchase->purchase_date = now();
        $purchase->delivery_date = date('Y-m-d H:i:s', strtotime('+7 days'));
        $purchase->shipping_address = "";
        $purchase->purchase_total = $request->purchase_total;
        $purchase->paid_amount = $request->purchase_total;;
        $purchase->remark = "";
        $purchase->status_id = 1;
        $purchase->discount = $request->discount;
        $purchase->vat = $request->vat;
        $purchase->created_at = date('Y-m-d H:i:s');
        $purchase->updated_at = date('Y-m-d H:i:s');
        $purchase->save();
        $lastInsertedId = $purchase->id;



       foreach ( $request->products as $key => $product) {
       
       
        $purchasedetail = new PurchaseDetails();
        $purchasedetail->purchase_id = $lastInsertedId;
        $purchasedetail->product_id = $product['item_id'];
        $purchasedetail->qty = $product['qty'];
        $purchasedetail->price = $product['price'];
        $purchasedetail->vat = 0;
        $purchasedetail->discount = $product['total_discount'];

        $purchasedetail->save();


        $stock = new Stock();
        $stock->product_id = $product['item_id'];
        $stock->qty = $product['qty'];
        $stock->transaction_type_id = 2;
        $stock->remark = "purchase";
        $stock->created_at = date('Y-m-d H:i:s');
        $stock->updated_at = date('Y-m-d H:i:s');
        $stock->warehouse_id = 1;
        $stock->lot_id =1;
        $stock->save();
        }

        return response()->json(['success'=>"saved successfully"]);

    } catch (\Throwable $th) {
        return response()->json(['error'=> $th]);
    }



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
