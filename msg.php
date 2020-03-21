<?PHP
$username = $_POST["name"];
$email = $_POST["emailaddress"];
$to = "shreeya.pahune@gmail.com";
$subject = "Visitor $name on website has sent a message";
$headers = "From: $email\n";
$message = $_POST['sentmessage'];

$user = "$email";
$usersubject = "Thank You $name";
$userheaders = "From: shreeya.pahune@gmail.com\n";
$usermessage = "Thank you sending in a message.";
mail($to,$subject,$message,$headers);
mail($user,$usersubject,$usermessage,$userheaders);
?>