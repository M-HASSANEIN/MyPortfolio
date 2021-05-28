<?php

class ContactController
{
    //send  email front
    public function SendEmail()
    {
        $name = $_POST["name"];
        $clientemail = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        //send email to the user
        $email = "mohammed.tareq.hassanien@hotmail.com";
        //body of the eamil
        $body = "<h2>Person Name :" . $name . " and mail to contact " . $clientemail . "  </h2>
         <p>" . $message . "</p>";
        $model = new EmailManager($email, $subject, $body);
        echo "Email has been sent ";
    }

}