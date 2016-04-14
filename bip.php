
<?php
    $_IP_SERVER = $_SERVER['SERVER_ADDR'];
    $_IP_ADDRESS = $_SERVER['REMOTE_ADDR'];
    $_HOSTNAME = gethostbyaddr($_IP_ADDRESS);
    if($_IP_ADDRESS == $_IP_SERVER) // jika server
    {
        ob_start();
        system('ipconfig /all');
        $_PERINTAH  = ob_get_contents();
        ob_clean();
        $_PECAH = strpos($_PERINTAH, "Physical");
        $_MAC_ADDRESS = substr($_PERINTAH,($_PECAH+36),17);
   echo "IP : ".$_IP_ADDRESS;
         echo "<br> MAC : ".$_MAC_ADDRESS;
         echo "<br>  HOSTNAME : ".$_HOSTNAME;

    } else { // jika cli
        $_PERINTAH = "arp -a $_IP_ADDRESS";
        ob_start();
        system($_PERINTAH);
        $_MAC_ADDRESS = ob_get_contents();
        ob_clean();
        $_PECAH = strstr($_MAC_ADDRESS, $_IP_ADDRESS);
        $_PECAH_STRING = explode($_IP_ADDRESS, str_replace(" ", "", $_PECAH));
        $_MAC_ADDRESS = substr($_PECAH_STRING[1], 0, 17);
         echo "IP : ".$_IP_ADDRESS;
         echo "<br> MAC : ".$_MAC_ADDRESS;
         echo "<br>  HOSTNAME : ".$_HOSTNAME;

echo "IP address".$_SERVER["REMOTE_ADDR"];

echo "LAN Address".$_SERVER["HTTP_X_FORWARDED_FOR"];

    }

    $tgl= date('Y-m-d');
    echo "<br> " .$tgl;
?>