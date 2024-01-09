
<?php  
    if ($_POST['name'] != '' || $_POST['email'] != '' || $_POST['phone'] != '')  {

         // Mail Address Where email will be submit 
         $to = "corporate@fotislaw.com";  
         $email = "website@fotislaw.com"; 
         $subject = "Contact Request, name: ".$_POST["fname"];
     
         $sendMessage = '';
         // Email Template
         $sendMessage = '   
             <table width="100%" cellspacing="0" cellpadding="0" border="0">  
                 <tr>
                     <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Full Name</td>
                     <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;">' . $_POST["fname"] . $_POST["lname"] . '</td>
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
                     <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Organisation</td>
                     <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;">' . $_POST["organisation"] . '</td>
                 </tr>    
                 <tr>
                     <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Country</td>
                     <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;">' . $_POST["country"] . '</td>
                 </tr>    
                 <tr>
                     <td style="border:1px solid #d5d2d2;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Message</td>
                     <td style="border:1px solid #d5d2d2;padding:5px 10px;font-size:14px;border-left:0;">' . $_POST["message"] . '</td> 
                 </tr> 
             </table>
         ';
     
         $header = "From:".$email." \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         // die($sendMessage);
         $retval = mail ($to,$subject,$sendMessage,$header);
         // message Notification
         if( $retval ) {
             echo '<script>window.location.href = "thankyou.php";</script>';
         }else {
             echo 'Error sending message';
         }  

    } else {
        echo "Please fill the form and submit again!";
    }
?> 