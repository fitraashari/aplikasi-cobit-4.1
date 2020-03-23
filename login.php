<?php
error_reporting (0);
include "koneksi.php";
if(!empty($_POST['username']) && !empty($_POST['password'])){

session_start(); 
$pass=md5($_POST['password']);
$login=mysqli_query($conn,"SELECT * FROM user WHERE kd_user='$_POST[username]' AND password='$pass' ");
$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);
//echo $_POST['username'];
// Apabila username dan password ditemukan (valid)
	if ($ketemu > 0){
$_SESSION['kd_user'] = $r['kd_user'];
$_SESSION['nm_user'] = $r['nama_user'];
$_SESSION['jenkel'] = $r['jenkel'];
$_SESSION['password'] = $r['password'];
$_SESSION['lvl'] = $r['lvl'];
echo "<script>alert('Login Berhasil');</script>";
echo"<meta http-equiv='refresh' content='0;url=index.php'>";
	}
	else{
echo "<script>alert('Username/Password Salah ');</script>";
echo"<meta http-equiv='refresh' content='0;url=login.php'>";
	}
		
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>Aplikasi Perhitungan Cobit</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
  </head>
  <body class="be-splash-screen">
    <div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading"><img src="assets/img/logo-xx.png" alt="logo" width="86" height="44" class="logo-img"><span class="splash-description">Please enter your user information.</span></div>
              <div class="panel-body">
                <form action="" method="POST">
                  <div class="form-group">
                    <input id="username" name='username' type="text" placeholder="Username" autocomplete="off" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password" name='password' type="password" placeholder="Password" class="form-control">
                  </div>
                  <div class="form-group row login-tools">
                    <div class="col-xs-6 login-remember">
                      <div class="be-checkbox">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember Me</label>
                      </div>
                    </div>
                    
                  </div>
                  <div class="form-group login-submit">
                    <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">Sign me in</button>
                  </div>
                </form>
              </div>
            </div>
            <div style="display: none;" class="splash-footer"><span>Don't have an account? <a href="#">Sign Up</a></span></div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      });
      
    </script>
  </body>
</html>