<?php
// $name = $_POST['name'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $message = $_POST['message'];
// $subject = 'Fotis Law Enquiry';
// header('Content-Type: application/json');
// if ($name === ''){
// print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
// exit();
// }
// if ($email === ''){
// print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
// exit();
// } else {
// if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
// print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
// exit();
// }
// }
// if ($message === ''){
// print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
// exit();
// }
// $content="From: $name \nEmail: $email \nPhone: $phone \nMessage: $message";
// $recipient = "corporate@fotislaw.com";
// $mailheader = "From: Fotis Law Enquiry <enquiry> \r\n";
// mail($recipient, $subject, $content, $mailheader);
// header('Location: thankyou.html');
// exit();
?>


<?php

$message = '';


if (isset($_POST["submit"])) {
    
    $message = '
		<table width="100%" cellspacing="0" cellpadding="0" border="0">  
             <tr>
                 <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Full Name</td>
                 <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;">' . $_POST["name"]  . '</td>
             </tr> 
             <tr>
                 <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Email Address</td>
                 <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;">' . $_POST["email"] . '</td>
             </tr>
             <tr>
                 <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Phone Number</td>
                 <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;">' . $_POST["phone"] . '</td>
             </tr>  
             <tr>
                 <td style="border:1px solid #d5d2d2;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Message</td>
                 <td style="border:1px solid #d5d2d2;padding:5px 10px;font-size:14px;border-left:0;">' . $_POST["message"] . '</td> 
             </tr> 
         </table>
	';

    require 'class/class.phpmailer.php';
    $mail = new PHPMailer;
    $mail->IsSMTP();                                //Sets Mailer to send message using SMTP

     
// ADD YOUR DETAILS HERE
    $mail->Host = 'smtp.gmail.com';        //Sets the SMTP hosts of your Email hosting, this for Godaddy
    $mail->Port = '587';                                //Sets the default SMTP server port
    $mail->SMTPAuth = true;                            //Sets SMTP authentication. Utilizes the Username and Password variables
    $mail->Username = 'corporate@fotislaw.com';                    //Sets SMTP username
    $mail->Password = 'frgyyekxgoslflea ';                    //Sets SMTP password =======? After 2 step verfication set password
    $mail->SMTPSecure = 'tls';                            //Sets connection prefix. Options are "", "ssl" or "tls"
    $mail->From = 'corporate@fotislaw.com';                    //Sets the From email address for the message
    $mail->FromName = "Fotis Law";                //Sets the From name of the message
    $mail->AddAddress('corporate@fotislaw.com', 'Fotis Law');        //Adds a "To" address 
// ADD YOUR DETAILS HERE
    
    $mail->WordWrap = 50;                            //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);                            //Sets message type to HTML
    $mail->AddAttachment($path);                    //Adds an attachment from a path on the filesystem
    $mail->Subject = $_POST["name"] . ' | ' .$_POST["phone"];                //Sets the Subject of the message
    $mail->Body = $message;                            //An HTML or plain text message body
    if ($mail->Send())                                //Send an Email. Return true on success or false on error
    {
        echo '<script>window.location.href = "thankyou.html";</script>';
    } else {
        echo 'Error sending message';
    }
}