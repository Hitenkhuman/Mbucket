<?php

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['email']) && isset($_POST['mobile'])) {
    $emailid = $_POST['email'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $otp = rand(100000, 999999);

    $mail = new PHPMailer();

    //smtp setting

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "hitenkhuman15@gmail.com";
    $mail->Password = "chintu8225";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->isHTML(true);
    $mail->setFrom('hitenkhuman15@gmail.com', 'M-Bucket');
    $mail->addAddress($emailid, 'Dear User');
    $mail->Subject = 'Verification code for Verify Your Email Address';
    $mail->Body    = '<h1>M-bucket</h1><h5>Hello User...!!</h5><p>Your OTP for NEW M-bucket Account is <h5><b>M-' . $otp . '</b></h5></p><p style="color:red">Do Not Share this Otp with others to avoid frauds</p>';


    if ($mail->send()) {
        echo $otp;
    } else {
        echo "failed";
    }
}
