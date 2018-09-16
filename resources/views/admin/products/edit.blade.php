@extends('admin.layout.index')
@section('content')
    <style>
        .img_current {
            width: 150px;
        }
       .img_detail {
            width:200px;
           margin-bottom: 20px;
        }
    </style>
    <div class="row" xmlns="http://www.w3.org/1999/html">
        <div class="col-lg-12">
            <section class="panel">
                <form class="form-validate form-horizontal"  method="POST" enctype="multipart/form-data" action="admin/products/edit/{{$products->id}}">
                    <header class="col-lg-7 panel-heading">
                        Form validations
                    </header>
                    @if(count($errors) > 0)
                        <div class="alert alert-danger ">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif

                    @if(session('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                    @endif
                    <div class="col-lg-7 panel-body">
                        <div class="form">

                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">name <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="cname" name="name" type="text" value="{{$products->name}}" />
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">id_author <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="cname" name="id_author" type="text" value="{{$products->id_author}}" />
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">id_categories<span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="cname" name="id_categories"type="text" value="{{$products->id_categories}}"/>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">intro <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <textarea class="form-control ckeditor " id="demo"  name="intro"  >{{$products->intro}} </textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">content <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <textarea class="form-control ckeditor " id="demo"  name="content"  required> {{$products->content}}</textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">price <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="cname" name="price"  type="text" value="{{$products->price}}" />
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">image current<span class="required">*</span></label>
                                <div class="col-lg-10">
                                   <img src="{!!  asset('public/upload/product/'.$products['image']) !!}" class="img_current"/>
                                    <input type="hidden" name="img_current" value="{!!$products['image']!!}"/>
                                </div>
                                <div class="col-lg-10">
                                    <input class="form-control" id="cname" name="image" type="file" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <button class="btn btn-default" type="button">Cancel</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4">
                        @foreach( $img_detail as $item)
                            <div class="form-group">
                        <img src="{!!asset('public/upload/Details/'.$item['image'])!!}" class="img_detail"/>
                            </div>
                        @endforeach
                    </div>
                </form>
            </section>

        </div>
    </div>
@endsection