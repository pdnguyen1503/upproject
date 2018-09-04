<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
    public function getList(){
    	$products = Product::where('id', 'DESC')->get();
    	return view('admin.products.list', compact('products'));
    }

    public function getAdd(){
    	return view('admin.products.add');
    }

    public function postAdd(Request $request){
    	$param = $request->only(['name', 'id_author', 'id_categories', 'price', 'image']);
    	Product::create($param);
    	return redirect('admin/products/list')->with('message', 'add products complete');
    }

    public function getEdit($id){
        $products = Product::find($id);
        return view('admin.products.edit', compact('products'));
    }

    public function postEdit(Request $request, $id){
        

        $param = $request->only(['name', 'id_author', 'id_categories', 'price', 'image']);
        Product::find($id)->update($param);
        return redirect('admin/products/list')->with('message', 'sua products  thanh cong');

    }

    public function deleteProducts($id){
        $products = Product::find($id);
        $products->delete();
        return redirect('admin/products/list')->with('message', 'delete thanh cong');
    }
}
