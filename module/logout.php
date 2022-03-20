<?php
unset($_COOKIE['id']);
unset($_COOKIE['user_type']);
unset($_COOKIE['user_name']);
unset($_COOKIE['user_surname']);
unset($_COOKIE['user_patronymic']);
unset($_COOKIE['user_email']);
unset($_COOKIE['user_phone']);
unset($_COOKIE['user_password']);
unset($_COOKIE['sch_name']);

setcookie('id', null, -1, '/');
setcookie('user_type', null, -1, '/');
setcookie('user_name', null, -1, '/');
setcookie('user_surname', null, -1, '/');
setcookie('user_patronymic', null, -1, '/');
setcookie('user_email', null, -1, '/');
setcookie('user_phone', null, -1, '/');
setcookie('user_password', null, -1, '/');
setcookie('sch_name', null, -1, '/');

header("Location: /");