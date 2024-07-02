<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$category = $_POST['category'];

try {
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'deepak.wd.dl038.bridgekala@gmail.com'; 
    $mail->Password   = 'ivtkdmnjmjiygxoy';                               
    $mail->SMTPSecure = 'tls';

    $mail->Port       = 587;                                    

    $mail->setFrom('from@example.com', 'Dealer Query');
    $mail->addAddress('luminorrofficial@gmail.com', 'Info Luminorr Officials');     //Add a recipient
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);                                  
    $mail->Subject = "Dealer : Luminorr Officials";
    $mail->Body    = "<div>
        <h1>Dealer : Luminorr Officials</h1>    
    <span>". date("Y-m-d H:i:s") ."</span>
<p>
<ul>
    <li>Name : ".$name."</li>
    <li>Email : ".$email."</li>
    <li>Contact No. : ".$phone."</li>
    <li>Category : ".$category."</li>
</ul>
</p>
    </div>";

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    header("Location: index?message=Query Sent Successfully");
    // exit();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
