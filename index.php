<?php
session_start();
require 'vendor/autoload.php';

use Philo\Blade\Blade;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new Blade($views, $cache);
include 'route.php';

Route::add('/', function ($route = array()) use ($blade) {
    header('Location: /' . $_COOKIE['user_phone']);
});

Route::add('/' . $_COOKIE['user_phone'], function ($route = array()) use ($blade) {
    if (!isset($_COOKIE['id'])) {
        header('Location: /login');
        return false;
    }
    echo $blade->view()->make('index')->render();
});

Route::add('/login', function ($route = array()) use ($blade) {
    echo $blade->view()->make('auth')->render();
});

Route::add('/register', function ($route = array()) use ($blade) {
    echo $blade->view()->make('registr')->render();
});

Route::add('/works', function ($route = array()) use ($blade) {
    echo $blade->view()->make('works')->render();
});

Route::submit();
