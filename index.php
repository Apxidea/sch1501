<?php
session_start();
require 'vendor/autoload.php';

use Philo\Blade\Blade;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new Blade($views, $cache);
include 'route.php';

Route::add('/', function ($route = array()) use ($blade) {
    if (!isset($_COOKIE['id'])) {
        header('Location: /login');
        return false;
    }
    echo $blade->view()->make('index')->render();
});

Route::add('/login', function ($route = array()) use ($blade) {
    if (isset($_COOKIE['id'])) {
        header('Location: /');
        return false;
    }
    echo $blade->view()->make('auth')->render();
});

Route::add('/register', function ($route = array()) use ($blade) {
    if (isset($_COOKIE['id'])) {
        header('Location: /');
        return false;
    }
    echo $blade->view()->make('registr')->render();
});

Route::add('/myworks', function ($route = array()) use ($blade) {
    if (!isset($_COOKIE['id'])) {
        header('Location: /login');
        return false;
    }
    if ($_COOKIE['user_type'] == "user_admin") {
        header('Location: /allworks');
        return false;
    }
    echo $blade->view()->make('myworks')->render();
});

Route::add('/allworks', function ($route = array()) use ($blade) {
    if (!isset($_COOKIE['id'])) {
        header('Location: /login');
        return false;
    }
    if ($_COOKIE['user_type'] == "user_teacher") {
        header('Location: /myworks');
        return false;
    }
    echo $blade->view()->make('allworks')->render();
});

Route::add('/allteachers', function ($route = array()) use ($blade) {
    if (!isset($_COOKIE['id'])) {
        header('Location: /login');
        return false;
    }
    echo $blade->view()->make('allteachers')->render();
});

Route::add('/add_work', function ($route = array()) use ($blade) {
    if (!isset($_COOKIE['id'])) {
        header('Location: /login');
        return false;
    }
    echo $blade->view()->make('add_work')->render();
});

Route::add('/settings', function ($route = array()) use ($blade) {
    if (!isset($_COOKIE['id'])) {
        header('Location: /login');
        return false;
    }
    echo $blade->view()->make('settings')->render();
});

Route::submit();
