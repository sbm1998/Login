<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My Companion</title>

 <link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 
 <script src="js/jquery.js" type="text/javascript"></script>

 <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 <script src="js/bootstrap.js" type="text/javascript"></script>

<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["age"].value;if (z == null || z == "") {alert("age must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<8 || a.length>25){alert("Passwords must be 8 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>


<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>

</head>

<body>
<?php
 include_once 'dbConnection.php';
session_start();
  if((isset($_SESSION['email']))){
header("location:account.php?q1=1");

}
?>

<div class="row logo">
<div class="col-md-6">
<h1><span style="color:#428BCA">EDUBILD TECHNOLOGIES</span><span style="font-size:15px; color:#fff;"></span></h1>
</div>
<div class="col-md-2">
</div>
<div class="col-md-4">
<a href="#" class="pull-right sub btn sub1" data-toggle="modal" data-target="#myModal"><span  aria-hidden="true"></span>Signin</a>
</div></div>


<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span style="color:#428BCA">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>



<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div>
  </div>
</div>


<div class="bg">
<div class="row">
<div class="col-md-7"></div>
<div class="col-md-4 panel">
<!-- sign in form begins -->  
  <form class="form-horizontal" name="form" action="sign.php?q=account.php?q=1" onSubmit="return validateForm()" method="POST">
<fieldset>


<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="age"></label>
  <div class="col-md-12">
    <input id="age" name="age" placeholder="Enter your age" class="form-control input-md" type="number" min="12">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option value="Male">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input type="submit"  value="Register" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form>
</div>
</div></div>
</div>
</body>
</html>