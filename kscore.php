<?php  include 'conf/conf.php'; ?><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#home" role="tab" data-toggle="tab">Top Score</a></li>
  <li><a href="#user" role="tab" data-toggle="tab">Online
<?php $on = mysql_num_rows(mysql_query("SELECT o_cookie from on_online"));
$in = mysql_num_rows(mysql_query("SELECT pesan from inbox where user='$user'"));
 ?>
   <span class="badge"><?php echo $on; ?></span></a></li>
  <li><a href="#pmn" role="tab" data-toggle="tab">inbox 

  <span class="badge"><?php echo $in; ?></span></a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home">
    <div class="list-group">
  <?php
   $level = mysql_query("SELECT user,point,idmisi from score order by point + 0 desc limit 5");
   $levels = mysql_num_rows(mysql_query("SELECT user,point,idmisi from score order by point + 0 desc limit 5"));
   while ($plevel = mysql_fetch_array($level)) {
 $q[] = $plevel['user'];
 $qi[] = $plevel['idmisi'];
 $qpoint[] = $plevel['point'];
    }
     $sql = mysql_query("SELECT level from kmisi");
      while ($da = mysql_fetch_array($sql)) {
        $data[] = $da['level'];
        $soall[]= $da['soal'];

      }
for ($jkl=0; $jkl < $levels; $jkl++) { 
    ?>

      <h4 class="panel-title">
        <a data-toggle="collapse" class="list-group-item" data-parent="#accordion" href="#c<?php echo $jkl ?>">
          <?php echo $q[$jkl]; ?>

      <span class="badge"><?php 
      echo $qpoint[$jkl] ?></span></a>
      </h4>
    <div id="c<?php echo $jkl ?>" class="panel-collapse collapse">

  <div class="panel panel-default">
      <div class="panel-body">   
      <?php
 $sqlu = mysql_query("SELECT * from misi,status where status.status='off' and status.username='$q[$jkl]' and status.idmisi=misi.idmisi")or die(mysql_error());
 while ($dd = mysql_fetch_array($sqlu)) {
?>
    <a data-toggle="collapse" class="list-group-item" data-parent="#accordion" href="#">
          <?php echo $dd['clue']; ?>
      <span class="badge"><?php 
      echo $dd['point'] ?></span>
          </a>
<?php
}
        ?>

     </div></div>
  </div>

<?php } ?>
</div>    
  </div>
  <div class="tab-pane" id="user">
<?php
 include 'conf/conf.php';
if(isset($_COOKIE['username']) AND isset($_COOKIE['password'])){
$cookie = $_COOKIE['username'];
$timein = time();
$batas_time = 40;
$batas_time2 = 100;
$timeout = $timein - $batas_time;
$timeout2 = $timein - $batas_time2;
$tanggal = date("Y-m-d");

$sql_on = mysql_query("SELECT * FROM on_online
WHERE o_cookie = '$cookie'
AND o_tanggal = '$tanggal'
LIMIT 1");
$jum_on = mysql_num_rows($sql_on);
while($data_on = mysql_fetch_array($sql_on))
{$o_id = $data_on['o_id'];}

if ($jum_on>0){
 mysql_query("UPDATE on_online
 SET o_waktu = '$timein', o_tanggal = '$tanggal'
 WHERE o_id = '$o_id'");
}else{
 $insert = mysql_query("INSERT INTO on_online
 (o_waktu, o_cookie, o_tanggal)
 VALUES('$timein','$cookie','$tanggal')");
}

mysql_query("DELETE FROM on_online
WHERE o_waktu<$timeout AND o_cookie = '$cookie'");
mysql_query("DELETE FROM on_online
WHERE o_waktu<$timeout2");

$oll = mysql_query("SELECT * FROM on_online LIMIT 10");

while($data_oll = mysql_fetch_array($oll)){
$cek = $data_oll['o_waktu'];
      if($cek>$timeout){
       $status = "

       Online";

      }else{
      $status = "Diam";
      }
?>
     <h4 class="panel-title">
        <a data-toggle="collapse" class="list-group-item" data-parent="#accordion" href="#d">
         <?php 
echo "$data_oll[o_cookie] ";
 ?>   <span class="badge"><?php echo  $status; ?></span></a>
      </h4>
<?php
}
}else{
?>
<div class="alert alert-info">
<center>
Maaf Anda hanya bisa melihat user yang bermain, setelah login !!</center>

  </div>
<?php
}
?>
  </div>


  <div class="tab-pane " id="pmn">
<?php 
$qwp = mysql_query("SELECT * from inbox where user='$user'");
$f = mysql_num_rows($qwp);
while ($opo = mysql_fetch_array($qwp)) {
$jdk[] = $opo['judul'];
$ibox[] = $opo['pesan'];
}
for ($opi=0; $opi < $f; $opi++) { 

 ?>
     <h4 class="panel-title">
        <a data-toggle="collapse" class="list-group-item" data-parent="#accordion" href="#opi<?php echo $opi ?>">
        <?php echo $jdk[$opi]; ?>
       <span class="badge">new</span></a>
      </h4>

    <div id="opi<?php echo $opi ?>" class="panel-collapse collapse">

  <div class="panel panel-default">
      <div class="panel-body">
      <?php echo $ibox[$opi]; ?>
     </div></div>
  </div>


<?php } ?>
        </div>
</div>


</div>
