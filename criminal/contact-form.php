<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subject = 'Fotis Law Enquiry';
header('Content-Type: application/json');
if ($name === ''){
print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
exit();
}
if ($email === ''){
print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
exit();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
exit();
}
}
if ($message === ''){
print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
exit();
}
$content="From: $name \nEmail: $email \nPhone: $phone \nMessage: $message";
$recipient = "corporate@fotislaw.com";
$mailheader = "From: Fotis Law Enquiry <enquiry@fotislaw.com> \r\n";
mail($recipient, $subject, $content, $mailheader,"-f enquiry@fotislaw.com");
header('Location: thankyou.html');
exit();
?>