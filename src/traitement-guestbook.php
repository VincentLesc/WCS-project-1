<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$err = [];
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (empty("first_name") || !ctype_alpha("first_name")){
       $err = ['first_name' => "Please enter a correct first name."];
    } else{
        $firstName = test_input($_POST["first_name"]);
    }
    if (empty("name") || !ctype_alpha("name")){
        $err = ['name' => "Please enter a correct name. (letters only)"];
    } else{
        $name = test_input($_POST["name"]);
    }
    if (empty("birth_date") || !(preg_match('#^([0-9]{4})([-])([0-9]{2})([-])([0-9]{2})$#', 'birth_date')){
        $err = ['birth_date' => "Please enter a correct birth date. (letters only)"];
    } else{
        $birth_date = test_input($_POST["birth_date"]);
    }
    if (empty("city") || !ctype_alpha("city")){
        $err = ['city' => "Please enter a correct city. (letters only)"];
    } else{
        $city = test_input($_POST["city"]);
    }
    if (empty("country") || !ctype_alpha("country")){
        $err = ['country' => "Please enter a correct country. (letters only)"];
    } else{
        $country = test_input($_POST["country"]);
    }
    if (empty("title") || !ctype_alpha("title")){
        $err = ['title' => "Please enter a correct title. (Alphanumerics only)"];
    } else{
        $title = test_input($_POST["title"]);
    }
    if (empty("message")){
        $err = ['message' => "Please don't forget your message."];
    } else{
        $message = test_input($_POST["message"]);
    }
    if (empty("avatar") || '#^(../public/Images/avatar/avatar)([1-8]){1}(.gif)'{
        $err = ['avatar' => "Error about avatar"];
    } else{
        $avatar = test_input($_POST["avatar"]);
    }
    $date = date('Y-d-m');
}

$fp = fopen("messages.csv",'a' );
fputcsv($fp, array($firstName, $name, $birthDate, $city, $country, $title, $message, $avatar, $date), '~', '"');
fclose($fp);

header('Location: guestbook.php');