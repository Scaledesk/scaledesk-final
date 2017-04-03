<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail1 = new PHPMailer;
$email=$_POST['email'];
$phone=$_POST['phone'];
$name=$_POST['name'];

// echo $email;
// echo $phone;
// echo $name;
// die;
$emailadmin="sanchit2411@gmail.com";
$emailadmin2="priyanka@scaledesk.com";
$emailsubadmin="lakhani@scaledesk.com";
// $emailadmin="nkscoder@gmail.com";

$subject = "Contact Us";
$Usersubject="Thank You for contacting Scaledesk";
$messageUsers=file_get_contents('template.html');
$message ='<html>
<body>
<div id="abcd" style="text-align:justify;font-size:18px;"> Name:-'.$name.'<br> Email:-'.$email.'<br>Phone:-'.$phone.'</div>
</body>
</html>';
// $phoneMessage ='<html>
// <body>
// <div id="abcd" style="text-align:justify;font-size:18px;"><br>Phone:-'.$phone.'</div>
// </body>
// </html>';



// $Popupsubject="Ecomm - Exit Intent Modal Form";
// $popupMessage ='<html>
// <body>
// <div id="abcd" style="text-align:justify;font-size:18px;"><br>Phone/Email - :-'.$popupEmail.'</div>
// </body>
// </html>';
/*$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.scaledesk.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'contact@scaledesk.com';                 // SMTP username
$mail->Password = 'qazplmq1w2e3r4';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;  
$mail->IsHTML(true);  */
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'nkscoder@gmail.com';                 // SMTP username
$mail->Password = 'xxxxxx';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;// TCP port to connect to
$mail->IsHTML(true);
$mail->setFrom('nkscoder@gmail.com', 'Scaledesk Web Studio');
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('nkscoder@gmail.com', 'noreply');
// TCP port to connect to
/*$mail1->isSMTP();                                      // Set mailer to use SMTP
$mail1->Host = 'mail.scaledesk.com';  // Specify main and backup SMTP servers
$mail1->SMTPAuth = true;                               // Enable SMTP authentication
$mail1->Username = 'contact@scaledesk.com';                 // SMTP username
$mail1->Password = 'qazplmq1w2e3r4';                           // SMTP password
$mail1->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail1->Port = 587;
$mail1->IsHTML(true);
*/
$mail1->isSMTP();                                      // Set mailer to use SMTP
$mail1->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail1->SMTPAuth = true;                               // Enable SMTP authentication
$mail1->Username = 'nkscoder@gmail.com';                 // SMTP username
$mail1->Password = 'xxxxxx';                           // SMTP password
$mail1->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail1->Port = 465 ;// TCP port to connect to
$mail1->IsHTML(true);
$mail1->setFrom('nkscoder@gmail.com', 'Scaledesk Web Studio');
//$mail->setFrom('contact@scaledesk.com', 'Scaledesk');
$mail->addAddress($email, $name);     // Add a recipient
//$mail1->setFrom('contact@scaledesk.com', 'Scaledesk');
$mail1->addAddress($emailadmin);     // Add a recipient
$mail1->addAddress($emailadmin2);     // Admin mail
$mail1->addAddress($emailsubadmin);  // sub admin mail

$mail->Subject = $Usersubject;
$mail->Body    = $messageUsers;
$mail1->Subject = $subject;
$mail1->Body    = $message;
    // echo "<pre/>";
    // print_r($mail1);die;


  



   
if($mail1->send())
 {
       
            if($mail->send()){
                header("location:/scaledesk-final/thankyou.html");
            }else{
               header("location:/scaledesk-final/thankyou.html");
            }
      
}else{
     
      header("location: ../index.html");
      

          
}
