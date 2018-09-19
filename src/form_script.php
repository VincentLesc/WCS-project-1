<?php

     $userName = $_POST['userName'];
     
     $userEmail = $_POST['userEmail'];
     
     $userMsg = $_POST['userMessage'];
     
     $from = 'WCS Contact Form';
     
     $to = 'vladimirsolovyev9@gmail.com';

     $subject = 'Email sent from WCS site\'s contact form';
     
     mail($to, $subject, $userMsg, $from);

    header("Location: http://vladimirpimkie.000webhostapp.com/test/form.html");


?>