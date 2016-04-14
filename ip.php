<div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Your IP</h3>
            </div>
            <div class="panel-body">



<?php
$externalIp = file_get_contents('http://phihag.de/ip/');
echo "Public: " .$externalIp;
echo "<br>Local : ";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>Hostname : " ;
echo gethostbyaddr($_SERVER['REMOTE_ADDR']);
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
            </div>
          </div>
         
