<?php 

include 'conf/conf.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title><?php $jdl = mysql_query("SELECT nama from judul");
while ($kl = mysql_fetch_array($jdl)) {
  $namajdl[] = $kl['nama'];
}
    echo $namajdl[0]; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <link href="css/selectize.bootstrap3.css" rel="stylesheet">

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
$query = mysql_query("SELECT * FROM reg WHERE username = '".mysql_real_escape_string($username)."'");
$hasil = mysql_fetch_array($query);
?>
 <li><a href="start.php">Challanges</a> </li>
    
<li>  <?php include 'profile.php'; ?>
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

<div class="container">
  <div class="row">

      <div class="col-sm-8">           
          <div class="tile tl-big tl-border">
            <h3 class="red">News Challanges</h3>
              <div class="content">
                <div class="side-news">
                <div class="side-news-left">
                  <ul class="news-box">
              <?php $BatasAwal = 2;
if (!empty($_GET['page'])) {
$hal = $_GET['page'] - 1;
$MulaiAwal = $BatasAwal * $hal;
} else if (!empty($_GET['page']) and $_GET['page'] == 1) {
$MulaiAwal = 0;
} else if (empty($_GET['page'])) {
$MulaiAwal = 0;
}//tampil data
$sql = mysql_query("SELECT * FROM news LIMIT $MulaiAwal , $BatasAwal"); 
while ($q = mysql_fetch_array($sql)) {


              ?>         
               <li class="item-news">
                          <h2 class="title">
                            <a href='artikel-<?php echo $q['id']; ?>-<?php echo $q['judul']; ?>.html'><?php echo $q['judul']; ?> </a></h2> 
                             <div class="detail">
                              <span><?php echo $q['waktu']; ?></span>
                                <span class="author"><?php echo $q['postname']; ?></span>
              
                            </div>                             
                            <div class="text">
                            

                            <div class='img-news'><img src='img/kd1.jpg' alt='photo' /></div> 
                              <p align="justify"><?php echo $q['ringkasan']; ?>
                             </p></div>
                        </li>
                    <?php 

                    } ?>  
                    </ul>
                    
                </div>

                <div class="side-news-right">
              <ul class="list-before ">
                    <h3>Top User</h3>
                    <?php
                    
                      $sqll = mysql_query("SELECT user,point,waktu from score order by point - 0  desc limit 3");
                     while ($qq = mysql_fetch_array($sqll)) {
                     ?>
                    <li>      
<h4 class="panel-title">
        <a data-toggle="collapse" class="list-group-item" data-parent="#accordion" href="#c<?php echo $pl ?>">
          <?php echo $qq['user']; ?>

      <span class="badge"><?php 
     echo $qq['point']; ?></span></a>
      </h4></li>
                    <?php 
                     } ?>
                    </ul>
         

                </div>
                <div class="side-news-right">
                  <ul class="list-before ">
                    <h3>News Challenges</h3>
                    <?php 
                    
                      $sql = mysql_query("SELECT distinct clue,waktu,point from misi order by idmisi desc limit 5");
                     while ($q = mysql_fetch_array($sql)) {
                     ?>
                 
                    <li>      
<h4 class="panel-title">
        <a data-toggle="collapse" class="list-group-item" data-parent="#accordion" href="#c<?php echo $pl ?>">
          <?php echo $q['clue']; ?>

      <span class="badge"><?php 
     echo $q['point']; ?></span></a>
      </h4></li>
          
                    <?php 
                     } ?>
                    </ul>
                </div>
                </div>
                    <div class="pagi-center">
          <ul class="pagination">

  <li class=""><a href="#">&laquo;</a></li>
   <li>
<?php //navigasi
$cekQuery = mysql_query("SELECT * FROM news");
$jumlahData = mysql_num_rows($cekQuery);
if ($jumlahData > $BatasAwal) {
$a = explode(".", $jumlahData / $BatasAwal);
$b = $a[0];
$c = $b + 1;
for ($i = 1; $i < $c; $i++) {
echo '<a ';
if ($_GET['page'] == $i) {
}
echo '" href="?page=' . $i . '">' . $i . '</a>';
}
} 
?>
 </li> <li><a href="#">&raquo;</a></li>
     
</ul>
                    </div>
                </div>
            </div>
            
          </div>
        
<?php include 'kanan.php'; ?>

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
</body>
</html>

