<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception.php;


 require 'phpmailer/src/Exception.php';
 require 'phpmailer/src/PHPMailer.php';
 require 'phpmailer/src/SMTP.php';

 if(isset($_POST["send"])){
    $mail = new PHPMailer(true);
    $mail->isSMPT();
    $mail->Host = 'smtp.google.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'geeteshkumarsahoo3@gmail.com';
    $mail->Password = 'nnyv hdri ltnz giss';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setForm('geeteshkumarsahoo3@gmail.com');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["name"];
    $mail->Body = $_POST["message"];
    $mail->submit();

    echo
    "
    <script>
    alert('Sent Successfully');
    document.location.herf = 'index.html';
    </script>
    ";

 }
?>