<?php
session_start();
header("Content-type: image/png");
$captcha_image = imagecreatefrompng("img/menu.png")
or die("gagal !");
$captcha_font = imageloadfont("img/anonymous.gdf");
$captcha_text = substr(md5(uniqid('')),-9,9);
$_SESSION['captcha_session'] = $captcha_text;
$captcha_color = imagecolorallocate($captcha_image,0,0,0);
imagestring($captcha_image,$captcha_font,15,5,$captcha_text,$captcha_color);
imagepng($captcha_image);
imagedestroy($captcha_image);
?>