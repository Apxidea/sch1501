<?php
require '../config/config.php';
$idc2 = $_POST['idc221'];

$mysql = new mysqli($adress_db, $user_name_db, $password_db, $db_name_db);

$sql = "UPDATE users SET user_type='user_admin' WHERE id = '$idc2'";

if ($mysql->query($sql)) {
  Header('location: /allteachers');
} else {
  echo "Ошибка: " . $conn->error;
}
$mysql->close();
