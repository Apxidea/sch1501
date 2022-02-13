<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';

$user_type = $_POST['top_select'];
$user_name = $_POST['name'];
$user_surname = $_POST['surname'];
$user_patronymic = $_POST['patronymic'];
$user_email = $_POST['email'];
$user_phone = $_POST['phone'];
$user_password = $_POST['password'];
$sch_name = $_POST['sch_select'];

$mysql = new mysqli($adress_db, $user_name_db, $passwordm_db, $db_name_db);

$sql = "INSERT INTO users (user_type, user_name, user_surname, user_patronymic, user_email, user_phone, user_password, sch_name) 
VALUES ('$user_type', '$user_name','$user_surname', '$user_patronymic', '$user_email', '$user_phone', '$user_password', '$sch_name')";

if ($mysql->query($sql)) {
    Header('location: /login');
} else {
    echo "Ошибка: " . $conn->error;
}
$mysql->close();
