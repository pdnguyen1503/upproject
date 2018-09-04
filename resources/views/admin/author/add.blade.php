<!-- author.add -->
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
              <form class="form-validate form-horizontal"  method="POST" action="admin/author/add">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">FullName Author <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" id="cname" name="fullname" type="text" required />
                  </div>
                </div>
                
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Birthday Author <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" name="birthday"  type="date"/>

                  </div>
                </div>
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Address Author <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" id="cname" name="address"  type="text" required />
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