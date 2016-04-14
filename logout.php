<?php session_start();
unset($_SESSION['username']);
session_destroy();
echo "<script>document.location.href='index.php';</script>"; 
include 'conf/conf.php';
$cookie = $_COOKIE['username'];
mysql_query("DELETE FROM on_online WHERE o_cookie = '$cookie'");
setcookie('username', '', time()-3600000);
setcookie('password', '', time()-3600000);
?>