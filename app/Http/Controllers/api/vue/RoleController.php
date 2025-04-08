<?php

namespace App\Http\Controllers\api\vue;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Psy\Exception\ThrowUpException;

class RoleController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }
    public function index()
    {
        $role= Role::all();
        return response()->json(["roles"=> $role ]);
        //  try {
        //     $role= Role::all();
        //     if ( !$role) {
        //         $role= "No Data found";
        //     }
        //     return response()->json(["roles"=> $role ]);
        //  } catch (\Throwable $th) {
        //     return response()->json(["error"=> $th->getMessage()]);
        //  }

       
    }

 
    public function store(Request $request)
    {

        $role= new Role();
        $role->name= $request->name;
        $role->save();



        // try {

        //     $role= new Role();
        //     $role->name= $request->name;
        //     $role->save();
        //     return response()->json(["res"=> $role]);
        // } catch (\Throwable $th) {
        //     return response()->json(["err"=>$th]);
        // }
      
    }

    public function show($id)
    {
        try {
            $role=  Role::find($id);

            if ( !$role) {
                $role= "No Data found";
            }
            return response()->json(["roles"=> $role]);
        } catch (\Throwable $th) {
            return response()->json(["roles"=>$th]);
        }
    }

   
    public function update(Request $request)
    {
        try {

            $role= Role::find($request->id);
            $role->name= $request->name;
            $role->save();

            return response()->json(["res"=> $role]);
        } catch (\Throwable $th) {
            return response()->json(["err"=>$th->getMessage()]);
        }
    }

   
    public function destroy($id)
    {
        try {
            $role=  Role::destroy($id);
            return response()->json(["roles"=> $role]);
        } catch (\Throwable $th) {
            return response()->json(["roles"=>$th->getMessage()]);
        }
  
    }

    function order(){
        return response()->json(["roles"=> "this is order function"]);
    }
}


// php artisan make:controller api/vue/RoleController --api
 // throw ValidationException::withMessages(['your error message']);