<?php
require '../config/config.php';
$idc2 = $_POST['idc2'];

$mysql = new mysqli($adress_db, $user_name_db, $password_db, $db_name_db);

$sql = "DELETE FROM works WHERE id = '$idc2'";

if ($mysql->query($sql)) {
    Header('location: /myworks');
} else {
    echo "Ошибка: " . $conn->error;
}
$mysql->close();
