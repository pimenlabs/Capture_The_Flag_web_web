<!--
	pimen
-->
<center>
<h4>Form Perhitungan Pangkat</h4>
	<form action="" method="post">
		<input type="text" name="a" placeholder="Masukkan nilai ">
		<br><input type="text" name="b" placeholder="Masukkan nilai pangkat">
		<br><input type="submit" value="Hitung">	

	</form>
<?php
if (isset($_POST['a'])) {

$a = $_POST['a'];
$b = $_POST['b'];
$y = bcpow($a, $b);
echo $a." pangkat ".$b;
?><br>
<h3> <u>Hasil Pangkat</u></h5>
<textarea cols="90%" rows="10%"><?php echo $y;?></textarea>
<br><?php
echo "Jumlah Digit = <b>".array_sum(str_split($y))."</b>";
}
?>


</center>

