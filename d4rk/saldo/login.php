<!DOCTYPE html>
<html>
<head>
	<title>Lupa Password </title>
</head>
<body>
<center>
	Login 
<form action="" method="post">
	<table>
<tr>
	<td>User</td>
	<td><input	type='text' name='user'></td>
</tr>	
<tr>
	<td>Pass</td>
	<td><input	type='password' name='pass'></td>
</tr>
<tr><td></td><td><input type="submit" value="login"></td></tr>
		</table>	
</form>
<?php 
if (isset($_POST['user'])) {
$user = $_POST['user'];
$pass = $_POST['pass'];

if ($user == 'n3n3k' and $pass =='cucutertampanbanget' ) {
	echo "Total Saldo Nenek adalah Rp. 5.000.000";
} else{
	echo "n3n3k lupa passwornya";

}
} ?>
</center>
<!-- 
http://ip_address/d4rk/saldo/pass.txt
password login : hadiacucu
-->
</body>
</html>