<?php
session_start();

include 'conf/conf.php';

$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM reg,score WHERE username = '".mysql_real_escape_string($username)."'");

$hasil = mysql_fetch_array($cekuser);
if(mysql_real_escape_string($pass) <> $hasil['password']) {
		echo "<script>alert('Username and Password Salah!');</script>";
		echo "<script>document.location.href='index.php';</script>"; 
                        
		} else {
		 $_SESSION['username'] = $hasil['username'];
		 $_SESSION['waktu'] = $hasil['waktu'];

 setcookie('username', $username, time()+3600000);
 setcookie('password', $pass, time()+3600000);
	    //$time = $_SESSION['waktu'] ;

$time  = date("Y-m-d H:i:s");
		 $sql = mysql_query("UPDATE score set waktu='$time' where user='".mysql_real_escape_string($username)."'");
		 echo "<script>document.location.href='start.php';</script>"; 
         
		}

?>
