<?php

if($_POST) {
    $name =  "";
    $email = "";
    $person = "";
    $dateandtime = $_POST['dateandtime'];
    $message ="";

    if(isset($_POST['name'])) {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    if(isset($_POST['person'])) {
        $person = filter_var($_POST['person'], FILTER_VALIDATE_INT);
    }
    if(isset($_POST['message'])) {
        $message = htmlspecialchars($_POST['message']);
    }

    $to = "dejan.sheki.lukic@gmail.com, konobakolona@gmail.com";
    $subject = "Rezervacije";
    $headers = "From: Online@rezervacije";
    $headers .= "Reply-To: ".$email."\r\n"; // Email address to reach back
    $body = "\r\n Ime: " . $name;
    $body .= "\r\n Email: " . $email;
    $body .= "\r\n Broj gostiju: " . $person;
    $body .= "\r\n Datum i vrijeme: " . $dateandtime;
    $body .= "\r\n Poruka: " .$message; 
    

    if(mail($to, $subject, $body, $headers)) {
        $success = "Message successfully sent";
    }
    else {
        $success = "Message sending failed, try again";
    }
    
}

?>