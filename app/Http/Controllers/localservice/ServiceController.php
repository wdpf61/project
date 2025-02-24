<?php

namespace App\Http\Controllers\localservice;
use App\Http\Controllers\Controller;
use App\Models\localservice\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class ServiceController extends Controller{
	public function index(){
		$services = Service::paginate(10);
		return view("pages.erp.service.index",["services"=>$services]);
	}
	public function create(){
		return view("pages.erp.service.create",[]);
	}
	public function store(Request $request){
		//Service::create($request->all());
		$service = new Service;
		$service->id=$request->id;
		$service->category_id=$request->category_id;
		$service->sub_category_id=$request->sub_category_id;
		$service->provider_id=$request->provider_id;
		$service->title=$request->title;
		$service->description=$request->description;
		$service->price=$request->price;
		$service->status_id=$request->status_id;
date_default_timezone_set("Asia/Dhaka");
		$service->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$service->updated_at=date('Y-m-d H:i:s');

		$service->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$service = Service::find($id);
		return view("pages.erp.service.show",["service"=>$service]);
	}
	public function edit(Service $service){
		return view("pages.erp.service.edit",["service"=>$service,]);
	}
	public function update(Request $request,Service $service){
		//Service::update($request->all());
		$service = Service::find($service->id);
		$service->id=$request->id;
		$service->category_id=$request->category_id;
		$service->sub_category_id=$request->sub_category_id;
		$service->provider_id=$request->provider_id;
		$service->title=$request->title;
		$service->description=$request->description;
		$service->price=$request->price;
		$service->status_id=$request->status_id;
date_default_timezone_set("Asia/Dhaka");
		$service->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$service->updated_at=date('Y-m-d H:i:s');

		$service->save();

		return redirect()->route("services.index")->with('success','Updated Successfully.');
	}
	public function destroy(Service $service){
		$service->delete();
		return redirect()->route("services.index")->with('success', 'Deleted Successfully.');
	}



	function frontServicePage(){

        $services= Service::paginate(12);

		//print_r(  $services);

		return view('pages.localservice.service', compact('services'));
	}


	function bookingServicePage(){

        $services= Service::paginate(12);

		//print_r(  $services);

		return view('pages.localservice.booking', compact('services'));
	}
}
?>
