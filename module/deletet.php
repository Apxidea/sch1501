<?php
require '../config/config.php';

$idc22 = $_POST['idc22'];

$mysql = new mysqli($adress_db, $user_name_db, $password_db, $db_name_db);

$sql = "DELETE FROM users WHERE id = '$idc22'";

if ($mysql->query($sql)) {
    Header('location: /allteachers');
} else {
    echo "Ошибка: " . $conn->error;
}
$mysql->close();
