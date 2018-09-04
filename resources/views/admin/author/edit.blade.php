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
              <form class="form-validate form-horizontal"  method="POST" action="admin/author/edit/{{$author->id}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <h2>Author : {{$author->fullname}}</h2>
                </div>
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Fullname <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" name="fullname"  type="text" value="{{$author->fullname}}"  required />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Birthday Author <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" name="birthday"  value="{{$author->birthday}}" type="date"/>

                </div>
                </div>
                 <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Address Author <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" value="{{$author->address}}" name="address"  type="text" required />
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