<?php include 'conf/conf.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title><?php  $jdl = mysql_query("SELECT nama from judul");
while ($klk = mysql_fetch_array($jdl)) {
  $namajdl[] = $klk['nama'];
}
    echo $namajdl[0]; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">
     <!-- Bootstrap core JavaScript
    ================================================== -->
    
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1.js"></script> 
    <script type="text/javascript" src="js/bootstrap-hover-dropdown.js"></script>
    <script type="text/javascript" src="js/selectize.js"></script> 
    <script type="text/javascript" src="js/weather.js"></script> 
    <script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script> 
    <script type="text/javascript" src="js/getscript.js"></script>


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script type='text/javascript'>
     $(document).ready(function () {
     if ($("[rel=tooltip]").length) {
     $("[rel=tooltip]").tooltip();
     }
   });
  </script>

<script>
function validateForm()
{
var x=document.forms["myForm"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
</script>
  </head>
  <body>
  <!-- HTML to write -->

<div class="container">
<?php
error_reporting(0); 
  ob_start();
session_start();
if(!isset($_SESSION['username'])) {
?>

<div class='alert alert-danger'>
        <strong>Sorry bro !</strong> Anda harus login terlebih dahulu, Please Login <a href="index.php">here</a>
</div>

<?php

}else { $username = $_SESSION['username']; 
include 'conf/conf.php';
$query = mysql_query("SELECT * FROM reg WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
?>
  <div class="row">
    <nav class="navbar navbar-default " role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="rumah.html"><?php    echo $namajdl[0];  ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><?php include 'scoreboard.php'; ?></li>

  <li><?php include 'rules.php'; ?>
</li>
  <li><?php include 'prices.php'; ?>
</li>
  <li><?php include 'contact.php'; ?>
</li>
  <li><?php include 'about.php'; ?>
</li>

        
        </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php include 'profile.php'; ?>
        <li><a href="logout.php">Logout</a> </li>
     </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  </div>
</div>

<?php include "misi.php" ?>
</div>
</div>
    </div>
    </div>
</div>
<div class="container">
  <div class="row">
  <div class="panel-body btn-primary ">
  <center>
<span class="label ">Copyright &copy <b id="kd">KeDai</b> <b id="cp">Computerworks</b></span></center>
   </div>
</div>
  </div>
</div>

</div>

</html>
 
<?php 
}
 ?>
