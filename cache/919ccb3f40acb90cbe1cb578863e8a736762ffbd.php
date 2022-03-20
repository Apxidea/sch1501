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

            <div class="row">
                <div class="col-12 col-lg-6 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <form action="../module/add_work.php" method="POST">
                                <div class="col-12 d-flex justify-content-between">
                                    <select id="AuthType" name="work_subject" class="form-select"
                                        aria-label="Default select example">
                                        <option value="informatica">Информатика</option>
                                        <option value="matematica">Математика</option>
                                        <option value="russian">Русский язык</option>
                                        <option value="angliyskiy">Английский язык</option>
                                        <option value="francuskiy">Французский язык</option>
                                        <option value="himiya">Химия</option>
                                        <option value="biologia">Биология</option>
                                        <option value="history">История</option>
                                        <option value="obhaga">Обществознание</option>
                                        <option value="geografia">География</option>
                                    </select>
                                    <div class="p-2"></div>
                                    <input name="work_topic" class="form-control" type="text" placeholder="Тема">
                                    <div class="p-2"></div>
                                    <input name="work_date" class="form-control" type="date" placeholder="Дата">
                                </div>
                                <button id="but-act" type="submit" class="btn btn-primary radius-10 mt-3">Добавить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>