<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_image;
use Illuminate\Support\Facades\DB;
use File;

class ProductsController extends Controller
{
    public function getList(){
        $pro=new Product();
        $product=$pro->get();
    	//$product = DB::table('Products')->where('id','=', 'DESC')->get();

    	return view('admin.products.list', compact('product'));
    }

    public function getAdd(){
    	return view('admin.products.add');
    }

    public function postAdd(Request $request)
    {

        $product=new product();
        $product-> name=$request->name;
        $product-> id_author =$request->id_author;
        $product-> id_categories =$request->id_categories;
        $product-> intro =$request->intro;
        $product-> content = $request-> content;
        $product-> price =$request-> price;
        //$product-> image =$file_name;

        if ($request->hasFile('image')) {

                $duoifile=$request->file('image')->getClientOriginalExtension();
                if ($duoifile != 'jpg' && $duoifile !='png' && $duoifile!='jpeg')
                {
                    return redirect('admin/products/add')->with('message', 'Bạn chỉ được chọn file có đuôi là jpg;png;jpeg');
                }

            $file_name=$request->file('image')->getClientOriginalName();
                if (file_exists('public/upload/product/'.$file_name)) {
                    $file_name=str_random(4).'_'.$file_name;
                }
                    $product-> image =$file_name;
                    $request->file('image')->move('public/upload/product', $file_name);

        }
        $product->save();
        $product_id=$product->id;
        if ($request->hasFile('IProductDetail')) {

            foreach ($request->file('IProductDetail') as $fi) {
                ($fi->getClientOriginalName());
                //$file=$request->file('IProductDetail');
                $duoi=$fi->getClientOriginalExtension();
                if ($duoi != 'jpg' && $duoi !='png' && $duoi!='jpeg')
                {
                    return redirect('admin/products/add')->with('message', 'Bạn chỉ được chọn file có đuôi là jpg;png;jpeg');
                }

                $product_img = new Product_image();
                if (isset($fi)) {
                    $name=$fi->getClientOriginalName();
                    if (file_exists('public/upload/Details/'.$name)) {
                        $name=str_random(4).'_'.$name;
                    }
                    $product_img->image = $name;
                    $product_img->product_id = $product_id;
                    $fi->move('public/upload/Details', $name);
                    $product_img->save();
                }
            }

        }
        /*$param = $request->only(['name', 'id_author', 'id_categories', 'price', 'image']);
    	Product::create($param);*/
        return redirect('admin/products/list')->with('message', 'add products complete');
    }





    public function getEdit($id){
        $products = Product::find($id);
        $img_detail=Product::find($id)->imagedetail()->get();
        return view('admin.products.edit', compact('products','img_detail'));
    }

    public function postEdit(Request $request, $id){
        $product=Product::find($id);
        $product-> name=$request->name;
        $product-> id_author =$request->id_author;
        $product-> id_categories =$request->id_categories;
        $product-> intro =$request->intro;
        $product-> content = $request-> content;
        $product-> price =$request-> price;
        // thay dổi hình chính
       $img_current='public/upload/product/'.$request->img_current;
        if (!empty($request->image))
        {
            $duoi=$request->image->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi !='png' && $duoi!='jpeg')
            {
                return redirect('admin/products/edit/'.$id)->with('message', 'Bạn chỉ được chọn file có đuôi là jpg;png;jpeg');
            }
            $file_name=$request->image->getClientOriginalName();
            $product->image=$file_name;
            $request->image->move('public/upload/product/',$file_name);
            file::delete($img_current);

        }
        $product->save();
        //thay đổi
        /*$img_current_detail='public/upload/product/'.$request->img_current_detail;
        if (!empty($request->img_detail))
        {
            $file_name_detai=$request->img_detail->getClientOriginalName();
            $product->image=$file_name;
            $request->image->move('public/upload/product/',$file_name);
            file::delete($img_current);

        }*/
        //thêm hình phụ
        $product_id=$product->id;
        if ($request->hasFile('IProductDetail')) {

            foreach ($request->file('IProductDetail') as $fi) {
                ($fi->getClientOriginalName());
                //$file=$request->file('IProductDetail');
                $duoi=$fi->getClientOriginalExtension();
                if ($duoi != 'jpg' && $duoi !='png' && $duoi!='jpeg')
                {
                    return redirect('admin/products/add')->with('message', 'Bạn chỉ được chọn file có đuôi là jpg;png;jpeg');
                }

                $product_img = new Product_image();
                if (isset($fi)) {
                    $name=$fi->getClientOriginalName();
                    if (file_exists('public/upload/Details/'.$name)) {
                        $name=str_random(4).'_'.$name;
                    }
                    $product_img->image = $name;
                    $product_img->product_id = $product_id;
                    $fi->move('public/upload/Details', $name);
                    $product_img->save();
                }
            }

        }




        /*$param = $request->only(['name', 'id_author', 'id_categories', 'price', 'image']);
        Product::find($id)->update($param);*/
        return redirect('admin/products/list')->with('message', 'sua products  thanh cong');

    }

    public function deleteProducts($id){
        $ProducDetail= Product::find($id)->imagedetail()->get();
           // dd($ProducDetail);
       foreach ($ProducDetail as $value)
       {
            echo $value['image'];
           File::delete('public/upload/Details/'.$value['image']);

       }
       Product_image::where('product_id','=',$id)->delete();
       $product = Product::find($id);
       file:: delete('public/upload/product/'.$product->image);
       $product->delete();
       return redirect('admin/products/list')->with('message', 'delete thanh cong');
    }
    public function deleteImg($id){
       // dd($id);
        $del= Product_image::find($id);

        file::delete('public/upload/Details/'.$del->image);

        $del->delete();
        return redirect('admin/post/edit/'.$del->product_id)-> with('thongbao','Bạn đã xoá thành công');
    }
}
