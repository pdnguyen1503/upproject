<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomersController extends Controller
{
    public function getList(){
    	$customers = Customer::all();
    	return view('admin.customers.list', compact('customers'));
    }

    public function getAdd(){
    	return view('admin.customers.add');
    }

    public function postAdd(Request $request){
    	$param = $request->only(['fullname', 'address', 'phone']);
    	Customer::create($param);
    	return redirect('admin/customers/list')->with('message', 'add customers complete');
    }

    public function getEdit($id){
        $customers = Customer::find($id);
        return view('admin.customers.edit', compact('customers'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,
        [
            'fullname' => 'required',
        ],
        [
            'fullname.required' => 'ban can nhap vao',  
        ]);

        $param = $request->only(['fullname', 'address', 'phone']);
        Customer::find($id)->update($param);
        return redirect('admin/customers/list')->with('message', 'sua khanh hang thanh cong');

    }

    public function deleteCustomers($id){
        $customers = Customer::find($id);
        $customers->delete();
        return redirect('admin/customers/list')->with('message', 'delete thanh cong');
    }
}
