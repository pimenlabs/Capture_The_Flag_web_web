<center>
	<form action="" method="post">
	<label>Answer :</label>
	<input type="text" name="cek"><input type="submit" value="cek">
</form>
<?php 
if (isset($_POST['cek'])) {
	$pass = $_POST['cek'];
	if ($pass == 'lying') { 
		echo "<font color='green'>UzRsNG1fazN0NHdhX2Q0bTQxX2szZDQxMw==</font>";
	}else{
		echo "<font color='red'>Sorry ! Wrong Answer ! Try Again !</font>";
	}
}
 ?>
</center>