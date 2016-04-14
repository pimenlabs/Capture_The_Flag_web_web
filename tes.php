<table border="1">
	<tr>
		<td>Data</td>
	</tr>
	<tr>
<?php 
include 'conf/conf.php';
$cek = mysql_query("select ket from kmisi where level = 'Ultah'");
if (mysql_num_rows($cek) > 0) {
	while ($d = mysql_fetch_array($cek)) {
?>	<td>	<?php echo $d['ket']; ?>	
</td>
<?php
}
}else{
?>
<td><?php 		echo "Data masih kosong";
 ?></td>
<?php
 }

 ?>
	</tr>
</table>	