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
              <form class="form-validate form-horizontal"  method="POST" action="admin/orders/add">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
               
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">ID products <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" name="id_product"  type="text" required />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">ID customers <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" name="id_customer"   type="date"/>

                </div>
                </div>
                 <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Name Orders <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control"  name="name"  type="text" required />
                  </div>
                </div>
                </div>
                 <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">price Orders <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" name="price"  type="text" required />
                  </div>
                </div>
                </div>
                 <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">deliver_address Orders <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control"  name="deliver_address"  type="text" required />
                  </div>
                </div>
                 </div>
                 <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">deliver_phone Orders <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" name="deliver_phone"  type="text" required />
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