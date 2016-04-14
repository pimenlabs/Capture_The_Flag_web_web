<?php

session_start(); 

?>

<html> <head> <title>PHP-CAPTCHA </title> </head> <body onload="return focuson();"> <script   language="javascript"> function focuson() { document.form1.number.focus()}

function check() { if(document.form1.number.value==0) { alert("Please enter your Category Name"); document.form1.number.focus(); return false; } }

</script> 

<?php

 if(isset($_REQUEST['Submit'])){ $key=substr($_SESSION['key'],0,5); $number = $_REQUEST['number']; if($number!=$key){ echo '<center><font face="Verdana, Arial, Helvetica, sans-serif" color="#FF0000"> Validation string not valid! Please try again!</font></center>';} else{ echo '<center><font face="Verdana, Arial, Helvetica, sans-serif"  color="#66CC00"> Your string is valid!</font></center>';} } 

?>

<form name="form1" method="post" action="form.php"  onsubmit="return check();">