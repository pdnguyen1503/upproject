<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoriesController extends Controller
{
    public function index()
    {
        
    }


    public function getList(){
        $categories = Category::all();
        return view('admin.categories.list', compact('categories'));
    }


    public function getAdd(){
        return view('admin.categories.add');
    }

    public function postAdd(Request $request){
        $this -> validate($request, 
        [
            'name' => 'required|min:2|max:50'
        ],
        [
            'name.required'  => 'Ban chua nhap ten categories',
            'name.min'      => 'Name phai tu 3->100',
            'name.max'      => 'name tu 3-100',
        ]);

         $categories = new Category();
         $categories->name = $request->name;
         $categories->parent_id = $request->parent_id;
         $categories->sort = $request->sort;
         $categories->slug = str_slug($request->name);
        $categories->save();

        return redirect('admin/categories/list')->with('message', 'add category success');
    }
    
    public function getEdit($id){
        $categories = Category::find($id);
        return  view('admin.categories.edit', compact('categories'));
    }

    public function postEdit(Request $request, $id){
        //$categories = Categories::find($id);
        $this -> validate($request,
        [
            'name' => 'required|min:3|max:100',
        ],[
            'name.required' => 'ban chua nhap vao',
            'name.min'      => 'ban phai nhap >3 ky tu',
            'name.max'      => 'ban nhap be hon 100 ky tu',
        ]);
        $param = $request->only(['name', 'sort']);
        Category::find($id)->update($param);
        return redirect('admin/categories/list')->with('message', 'edit category success');
    }

    public function deleteCategory(Request $request) 
    {
        $category = Category::find($request->id);
        $category->delete();
        return redirect('admin/categories/list')->with('message', 'delete category success');
    }
}
