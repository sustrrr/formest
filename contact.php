
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

    $message_sent   =   false;
    if(isset($_POST['email']) && $_POST['email']  !=  ''){

        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)  ) {

            $userName   =   $_POST['name'];
            $userEmail   =   $_POST['email'];
            $messageSubject   =   $_POST['subject'];
            $message   =   $_POST['message'];

            $to =   "tom@decisive-development.com";
            $body   =   "";

            $body   .=  "From:  ".$userName.    "\r\n";
            $body   .=  "Email:  ".$userEmail.    "\r\n";
            $body   .=  "Message:  ".$message.    "\r\n";

            mail($to,$messageSubject,$body);

            $message_sent   =   true;
    }
}
 ?>

<html lang="en" dir="ltr">