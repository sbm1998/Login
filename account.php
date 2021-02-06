<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login || Registration Page</title>

 <link rel="stylesheet" href="css/bootstrap.min.css"/>
 <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
 <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 <script src="js/bootstrap.js" type="text/javascript"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
<div class="row logo">
<div class="col-md-6">
<h1><span style="color:#428BCA">EDUBILD TECHNOLOGIES</span>&nbsp;<span style="font-size:15px; color:#fff;"></span></h1>

</div>
<div class="col-md-2">
</div>
<div class="col-md-4">
 <?php
 include_once 'dbConnection.php';
session_start();
  if(!(isset($_SESSION['email']))){
header("location:index.php");
}
else
{
$name = $_SESSION['name'];

include_once 'dbConnection.php';
echo '<span class="pull-right top" ><span class="log1"><span aria-hidden="true"></span> </span> <a href="account.php?q1=2" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span  aria-hidden="true"></span>Signout</button></a></span>';
}?>
</div>
</div>
<div class="container-fluid">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
   
    <ol class="carousel-indicators">
      <li data-slide-to="0" class="active"></li>
      <li data-slide-to="1"></li>
      <li data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner" style="height:500px">
      <div class="item active">
        <img src="img/First.jpg"  style="width:100%;">
      </div>

      <div class="item">
        <img src="img/Second.jpg"  style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/Third.jpg"  style="width:100%;">
      </div>
    </div>

   
    <a class="left carousel-control"  data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>
</html>