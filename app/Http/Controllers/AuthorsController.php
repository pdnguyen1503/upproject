<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorsController extends Controller
{
    public function getList(){
    	$author = Author::all();
    	return view('admin.author.list', compact('author'));
    }

    public function getAdd(){
    	return view('admin.author.add');
    }

    public function postAdd(Request $request){
    	$param = $request->only(['fullname', 'birthday', 'address']);
    	Author::create($param);
    	return redirect('admin/author/list')->with('message', 'add author complete');
    }

    public function getEdit($id){
        $author = Author::find($id);
        return view('admin.author.edit', compact('author'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,
        [
            'fullname' => 'required',
        ],
        [
            'fullname.required' => 'ban can nhap vao',  
        ]);

        $param = $request->only(['fullname', 'birthday', 'address']);
        Author::find($id)->update($param);
        return redirect('admin/author/list')->with('message', 'sua tac gia thanh cong');

    }

    public function deleteAuthor($id){
        $author = Author::find($id);
        $author->delete();
        return redirect('admin/author/list')->with('message', 'delete thanh cong');
    }
}
