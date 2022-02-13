<?php
$config = array(
    // Общее
    'title' => 'Sch1501', #Имя сайта 

    // База данных
    'mysql' => array(
        'adress' => 'localhost', #адрес сервера
        'user_name' => 'root', #имя пользователя
        'password' => '', #пароль
        'db_name' => 'sch1501' #имя базы данных
    )
);


// Переменные для подключение к бд
$adress_db = $config['mysql']['adress'];
$user_name_db = $config['mysql']['user_name'];
$password_db = $config['mysql']['password'];
$db_name_db = $config['mysql']['db_name'];