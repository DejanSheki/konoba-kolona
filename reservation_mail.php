<?php
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dateandtime = $_POST['dateandtime'];
    $message = $_POST['message'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $email = new PHPMailer();

        //smtp settings
    $email->isSMTP();
    $email->Host = "localhost";
    $email->SMTPAuth = true;
    $email->Username = "dejan.sheki.lukic@gmail.com";
    $email->Password = "Petr42li2D0x";
    $email->SMTPSecure = "ssl";


        //email settings
    
        $email->isHTML(true);
        $email->setFrom($email, $name);
        $email->addAddress("petra.vragolov@gmail.com");
        $email->Dateandtime = ("$email ($dateandtime");
        $email->Message = $message;

        if($email->send()) {
            $status = "succes";
            $response = "Email is sent!";
        }
        else {
            $status = "failed";
            $response = "Something is wrong: <br>" . $mail->ErrorInfo;
        }

        exit(json_decode(array("status" => $status, "response" => $response)));

}

?>