<?php
require '../config/config.php';
$idc212 = $_POST['idc212'];

$mysql = new mysqli($adress_db, $user_name_db, $password_db, $db_name_db);

$sql = "DELETE FROM works WHERE id = '$idc212'";

if ($mysql->query($sql)) {
    Header('location: /allworks');
} else {
    echo "Ошибка: " . $conn->error;
}
$mysql->close();
