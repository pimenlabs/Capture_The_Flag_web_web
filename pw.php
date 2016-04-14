<form action="" method="post">
	answer <input type="text" name="answ">
	<input type="submit" value="cek">
</form>
<?php 
include 'conf/conf.php';

if (isset($_POST['answ'])){
$cek = mysql_query("select answer from misi where idmisi='2'");
while ($cek1 = mysql_fetch_array($cek)) {
	$asw = $cek1['answer'];
}

	$jwbn= $_POST['answ'];
	if (($asw == $jwbn)) {
		echo "Batul";
    $sql0= mysql_query("UPDATE misi set status='on' where idmisi='2' and answer='$jwbn'");
         // $misi = mysql_query("UPDATE score set point=point+'$lo',idmisi='$idmisi', waktu='$waktu' where user='$user'");
if ($sql0) {
echo "update ya";
}
	}else{
		echo "bego loh";
	}

}
?>
