@extends('admin.layout.index')
@section('content')
 <div class="row">
  <div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
          Form validations
        </header>
        <div class="panel-body">
            
          <div class="form">
              <form class="form-validate form-horizontal"  method="POST" action="admin/categories/edit/{{$categories->id}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <h2>Categories: {{$categories->name}}</h2>
                </div>
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Name Categories <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" id="name" name="name"  type="text" value="{{$categories->name}}" required/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="control-label col-lg-2">Sort</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" name="sort" value="{{$categories->sort}}">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <button class="btn btn-default" type="button">Cancel</button>
                  </div>
                </div>
              </form>
          </div>
        </div>
      </section>
  </div>
</div>
@endsection