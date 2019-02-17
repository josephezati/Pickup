<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/img/pick_drop.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>PICK & DROP</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->
</head>
<style>
    /*@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");*/
.login-block{
    background: #DE6262;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
float:left;
width:100%;
padding : 44px 0;
}
.banner-sec{background:url()  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#FEB58A;}
.login-sec .copy-text a{color:#E36262;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #DE6262;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #DE6262; color:#fff; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:#0056b3; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;
}
</style>
<?php
  require('db_connection.php');
  if(isset($_POST['loginsubmit'])){
    $username = $_POST['loginuser'];
    $password = md5($_POST['loginpassword']);
    $query = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' AND password = '$password' AND user_status = 1");
    if(mysqli_num_rows($query) <=0){
      header('location: index.php');
    }elseif (mysqli_num_rows($query) == 1) {
      header('location: dashboard.php');
    }

  }
?>
<section class="login-block">
    <h2 class="text-center " style="color: #0056b3; font-weight: 800;">PICK & DROP</h2>
    <div class="container">
	<div class="row">
    <form action="" method="post">       
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Login Now</h2>
		    <div class="login-form">
          <div class="form-group">
            <label for="exampleInputText1" class="text-uppercase">Username</label>
            <input type="text" class="form-control" name="loginuser" id="loginuser" placeholder="Enter username">
            
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
            <input type="password" class="form-control" name="loginpassword" id="loginpassword" placeholder="Enter password">
          </div>
            <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              <small>Remember Me</small>
            </label>
            <button type="submit" class="btn btn-login float-right" name="loginsubmit" id="loginsubmit">Submit</button>
          </div> 
        </div>
<div class="copy-text"><a href="reset_password.php">Forgot password?</a></div>
		</div>
		
		</form>
		<div class="col-md-8 banner-sec">
            
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
        <img class="d-block img-fluid" src="assets/img/kid.jpg" alt="First slide" style="opacity: 10%;">
      <div class="carousel-caption d-none d-md-block">
          <div class="banner-text">
          <h2>Welcome</h2>
            <p>Pick & drop is an application that connects parents, school and shuttle drivers as children are taken to school and returned home daily</p>    
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>    
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                    
        </div>	
  </div>
    </div>
            </div>	   
		    
		</div>
	</div>
</div>
</section>
<?php //include 'footer.php'; ?> 
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.3.2.1.min.js"></script>
<script type="text/javascript" src="main.js"></script>
</html>
