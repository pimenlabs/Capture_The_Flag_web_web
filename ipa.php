<?php
	$client  = @$_SERVER['HTTP_CLIENT_IP'];
	$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
	$remote  = $_SERVER['REMOTE_ADDR'];
	$result  = "Tidak ditemukan";
	if(filter_var($client, FILTER_VALIDATE_IP))
	{
		$ip = $client;
		echo "client ".$ip;
	}
	elseif(filter_var($forward, FILTER_VALIDATE_IP))
	{
		$ip = $forward;

		echo "forward ".$ip;
	}
	else
	{
		$ip = $remote;

		echo "remote ".$ip;
	}

	$ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
     echo $ip_data;
	if($ip_data && $ip_data->geoplugin_request != null)
	{
		$result = $ip_data->geoplugin_request;
echo $result;
	}

	return $result;
?>

