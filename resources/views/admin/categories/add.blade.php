@extends('admin.layout.index')
@section('content')
 <div class="row">
  <div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
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
        <div class="panel-body">
          <div class="form">
              <form class="form-validate form-horizontal"  method="POST" action="admin/categories/add">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Name Categories <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" id="cname" name="name"  type="text" required />
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="control-label col-lg-2">Sort</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" name="sort">
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