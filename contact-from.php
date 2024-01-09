<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subject = 'Fotis Law Firm';
header('Content-Type: application/json');
if ($name === ''){
print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
exit();
}
if ($email === ''){
print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
exit();
}
if ($message === ''){
print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
exit();
}
$content="From: $name \nEmail: $email \nPhone: $phone \nMessage: $message";
$recipient = "corporate@fotislaw.com"; 
$mailheader = "From: Fotis Law Firm <corporate@fotislaw.com> \r\n";
mail($recipient, $subject, $content, $mailheader,"-f corporate@fotislaw.com");
header('Location: thankyou.php');
exit();
?>
