<?php
    header('Content-Type: application/json');

    $aResult = array();

    $to = 'alyssalkhor@gmail.com';
    $subject = "Message from Contact Form on website: Khor Development";
    $message = $_POST['message']." From: ".$_POST['name']."</br>Email: ".$_POST['email']."</br>Phone: ".$_POST['phone']; 
    $from = $_POST['email'];
    $name = $_POST['name'];

    $headerFields = array(
    "From: noreply.alyssalkhor@gmail.com",
    "MIME-Version: 1.0",
    "Content-Type: text/html;charset=utf-8"
    );
 
    // Sending email
    if(mail($to, $subject, $message ,implode("\r\n", $headerFields))){
      echo json_encode('Your mail has been sent successfully.');
    } else{
      echo json_encode('Unable to send email. Please try again.');
    }
?>