<div class="panel-body">
  <div class="form">
      <form class="form-validate form-horizontal"  method="POST" action="admin/singin">
       
        <div class="form-group ">
          <label for="cname" class="">Name <span class="required">*</span></label>
          <div class="">
            <input class="form-control" name="name"  type="text"  required />
          </div>
        </div>
        <div class="form-group ">
          <label for="cname" class="">User username <span class="required">*</span></label>
          <div class="">
            <input class="form-control" name="username"  type="text"/>

          </div>
        </div>
         <div class="form-group ">
          <label for="cname" class="">User Password <span class="required">*</span></label>
          <div class="">
            <input class="form-control"  name="password"  type="text" required />
          </div>
        </div>
        <div class="form-group">
          <div class="">
            <button class="btn btn-primary" type="submit">Save</button>
            <button class="btn btn-default" type="button">Cancel</button>
          </div>
        </div>
      </form>
  </div>
</div>
