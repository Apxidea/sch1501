<?php

$work_user_name = $_COOKIE['user_name'];
$work_user_surname = $_COOKIE['user_surname'];
$work_user_patronymic = $_COOKIE['user_patronymic'];

$work_subject = $_POST['work_subject'];
$work_topic = $_POST['work_topic'];
$work_date = $_POST['work_date'];
$work_class2 = (string)($_POST['work_class']);
$work_class = strtoupper($work_class2);

$mysql = new mysqli("localhost", "ci28930_db", "Andrew1095", "ci28930_db");

$sql = "INSERT INTO works (work_user_name, 	work_user_surname, work_user_patronymic, work_subject, work_topic, work_date, work_class)
VALUES ('$work_user_name', '$work_user_surname','$work_user_patronymic', '$work_subject', '$work_topic', '$work_date', '$work_class')";

if ($mysql->query($sql)) {
    Header('location: /myworks');
} else {
    echo "Ошибка: " . $conn->error;
}
$mysql->close();
