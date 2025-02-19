<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Manufacturer;
use App\Models\Uom;
use App\Models\ProductCategory;
use App\Models\ProductSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class ProductController extends Controller{
	public function index(){
		$products = Product::paginate(10);
		return view("pages.erp.product.index",["products"=>$products]);
	}

	
	public function create(){
		return view("pages.erp.product.create",[
			"manufacturers"=>Manufacturer::all(),
			"product_categorys"=>ProductCategory::all(),
			"product_sections"=>ProductSection::all(),
			"uom"=>Uom::all(),
			
		]);
	}
	public function store(Request $request){
		//Product::create($request->all());
		$product = new Product;
		$product->name=$request->name;
		$product->offer_price=$request->offer_price;
		$product->manufacturer_id=$request->manufacturer_id;
		$product->regular_price=$request->regular_price;
		$product->description=$request->description;
		if(isset($request->photo)){
			$product->photo=$request->photo;
		}
		$product->product_category_id=$request->product_category_id;
		$product->product_section_id=$request->product_section_id;
		$product->is_featured=$request->is_featured;
		$product->star=$request->star;
		$product->is_brand=$request->is_brand;
		$product->offer_discount=$request->offer_discount;
		$product->uom_id=$request->uom_id;
		$product->weight=$request->weight;
		$product->barcode=$request->barcode;
date_default_timezone_set("Asia/Dhaka");
		$product->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$product->updated_at=date('Y-m-d H:i:s');
	

		$product->save();
		if(isset($request->photo)){
			$imageName=$product->id.'.'.$request->photo->extension();
			$product->photo=$imageName;
			$product->update();
			$request->photo->move(public_path('img'),$imageName);
		}

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$product = Product::find($id);
		return view("pages.erp.product.show",["product"=>$product]);
	}
	public function edit(Product $product){
		return view("pages.erp.product.edit",[
			"product"=>$product,
			"manufacturers"=>Manufacturer::all(),
			"product_categorys"=>ProductCategory::all(),
			"product_sections"=>ProductSection::all(),
			"uom"=>Uom::all(),
		]);
	}
	public function update(Request $request,Product $product){
		//Product::update($request->all());
		$product = Product::find($product->id);
		$product->name=$request->name;
		$product->offer_price=$request->offer_price;
		$product->manufacturer_id=$request->manufacturer_id;
		$product->regular_price=$request->regular_price;
		$product->description=$request->description;
		if(isset($request->photo)){
			$product->photo=$request->photo;
		}
		$product->product_category_id=$request->product_category_id;
		$product->product_section_id=$request->product_section_id;
		$product->is_featured=$request->is_featured;
		$product->star=$request->star;
		$product->is_brand=$request->is_brand;
		$product->offer_discount=$request->offer_discount;
		$product->uom_id=$request->uom_id;
		$product->weight=$request->weight;
		$product->barcode=$request->barcode;
         date_default_timezone_set("Asia/Dhaka");
		$product->created_at=date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Dhaka");
		$product->updated_at=date('Y-m-d H:i:s');
	

		$product->save();
		if(isset($request->photo)){
			$imageName=$product->id.'.'.$request->photo->extension();
			$product->photo=$imageName;
			$product->update();
			$request->photo->move(public_path('img'),$imageName);
		}

		return redirect()->route("products.index")->with('success','Updated Successfully.');
	}
	public function destroy(Product $product){
		$product->delete();
		return redirect()->route("products.index")->with('success', 'Deleted Successfully.');
	}
}
?>
