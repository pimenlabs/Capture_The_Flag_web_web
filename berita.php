<?php include 'conf/conf.php'; if (isset($_GET['id'])){?>
  
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

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div class="container">
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
      <a class="navbar-brand" href="rumah.html"><?php echo $namajdl[0]; ?></a>
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

<?php
error_reporting(0); 
  ob_start();
session_start();
if(!isset($_SESSION['username'])) {
?>
<li><a href="" data-toggle="modal" data-target=".bs-example-modal-lg">Daftar</a>
        <?php include 'reg.php'; ?>
</li>

        <li class="dropdown">
         <?php include 'login.php'; ?>

                </li>

<?php
}else { 
$username = $_SESSION['username']; 
include 'conf/conf.php';
$query = mysql_query("SELECT * FROM reg WHERE username = '".mysql_real_escape_string($username)."'");
$hasil = mysql_fetch_array($query);
?>

     <li><a href="start.php">Challanges</a> </li>
   
<li><a href="" data-toggle="modal" data-target=".bs-profile-modal-lg">Profile</a>
<div class="modal fade bs-profile-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="container"><br>
         <div class="panel-primary col-sm-11">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo "About ".$hasil['username']; ?></h3>
            </div>
            <div class="panel-body ">
              
            </div>
          </div>
       </div>

    </div>
  </div>
</div>
</li>
        <li><a href="logout.php">Logout</a> </li>
                  </ul>

<?php 
}
 ?>
        </li>
      </ul>
   
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  </div>
</div>
<section id="content">
	<div class="container">
    <div class="row">
    	<div class="col-xs-8">
        <div class="tile tl-big tl-border">
   
<?php 
include 'conf/conf.php';
 
			$id = $_GET['id'];
			$sql = mysql_query("SELECT * FROM news where id='".mysql_real_escape_string($id)."'");
			while ($r = mysql_fetch_array($sql)) {
			
 ?>
       <h3 class="green"><?php echo $r['judul']; ?> </h3>
        <div class="detail-news">
        	<p class="date"><span class="glyphicon glyphicon-time"></span>&nbsp;<?php echo $r['waktu']; ?> </p>
            <p class="name"><span class="glyphicon glyphicon-user"></span>&nbsp;	<?php echo $r['postname']; ?> </p>
        </div>
        	<div class="cont-box">
<p>
<img src='img/kd.jpg' alt='photo' /> <p align="justify">
<?php echo nl2br(stripslashes($r['isi'])); ?></p>
</p></p>
	<div class="previous-news">
    <h3>Berita Terkait</h3>
    	<ul>
	    <?php include 'conf/conf.php';
      $krf= $r['kategori'];
    	$ka = mysql_query("SELECT * from news where kategori='$krf' limit 4");
    	while ($e = mysql_fetch_array($ka)) {
      	 ?>
	    
	    	<li><a href='artikel-<?php echo $e['id']; ?>-<?php echo $e['judul']; ?>.html'><?php echo $e['judul']; ?></a></li>      
    	<?php }}?>
    	</ul>
    </div>

            </div>
        </div>
        </div>
        
        <?php include 'knn.php'; ?>

</div>
</div>
    </div>
    </div>
</div>

<div class="container">
  <div class="row">
  <div class="panel-body btn-primary ">
  <center>
<span class="label ">Copyright &copy <b id="kd">Pimenlab</b> <b id="cp">Devlopment</b></span></center>
   </div>
</div>
  </div>
</div>

<script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>

  </body>
</html>
<?php }else{
} ?>