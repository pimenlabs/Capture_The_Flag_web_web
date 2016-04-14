

<?php
$externalIp = file_get_contents('http://phihag.de/ip/');
echo "Ip pub : " .$externalIp;
echo "<br>IP anda adalah : ";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>Hostname : " ;
echo gethostbyaddr($_SERVER['REMOTE_ADDR']);
$tgl= date('Y-m-d');
echo "<br>".$tgl;
include 'conf/conf.php';
if (isset($_SERVER['REMOTE_ADDR'])) {
	$ip = $_SERVER['REMOTE_ADDR'];
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$Browser = $_SERVER['HTTP_USER_AGENT'];
$iso = php_uname();
$cek = mysql_num_rows(mysql_query("SELECT * FROM  listip where ip='$ip'"));
if ($cek > 0) {
	echo "<br>Data Tersimpan";
}else{

$tes = mysql_query("INSERT INTO listip  VALUES (null,'$ip','$externalIp','$host', '$Browser', '$iso')") ;
if ($tes) {
	echo "<br>Data Tersimpan";
}else{echo "<br>Data Gagal Tersimpan";}
}
}
?>