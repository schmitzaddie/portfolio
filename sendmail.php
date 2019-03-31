<?php
// Variables
/*
*SendMail: by fb.com/nurealamsabbir
*/
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);
$select_industry = trim($_POST['select_industry']);
// $subject= trim($_POST['subject']);
$subject = 'Message From Portfolio';
if(!$subject) {
    $subject = 'Message From Portfolio';
}
$to = "schmitzaddie@gmail.com"; // Change with your email address
//echo "{$to}";
if( isset($name) && isset($email) ) {

	// Avoid Email Injection and Mail Form Script Hijacking
	$pattern = "/(content-type|bcc:|cc:|to:)/i";
	if( preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $message) ) {
		exit;
	}
	// Email will be send
	
//Must end on first column
	
	$headers = "From: $name <$email>\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// PHP email sender
	mail($to, $sub, $body, $headers);

	// PHP email sender
  if(mail( "getthemesopera@gmail.com", $_POST['subject'], $_POST['message'], $headers )){
    echo "Thank you, I have received your message.";
  }
  else {
    echo "Email cannot be sent now. Please try later.";
  }
  //  Replace with your email 
  return false;
}

?>

