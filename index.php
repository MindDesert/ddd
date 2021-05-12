<?php

    require 'Exception.php';
    require 'PHPMailer.php';
    require 'SMTP.php';
    // create an instance
    $mail= new PHPMailer();
    
    //set a host
    $mail->Host="smtp.gmail.com";

    //enable SMTP
    $mail->isSMTP(true);

    //set authentication to true
    $mail->SMTPAut = true;

    //set login details for google account
    $mail->Username="omarhassane25@gmail.com";
    $mail->Password="oooooooooooo";

    //set Protection
    $mail->SMTPSecure = "ssl"; //or tls

    //Port
    $mail->Port=465;// 587 tls

    //Set subject
    $mail->Subject="testing email (firs time)";

    //set body
    $mail->Body = "It works";

    //set who is sending email
    $mail->setFrom("omarhassane25@gmail.com", "SB");

    // set where you sending mail
    $mail->addAddress("ohassane06@gmail.com");

    // sending email

    if(isset($_POST['hhh']) && $mail->send()){
        die('yes');
    }else{
        die('no');
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button type="submit" name="hhh">send sms</button>
</body>
</html>
