<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <base href="{{asset('')}}">
  <link href="admin_asset/shortcut icon" href="admin_asset/img/favicon.png">

  <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="admin_asset/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="admin_asset/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="admin_asset/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="admin_asset/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="admin_asset/css/style.css" rel="stylesheet">
  <link href="admin_asset/css/style-responsive.css" rel="stylesheet" />
  
</head>

<body class="login-img3-body">

  <div class="container">
    <div class="panel-body">
      @if(count($errors) > 0)
        <div class="alert alert-danger">
          @foreach( $errors ->all() as $err)
             {{$err}}<br>
          @endforeach
        </div>
      @endif

      @if(session('message'))
        <div class="alert alert-danger">
          {{session('message')}}
        </div>
      @endif
    </div>
    <form class="login-form" role="form" method="POST" action="admin/login">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <button class="btn btn-info btn-lg btn-block" type="submit" href="admin/singup" >Signup</button>
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </div>


</body>

</html>
