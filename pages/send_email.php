<?php

if (isset($_POST['submit'])) {
    $mailto = "natalia@ndv.com.uy";  //My email address
    //getting customer data
    $company = $_POST['company']; //getting customer company
    $email = $_POST['email']; //getting customer email
    $phone = $_POST['phone']; //getting customer Phome number
    $subject = "Email recibido desde formulario de contacto"; //getting subject line from client
    $subject2 = "Te confirmamos que tu mensaje nos llego correctamente"; // For customer confirmation

    //Email body I will receive
    $message = "Client company: " . $company . "\n"
        . "Phone Number: " . $phone . "\n\n"
        . "Client Message: " . "\n" . $_POST['message'];

    //Message for client confirmation
    $message2 = "Hola" . $company . "\n"
        . "Gracias por ponerte en contacto con nosotros, volveremos a comunicarnos muy pronto!" . "\n\n"
        . "Enviaste el siguiente mensaje: " . "\n" . $_POST['message'] . "\n\n"
        . "Muchas gracias," . "\n" . "- Ndv.com.uy";

    //Email headers
    $headers = "From: " . $email; // Client email, I will receive
    $headers2 = "From: " . $mailto; // This will receive client

    //PHP mailer function

    $result1 = mail($mailto, $subject, $message,$headers); // This email sent to My address
    $result2 = mail($email, $subject2, $message2,$headers2); //This confirmation email to client


    //var_dump($result1);
    //var_dump($result2);
    //Checking if Mails sent successfully

    if ($result1 ) {
        $success = "Tu mensaje fue enviado satisfactoriamente!";
        //echo ''.$message.' '.$email.'';

    } else {
        $failed = "Un error ha ocurrido, por favor intenta nuevamente.";
        //echo ''.$message.' '.$email.' '.$mailto.'';
    }
}

?>

