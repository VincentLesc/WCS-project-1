<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $firstName = test_input($_POST["first_name"]);
    $name = test_input($_POST["name"]);
    $birthDate = test_input($_POST["birth_date"]);
    $city = test_input($_POST["city"]);
    $country = test_input($_POST["country"]);
    $title = test_input($_POST["title"]);
    $message = test_input($_POST["message"]);
    $avatar = test_input($_POST["avatar"]);
    $date = date('Y-d-m');
}

$fp = fopen("messages.csv",'a' );
fputcsv($fp, array($firstName, $name, $birthDate, $city, $country, $title, $message, $avatar, $date), '~', '"');
fclose($fp);

header('Location: guestbook.php');