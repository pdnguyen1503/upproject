<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
class HomeController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function  __construct()
    {
        $listcate= category::all();
        view()->share('listcate',$listcate);
    }
    public function GetCategories ($slug){
        $category=Category::where('slug',$slug)->first();
        if (!$category){
            abort(404);
        }
$products =	Product::where('id_categories', $category->id)->get();
return view('category.category', compact('category','products'));
}

}
