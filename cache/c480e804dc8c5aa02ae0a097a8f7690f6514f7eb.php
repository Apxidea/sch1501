<?require $_SERVER['DOCUMENT_ROOT'].'/config/config.php';?>

<?php $__env->startSection('main_content'); ?>
    <main class="page-content">
        <div class="row">
            <div class="col-12 col-lg-12 d-flex">
                <div class="card w-100">
                    <div class="card-body">
                        <h3><?= $_COOKIE['user_surname'] ?> <?= $_COOKIE['user_name'] ?></h3>

                        <?php
                        $type = $_COOKIE['user_type'];
                        $mysql = new mysqli($adress_db, $user_name_db, $passwordm_db, $db_name_db);
                        
                        $result = $mysql->query("SELECT * FROM user_type WHERE user_type_key = '$type'");
                        $user = $result->fetch_assoc(); ?>
                        <h4 class="text-muted "><?= $user['user_type_name'] ?></h4>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-12 d-flex">
                <div class="card w-100">
                    <div class="card-body">
                        <h4 style="margin-bottom: 20px">Общее</h4>
                        <div class="row g-3">


                            <form action="" method="POST">
                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label">Фамилия</label>
                                    <div class="ms-auto position-relative">
                                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                                                class="bi bi-person-lines-fill"></i></div>
                                        <input name="surname" type="text" class="form-control radius-10 ps-5 required"
                                            id="inputSurName" placeholder="Иванов">
                                    </div>
                                </div>
                                <button id="but-act" id="regbutton" style="margin-top: 10px" type="submit"
                                    class="btn btn-primary radius-10 col-12">Изменить фамилию</button>
                            </form>


                            <form action="" method="POST">
                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label">Имя</label>
                                    <div class="ms-auto position-relative">
                                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                                                class="bi bi-person-lines-fill"></i></div>
                                        <input name="surname" type="text" class="form-control radius-10 ps-5 required"
                                            id="inputSurName" placeholder="Иван">
                                    </div>
                                </div>
                                <button id="but-act" id="regbutton" style="margin-top: 10px" type="submit"
                                    class="btn btn-primary radius-10 col-12">Изменить имя</button>
                            </form>

                            <form action="" method="POST">
                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label">Отчество</label>
                                    <div class="ms-auto position-relative">
                                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                                                class="bi bi-person-lines-fill"></i></div>
                                        <input name="surname" type="text" class="form-control radius-10 ps-5 required"
                                            id="inputSurName" placeholder="Иванович">
                                    </div>
                                </div>
                                <button id="but-act" id="regbutton" style="margin-top: 10px" type="submit"
                                    class="btn btn-primary radius-10 col-12">Изменить отчество</button>
                            </form>


                            <form action="" method="POST">
                                <div class="col-12" id="city_register">
                                    <label for="inputEmailAddress" class="form-label">Школа</label>
                                    <select id="RegisterType" name="sch_select" class="form-select radius-10"
                                        aria-label="Default select example">
                                        <option value="sch_1275">Школа №1275</option>
                                        <option value="sch_1501">Школа №1501</option>
                                        <option value="sch_1277">Школа №1277</option>
                                    </select>
                                </div>
                                <button id="but-act" id="regbutton" style="margin-top: 10px" type="submit"
                                    class="btn btn-primary radius-10 col-12">Изменить школу</button>
                            </form>

                            <form action="" method="POST">
                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label">Электронный адрес</label>
                                    <div class="ms-auto position-relative">
                                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                                                class="bi bi-envelope-fill"></i></div>
                                        <input name="email" type="email" class="form-control radius-10 ps-5 required"
                                            id="inputEmailAddress" placeholder="example@dovezut.ru">
                                    </div>
                                </div>
                                <button id="but-act" id="regbutton" style="margin-top: 10px" type="submit"
                                    class="btn btn-primary radius-10 col-12">Изменить E-mail</button>
                            </form>

                            <div class="col-12">
                                <label for="inputEmailAddress" class="form-label">Номер телефона</label>
                                <div class="ms-auto position-relative">
                                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                                            class="bi bi-telephone-forward-fill"></i></div>
                                    <input name="phone" type="phone" class="form-control radius-10 ps-5 required"
                                        id="inputPhoneNumber" placeholder="+7 (999) 999-99-99">
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="inputChoosePassword" class="form-label">Придумайте пароль</label>
                                <div class="ms-auto position-relative">
                                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                                            class="bi bi-lock-fill"></i></div>
                                    <input name="password" type="password" class="form-control radius-10 ps-5 required"
                                        id="inputChoosePassword" placeholder="Введите пароль">
                                </div>
                            </div>
                            <div id="registerRes"></div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button id="but-act" id="regbutton" type="submit"
                                        class="btn btn-primary radius-10">Регистрация</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>