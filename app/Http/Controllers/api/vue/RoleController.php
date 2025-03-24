<?php

namespace App\Http\Controllers\api\vue;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return response()->json(["roles"=> Role::all()]);
    }

 
    public function store(Request $request)
    {
        try {

            $role= new Role();
            $role->name= $request->name;
            $role->save();

            return response()->json(["res"=> $role]);
        } catch (\Throwable $th) {
            return response()->json(["err"=>$th]);
        }
      
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

   
    public function destroy($id)
    {
        try {
            $role=  Role::destroy($id);
            return response()->json(["roles"=> $role]);
        } catch (\Throwable $th) {
            return response()->json(["roles"=>$th]);
        }
  
    }
}
