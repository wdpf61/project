<?php

namespace App\Http\Controllers\api\vue;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
 
    public function index(Request $request)
    {
        $query = User::query();

        if ($request->search) {
            $query->where('name', 'like', "%{$request->search}%");
        }
        return response()->json($query->paginate(5));
      

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
            $user = new User;
            $user->name=$request->name;
            $user->role_id=$request->role_id;
            $user->email=$request->email;
            
            date_default_timezone_set("Asia/Dhaka");
            $user->created_at=date('Y-m-d H:i:s');
            $user->updated_at=date('Y-m-d H:i:s');
    
            if(isset($request->photo)){
                $user->photo=$request->photo;
            }
            $user->mobile=$request->mobile;
            $user->save();
            if(isset($request->photo)){
                $imageName=$user->id.'.'.$request->photo->extension();
                $user->photo=$imageName;
                $user->update();
                $request->photo->move(public_path('img'),$imageName);
            }
            return response()->json(["roles"=>  $user ]);
        } catch (\Throwable $th) {
           return response()->json(["error"=> $th->getMessage()]);
        }
        
    }

  
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
