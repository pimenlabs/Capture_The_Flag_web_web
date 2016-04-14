<div class="container">
  <div class="row">

<?php 
if (isset($_SESSION['username'])) {
$user= $_SESSION['username'];
$cekbro = mysql_num_rows(mysql_query("SELECT * from status where username='$user' and status='on'"));
$cekbro1 = mysql_num_rows(mysql_query("SELECT idmisi from misi"));


for ($kl=1; $kl <= $cekbro1; $kl++) { 

$ckp = mysql_num_rows(mysql_query("SELECT idmisi from status where idmisi='$kl' and username='$user'"));

if ($ckp != 1) {
 
          if ($cekbro < $cekbro1 ) {
             $cekya = mysql_query("SELECT clue,level from misi where idmisi = '$kl'");
              while ($wkwk = mysql_fetch_array($cekya)) {
                
           ?> 
<!-- penabahan misi-->
      <div class="alert alert-danger">
      <strong>New Missions :
      <?php echo $wkwk['clue']." ";?>(<?php echo " ".$wkwk['level']; ?>)</strong>

<!-- batas penambahan misi -->
<a href="" data-toggle="modal" data-target=".bs-newmisi-modal-lg">
      <strong>Tambahkan </strong> </a>   
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      </div>
           <?php 
}}}              }?>

      <div class="modal fade bs-newmisi-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="container"><br>
         <div class="panel-primary col-sm-11">
            <div class="panel-heading">
              <h3 class="panel-title">
              Memperbaharui List Challanges
              </h3>
            </div>
            <div class="panel-body ">
             <form action="" method="post">
  <div class="form-group ">
  <label>Apakah Anda Ingin Menambah Challanges Baru ??</label>
    <input type="text" class="form-control" name="mision" required value="yes" >
  </div>
  <button type="submit" class="btn btn-primary">Tambahkan Misi</button>
             </form>
             <?php 
for ($kll=1; $kll <= $cekbro1; $kll++) { 

$ckp1 = mysql_num_rows(mysql_query("SELECT idmisi from status where idmisi='$kll' and username='$user'"));

if ($ckp1 != 1) {
             if (isset($_POST['mision'])) {

              $cekdong = mysql_query("INSERT INTO status values ('$user','$kll','on') ");
              if ($cekdong) {
               echo "<script>document.location.href='start.php';</script>"; 
              }else{
              echo "<script>document.location.href='start.php';</script>"; 
              }
             }
}
}
 ?>
            </div>
          </div>
       </div>
    </div>
  
</div>
</div>
</div>
<div class="alert alert-success">

<?php
//$externalIp = file_get_contents('http://phihag.de/ip/');
$ip = $_SERVER['REMOTE_ADDR'];
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$Browser = $_SERVER['HTTP_USER_AGENT'];
$iso = php_uname();
 gethostbyaddr($_SERVER['REMOTE_ADDR']);
include 'conf/conf.php';
if (isset($_SERVER['REMOTE_ADDR'])) {
  $ip = $_SERVER['REMOTE_ADDR'];
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$Browser = $_SERVER['HTTP_USER_AGENT'];
$iso = php_uname();
$cek = mysql_num_rows(mysql_query("SELECT * FROM  listip where ip='$ip'"));
if ($cek > 0) {
}else{

$tes = mysql_query("INSERT INTO listip  VALUES (null,'$ip','$externalIp','$host', '$Browser', '$iso')") ;
}
}
?>
 Anda Log In Sebagai : <strong><?php echo $_SESSION['username']; ?></strong> IP :<b><?php echo $ip ?></b> ||
  waktu Login : <strong><?php echo $_SESSION['waktu']; ?></strong> || Score anda : 
  <?php 
  include 'conf/conf.php';
$result = mysql_query("SELECT point FROM score where user='$user'");
while($r = mysql_fetch_array($result)){ 
echo $r['point'];
}
?> || Total Challanges Not Complete : <?php  echo $cekbro; ?>
        </div>
      

<div class="alert alert-danger">
<p>Info : Dalam Games kali ini Clue/kunci jawaban yang dalam setiap misi adalah kata/huruf/nomer atau bercetak miring, menggunakan spasi , huruf besar,huruf  kecil itu sangat berpengaruh :)
<b>Gunakan bahasa indonesia yang benar</b>,low g' dapat petunjuk <b>cek dibalik layar</b> :p, Semangat bro !!</p></div>

      <div class="col-sm-8">           

          <div class="tile tl-big tl-border">
              <h3 class="red">Challange</h3>
                  <div class="content">
                  <div class="box-news-flash">
                      <div id="prev-nf" class="prev" style="display: block;"></div>
                      <div id="next-nf" class="next" style="display: block;"></div>
                      <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 627px; height: 100px; margin: 0px; overflow: hidden;">
                      <div class="news-flash" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 4px; margin: 0px; width: 3727px; height: 82px; z-index: auto;">

<?php 
$ck = mysql_query("SELECT * from misi");
while ($o = mysql_fetch_array($ck)) {
  
?>
  
                  <div class="item-flash" style="margin-right: 5px;">
                              <div class="item-img">
                                  <img src="img/kd1.jpg" alt="photo"> </div>
                              <div class="item-text">
                                  <div class="detail">
                                      <span class="date"><?php echo $o['waktu']; ?></span>
                                  </div>
                                  <h3> <a href="#">
                                  Level :  <b><?php echo $o['level']; ?></b><br>
                                  point : <b><?php echo $o['point']; ?></b><br>
                                  Clue&nbsp:  <b><?php echo $o['clue']; ?></b> </a></h3>
                              </div>
                          </div>

<?php
}
 ?>                  

                  </div>
                  </div>
                  </div>
                  </div>
              </div>    
              
      <?php 

      $ql = mysql_num_rows(mysql_query("SELECT * from kmisi"));
      $sql = mysql_query("SELECT * from kmisi");
      while ($da = mysql_fetch_array($sql)) {
        $ket[] = $da['ket'];
        $data[] = $da['level'];
        $soall[]= $da['soal'];

      }
        $sqlo = mysql_query("SELECT idmisi from misi");
      while ($daq = mysql_fetch_array($sqlo)) {
        
        $idmis[]=$daq['idmisi'];

      }

      for ($i=0; $i <$ql ; $i++) { 
      ?>
      <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $i; ?>">
     <?php 
     echo $ket[$i];  
     ?>
        </a>
      </h4>
    </div>
    <div id="<?php echo $i; ?>" class="panel-collapse collapse">
      <div class="panel-body">
        <div class="table-responsive">
  <table class="table">
  <tr>
  <td class="info">Challenges</td>
  <td class="warning">Point</td>
  <td class="warning">Players</td>
  <td class="warning">Status</td>
  </tr>
  <!--Status On
  -->
  <?php 
  $ada = mysql_num_rows(mysql_query("SELECT * from misi,status where level = '$data[$i]' and status.status='on' and status.username='".mysql_real_escape_string($user)."' and status.idmisi=misi.idmisi"));
 if ($ada > 0) {
 ?>

<!-- tempat status -->
<?php 
  $sqlu = mysql_query("SELECT * from misi,status where level = '$data[$i]' and status.status='on' and status.username='".mysql_real_escape_string($user)."' and status.idmisi=misi.idmisi")or die(mysql_error());
  $jsqlu = mysql_num_rows($sqlu);
  while ($po = mysql_fetch_array($sqlu)) {
    
    ?>
  
    <tr><td> 
    
    <a href="" data-toggle="modal" data-target=".<?php echo $no[]= $po['no'];?>">
    <button type="button" class="btn btn-danger col-sm-12">
         <?php echo $po['clue'];?>
   </button></a>

<div class="modal fade  <?php echo $no[]= $po['no'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="container"><br>
         <div class="panel-primary col-sm-11">
            <div class="panel-heading">
              <h3 class="panel-title">
              <?php echo "Misi ".$apo[]= $po['clue'];?>
  </div>
            <div class="panel-body ">
         
 <!--misi-->
 <form role="form" action="" method="post">
  
   <div class="form-group ">
    <p for="Username"><?php echo nl2br(stripslashes($po['soal'])); ?></p>
  </div> 

  <div class="form-group ">
    <input type="text" class="form-control" name="pmn<?php echo $po['no'];?>"  required placeholder="Input Your Answers !!">
  </div>
  <button type="submit" class="btn btn-primary">Cek</button>
 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
</form>
<!-- batas misi -->
<?php 
$pmn = "pmn";
$asw=$pmn.$po['no'];
$lo= $po['point'];
$idmisi = $po['no'];
$waktu  = date("Y-m-d H:i:s");

if (isset($_POST[$asw])) {
 $jwbn = $_POST[$asw];
 $sql100 = mysql_query("SELECT answer from misi where idmisi='".mysql_real_escape_string($idmisi)."'");
   while ($lol =mysql_fetch_array($sql100)) {
    $sqk = $lol['answer'];
   }

       if (($sqk == $jwbn)) {
  $time = $_SESSION['waktu'] ;  
     $sql = mysql_query("UPDATE score set waktu='$time' where user='$username'");
       
   $sqlst = mysql_query("UPDATE status set status='off' where idmisi='$idmisi' and username='$user' ");
   $misi = mysql_query("UPDATE score set point=point+'$lo',idmisi='$idmisi', waktu='$waktu' where user='$user'");
        if ($sqlst) { 
          echo "<script>alert('Mission Complete !!');</script>"; 
          echo "<script>document.location.href='start.php';</script>"; 
       
        }
  }else{
   echo "<script>alert('Coba lagi dan tetap seamangat !!');</script>"; 
         echo "<script>document.location.href='start.php';</script>"; 
       
  }

}      

 ?>  
            </div>


            <div class="panel-body ">
            </div>
          </div>
       </div>
    </div>
  </div>
</div>
  </td>
    <td> <?php echo $apo[]= $po['point'];?></td>   
  <td >
    <?php
    $cc1=$po['idmisi'];
         $Players = mysql_num_rows(mysql_query("SELECT username from status where status='off' and idmisi='$cc1'"));
         $PlayersQ = mysql_query("SELECT username from status where status='off' and idmisi='$cc1'");
     ?>

 <!-- player top -->  

 <a href="" data-toggle="modal" data-target=".o<?php echo $player[]= $po['idmisi'];?>">
 <button type="button" class="btn btn-success col-sm-12" > 
         <?php echo $Players;?>
   </button></a><div class="modal fade o<?php echo $player[]= $po['idmisi'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
         <div class="panel-primary col-sm-12">
    <div class="list-group">
  <a href="#" class="list-group-item active">
 <?php echo "Misi Complete (".$apo[]= $po['clue'].")";?>
  </a>
<?php while ($nmk0 = mysql_fetch_array($PlayersQ)) {
?>
 <a href="#" class="list-group-item"><?php echo $nmk0['username']; ?></a>
<?php } ?>

</div>

          </div>
       </div>

    </div>
  </div>

<!-- player top -->
  </td>
  
    <td> <?php 
    $cekya = mysql_query("SELECT status from status where status='on'");
    if ($cekya) {
          echo "Mission Not Complate";
    }
    ?></td></tr>
<?php } ?>

<!-- batas on-->

 <?php
 }else{
 ?>
  <tr>
<td colspan="4"> 
 <div class="alert alert-danger">
<center>
Maaf misi baru belum tersedia !!</center>

  </div>
</td></tr>
<?php } ?>


<!-- status off-->
<?php 

  $sqlu2 = mysql_query("SELECT * from misi,status where level = '$data[$i]' and status.status='off' and status.username='".mysql_real_escape_string($user)."' and status.idmisi=misi.idmisi")or die(mysql_error());
  $jsqlu2 = mysql_num_rows($sqlu2);
  while ($po2 = mysql_fetch_array($sqlu2)) {
    
    ?>
    <tr><td> 
    
    <a href="" data-toggle="modal" data-target=".<?php echo $no2[]= $po2['no'];?>">
    <button type="button" class="btn btn-success col-sm-12">
         <?php echo $po2['clue'];?>
   </button></a>

<div class="modal fade  <?php echo $no2[]= $po2['no'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="container"><br>
         <div class="panel-primary col-sm-11">
            <div class="panel-heading">
              <h3 class="panel-title">
              <?php echo "Misi ".$apo2[]= $po2['clue']." Terselesaikan";?>
    <!-- tambahkan user y selesai -->
            </div>
            <div class="panel-body ">
            </div>
          </div>
       </div>
    </div>
  </div>
</div>
  </td>
    <td> <?php echo $apo2[]= $po2['point'];?></td>
  <td ><?php
    $cc=$po2['idmisi'];
         $Players1 = mysql_num_rows(mysql_query("SELECT username from status where status='off' and idmisi='$cc'"));
         $Players11 = mysql_query("SELECT username from status where status='off' and idmisi='$cc'");
?>
 

 <!-- player top -->  

 <a href="" data-toggle="modal" data-target=".p<?php echo $player2[]= $po2['idmisi'];?>">
 <button type="button" class="btn btn-success col-sm-12">
         <?php echo $Players1;?>
   </button></a>

<div class="modal fade p<?php echo $player2[]= $po2['idmisi'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
         <div class="panel-primary col-sm-12">
<div class="list-group">
  <a href="#" class="list-group-item active">
    <?php echo "Misi Complete (".$apo2[]= $po2['clue'].")";?>
  </a>
<?php while ($nmk = mysql_fetch_array($Players11)) {
?>
 <a href="#" class="list-group-item"><?php echo $nmk['username']; ?></a>
<?php } ?>

</div>
          </div>
       </div>

    </div>
  </div>

<!-- player top -->
  </td>
      <td> <?php 
    $cekya = mysql_query("SELECT status from status where status='off'");
    if ($cekya) {
          echo "Mission  Complate";
    }
    ?></td>
    </tr>
<?php } ?>
<!--batas off -->


    </table>
</div>

       </div>
    </div>
  </div>


      </div>
      <?php }?>
      </div>


<?php include 'kanan.php'; 

  
}else{

   echo "<script>document.location.href='start.php';</script>"; 
     

}
?> 
