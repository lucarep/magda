<?php
 
 use PHPMailer\PHPMailer\PHPMailer;
 require_once 'phpmailer\Exception.php';
 require_once 'phpmailer\PHPMailer.php';
 require_once 'phpmailer\SMTP.php';

 $mail= new  PHPMailer(true);
 $messaggio_inviato = false;


 if(isset($_POST['submitC'])){
     $name=$_POST['nome'];
     $email=$_POST['email'];
     $message=$_POST['messaggio'];

     try{
         $mail->isSMTP();
         $mail->Host='smtp.gmail.com';
         $mail->SMTPAuth=true;
         $mail->Username='magdaltw2021@gmail.com';
         $mail->Password='magda2021';
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
         $mail->Port ='587';

         $mail->setFrom('magdaltw2021@gmail.com');
         $mail->addAddress('magdaltw2021@gmail.com');

         $mail->isHTML(true);
         $mail->Subject='Nuovo Messaggio';
         $mail->Body='Da: ' . $email .'<br>'. $_POST['messaggio'];
         $mail->send();
       $messaggio_inviato = true;
     }
     catch(Exception $e){
       $messaggio_inviato = false;
     }
 }

 ?>