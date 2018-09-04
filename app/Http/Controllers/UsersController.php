<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // su dung thu vien nay de goi dc lop dang nhap
use App\User;
class UsersController extends Controller
{
    public function getList(){
    	$user = User::all();
    	return view('admin.user.list', compact('user'));
    }

    public function getAdd(){
    	return view('admin.user.add');
    }

    public function postAdd(Request $request){
    	$param = $request->only(['name', 'username', 'password']);
        // dd($param); 
    	User::create($param);
    	return redirect('admin/user/list')->with('message', 'add user complete');
    }

    public function getEdit($id){
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function postEdit(Request $request, $id){
        

        $param = $request->only(['name', 'username', 'password']);
        User::find($id)->update($param);
        return redirect('admin/user/list')->with('message', 'sua tac gia thanh cong');

    }

    public function deleteUsers($id){
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user/list')->with('message', 'delete thanh cong');
    }


    public function getLoginAdmin(){
        return view('admin.login');
    }



    public function postLoginAdmin(Request $request){
        $passedlogin = $request->only('username', 'password');
        // dd($passedlogin);
        // dd(Auth::attempt($passedlogin));
        if (Auth::attempt($passedlogin) == true) {
            return redirect('admin/categories/list');
        }else{
            return redirect('admin/login');
        }

    }
}
