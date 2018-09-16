<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
class OrdersController extends Controller
{
     public function getList(){
    	$orders = Order::all();
    	return view('admin.orders.list', compact('orders'));
    }

    public function getAdd(){
    	return view('admin.orders.add');
    }

    public function postAdd(Request $request){
    	$param = $request->only(['id_product', 'id_customer', 'name', 'price', 'deliver_address', 'deliver_phone']);
    	Order::create($param);
    	return redirect('admin/orders/list')->with('message', 'add orders complete');
    }

    public function getEdit($id){
        $orders = Order::find($id);
        return view('admin.orders.edit', compact('orders'));
    }

    public function postEdit(Request $request, $id){
        
        $param = $request->only(['id_product', 'id_customer', 'name', 'price', 'deliver_address', 'deliver_phone']);
        Order::find($id)->update($param);
        return redirect('admin/orders/list')->with('message', 'sua Orders thanh cong');

    }

    public function deleteOrders($id){
        $orders = Order::find($id);
        $orders->delete();
        return redirect('admin/orders/list')->with('message', 'delete thanh cong');
    }

}
