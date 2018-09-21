<?php

$userName = trim(stripcslashes(htmlspecialchars($_POST['userName'])));

$userEmail = trim(stripcslashes(htmlspecialchars($_POST['userEmail'])));

$userMsg = trim(stripcslashes(htmlspecialchars($_POST['userMessage'])));

$from = 'Dark Code School Contact Form';

$to = 'vladimirsolovyev9@gmail.com';

$subject = 'Just a message';

$emailMsg = "";

$emailMsg .= "Message sent from: " . $from . " From a user: " . $userName . " " . $userEmail . " MESSAGE: " . $userMsg;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($userName) && isset($userEmail) && isset($userMsg)) {
        mail($to, $subject, $emailMsg, $from);

        header("Location: form.php");
    }
} else {

    header("Location: form.php");
}
?>