<?php
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$name = filter_var(
    trim($_POST['name']),
    FILTER_SANITIZE_STRING
);
$phone = filter_var(
    trim($_POST['phone']),
    FILTER_SANITIZE_STRING
);
$email = filter_var(
    trim($_POST['email']),
    FILTER_SANITIZE_STRING
);
$password = filter_var(
    trim($_POST['password']),
    FILTER_SANITIZE_STRING
);

$adress = $config['mysql']['adress'];
$user_name = $config['mysql']['user_name'];
$passwordm = $config['mysql']['password'];
$db_name = $config['mysql']['db_name'];

$mysql = new mysqli($adress, $user_name, $passwordm, $db_name);

$sql = "INSERT INTO users (name, phone, email, password) VALUES ('1', '1','1', '1')";

if ($mysql->query($sql2)) {
    Header('location: /index.php');
} else {
    echo "Ошибка: " . $conn->error;
}
$mysql->close();
