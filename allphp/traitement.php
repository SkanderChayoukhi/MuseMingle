<?php


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$message=$_POST['message'];

$msg="First name: ".$fname."<br>"."Last name: ".$lname."<br>"."E-mail: ".$email."<br>"."Message: ".$message ;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

    
        if( !empty($fname) && !empty($lname) && !empty($email) && !empty($message) ){
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'ahmedmajid.salhi@gmail.com';                     //SMTP username
        $mail->Password   = 'uziq uecv bhlj zapt ';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('from@example.com', 'musemingle');
        $mail->addAddress('ahmedmajid.salhi@gmail.com');     //Add a recipient
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = $msg;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        header('location:contact.php?message=your message has been sent');
        // echo '<script>alert("envoyee")</script>';
    } 
    else{
//         echo '<script language="javascript" type="text/javascript"> 
//         alert("An error occurred while sending the email. Please try again later");
//         window.location = "contact.php";
// </script>';
        header('location:contact.php?message=An error occurred while sending the email. Please try again later');
        // echo '<script>alert("An error occurred while sending the email. Please try again later.")</script>';
    
} 





