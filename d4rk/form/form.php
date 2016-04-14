<center>
	<form>
	<!-- <label>n3n3k numb</label>
		 -->
		<label>Username</label><input type="text" name="user"><br>
		<label>Password</label><input type="password" name="pass"><br>
		<input type="submit" value="login">
	</form>
	<?php 
	if (isset($_POST['user'])) {
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		if (($user == 'n3n3k') and ($pass == 'numb')) {
			echo "<font color='green'>Flag: c0m3_t0_p4p4</font>";
		}else{
			echo "Coba lagi bro !! semangat ya hehehe";

		}
	}
	 ?>
</center>