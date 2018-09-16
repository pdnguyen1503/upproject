<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\phuong\functions;
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

}
