<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

  <title>SB Admin - Login</title>

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url().'assets/css/' ?>sb-admin.css" rel='stylesheet' type='text/css' />

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="<?php echo base_url('auth/login'); ?>" method="post">
          <div class="form-group">     
              <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">         
          </div>
          <div class="form-group">      
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <input class="btn btn-primary btn-block" type="submit" name="submit"   value="login">
        </form>
        <div class="text-center">
          <a class="d-block small" >Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
