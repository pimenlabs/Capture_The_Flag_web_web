
<div class="row">
        <div class="col-sm-4">
<?php 
include 'conf/conf.php';
$plg = mysql_query("Select * from plugin where status='on'");
$jplg = mysql_num_rows($plg);
while ($kplg = mysql_fetch_array($plg)) {
  $pket[] = $kplg['ket'];

}

for ($i=0; $i <$jplg ; $i++) { 
  include  $pket[$i];
  
}
 ?>
        </div>

</div>



