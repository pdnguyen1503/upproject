<!-- author.add -->
@extends('admin.layout.index')
@section('content')
    <div class="row" xmlns="http://www.w3.org/1999/html">
  <div class="col-lg-12">
    <section class="panel">
        <form class="form-validate form-horizontal"  method="POST" enctype="multipart/form-data" action="admin/products/add">
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
                    <input class="form-control" id="cname" name="name" type="text" required />
                  </div>
                </div>
                
                 <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">id_author <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" id="cname" name="id_author" type="text" required />
                  </div>
                </div>

                 <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">id_categories<span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" id="cname" name="id_categories"type="text" required />
                  </div>
                </div>

                 <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">intro <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <textarea class="form-control ckeditor " id="demo"  name="intro"  required> </textarea>
                  </div>
                </div>
                 <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">content <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <textarea class="form-control ckeditor " id="demo"  name="content"  required> </textarea>
                  </div>
                </div>
                  <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">price <span class="required">*</span></label>
                      <div class="col-lg-10">
                          <input class="form-control" id="cname" name="price"  type="text" required />
                      </div>
                  </div>

                  <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">image <span class="required">*</span>
                  </label>
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
            @for ($i=1; $i<10;$i++)
                <div class="form-group ">
                    <label> image Product detail {!! $i !!}</label>
                    <input class="form-control" id="cname" name="IProductDetail[]" type="file"  />
                </div>
            @endfor
        </div>
        </form>
    </section>




  </div>
</div>
@endsection