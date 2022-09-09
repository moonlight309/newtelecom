<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{   
    public function home(){
        return view('admin.home');
    }

    public function getList(){
        $users = User::latest()->paginate(5);
        return response()->json($users, 200);
    }

    public function getAdd(){
        return view('admin.users.add');
    }

    public function postAdd(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        
        return response()->json([
            'code'=>200,
            'mess'=>'Add Successful!',
        ]);
    }

    public function postEdit(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        
        return response()->json([
            'code' => 200,
            'message' => 'update success',
        ]);
        
    }

    public function delete($id){
        User::findOrFail($id)->delete();
        return response()->json([
            'code'=>200,
            'mess'=>'Delete Successful!',
        ]);
    }

}