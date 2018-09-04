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
              <form class="form-validate form-horizontal"  method="POST" action="admin/products/add">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">name Author <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" id="cname" name="name"  type="text" required />
                  </div>
                </div>
                
                 <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">id_author Author <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" id="cname" name="id_author" type="text" required />
                  </div>
                </div>

                 <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">id_categories Author <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" id="cname" name="id_categories" type="text" required />
                  </div>
                </div>

                 <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">price Author <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" id="cname" name="price"  type="text" required />
                  </div>
                </div>

                 <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">image Author <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" id="cname" name="image" type="text" required />
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