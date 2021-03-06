<?include $_SERVER['DOCUMENT_ROOT'].'/config/config.php';?>
@extends('layout')
@section('main_content')
    <main class="page-content">
        <div class="row">
            <div class="col-12 col-lg-12 d-flex">
                <div class="index-card card w-100">
                    <div class="card-body">
                        <h1 class="center"><?= $_COOKIE['user_surname'] ?> <?= $_COOKIE['user_name'] ?></h1>

                        <?php
                        $type = $_COOKIE['user_type'];
                        $mysql = new mysqli($adress_db, $user_name_db, $password_db, $db_name_db);

                        $result = $mysql->query("SELECT * FROM user_type WHERE user_type_key = '$type'");
                        $user = $result->fetch_assoc(); ?>
                        <h2 class="center text-muted "><?= $user['user_type_name'] ?></h2>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h2 class="mb-4">Контактная информация</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="contact-block">
                                <div class="d-flex justify-content-between flex-wrap mt-3 align-items-center">
                                    <span style="font-size: 20px" class="text-muted fw-bold">E-mail</span>
                                    <div style="font-size: 20px" class="fs-14px fw-bolder"> {{ $_COOKIE['user_email'] }}
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between flex-wrap mt-2 align-items-center">
                                    <span style="font-size: 20px" class="text-muted fw-bold">Номер телефона</span>
                                    <div style="font-size: 20px" class="fs-14px fw-bolder"> {{ $_COOKIE['user_phone'] }}
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between flex-wrap mt-2 align-items-center">
                                    <span style="font-size: 20px" class="text-muted fw-bold">Школа</span>
                                    <?php
                                    $type = $_COOKIE['sch_name'];
                                    $mysql = new mysqli($adress_db, $user_name_db, $password_db, $db_name_db);

                                    $result = $mysql->query("SELECT * FROM school WHERE sch_name_key = '$type'");
                                    $user = $result->fetch_assoc(); ?>
                                    <div style="font-size: 20px" class="fs-14px fw-bolder"> <?= $user['sch_name_name'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
