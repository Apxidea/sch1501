<?php
require '../config/config.php';

$user_type = $_POST['top_select'];
$user_email = $_POST['email'];
$user_password = $_POST['password'];

$mysql = new mysqli($adress_db, $user_name_db, $password_db, $db_name_db);

$result = $mysql->query("SELECT * FROM users WHERE user_email =
'$user_email' AND user_password = '$user_password' AND user_type = '$user_type'");
$user = $result->fetch_assoc();

if (count($user) == 0) {
    echo "User not found";
    echo $email;
    exit();
} else {
    setcookie('id', $user['id'], time() + 3600 * 24 * 30, '/');
    setcookie('user_type', $user['user_type'], time() + 3600 * 24 * 30, '/');
    setcookie('user_name', $user['user_name'], time() + 3600 * 24 * 30, '/');
    setcookie('user_surname', $user['user_surname'], time() + 3600 * 24 * 30, '/');
    setcookie('user_patronymic', $user['user_patronymic'], time() + 3600 * 24 * 30, '/');
    setcookie('user_email', $user['user_email'], time() + 3600 * 24 * 30, '/');
    setcookie('user_phone', $user['user_phone'], time() + 3600 * 24 * 30, '/');
    setcookie('user_password', $user['user_password'], time() + 3600 * 24 * 30, '/');
    setcookie('sch_name', $user['sch_name'], time() + 3600 * 24 * 30, '/');
    Header('Location: /');
}
$mysql->close();
