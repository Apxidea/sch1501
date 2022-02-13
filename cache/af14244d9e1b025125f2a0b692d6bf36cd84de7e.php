<?require $_SERVER['DOCUMENT_ROOT'].'/config/config.php';?>

<?php $__env->startSection('main_content'); ?>
    <main class="page-content">
        <div class="row">
            <div class="col-12 col-lg-12 d-flex">
                <div class="card w-100">
                    <div class="card-body">
                        <h1 class="center"><?= $_COOKIE['user_surname'] ?> <?= $_COOKIE['user_name'] ?></h1>
                        <? if ($_COOKIE['user_type'] == "user_teacher"): ?>
                        <h2 class="center text-muted ">Учитель</h2>
                        <? else: ?>
                        <h2 class="center text-muted ">Администратор</h2>
                        <? endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h4 class="mb-0">Контактная информация</h4>
                        </div>
                        <div class="row align-items-center">
                            <div class="contact-block">
                                <div class="d-flex justify-content-between flex-wrap mt-3 align-items-center">
                                    <span style="font-size: 16px" class="text-muted fw-bold">E-mail</span>
                                    <div style="font-size: 16px" class="fs-14px fw-bolder"> <?php echo e($_COOKIE['user_email']); ?></div>
                                </div>
                                <div class="d-flex justify-content-between flex-wrap mt-2 align-items-center">
                                    <span style="font-size: 16px" class="text-muted fw-bold">Номер телефона</span>
                                    <div style="font-size: 16px" class="fs-14px fw-bolder"> <?php echo e($_COOKIE['user_phone']); ?></div>
                                </div>
                                <div class="d-flex justify-content-between flex-wrap mt-2 align-items-center">
                                    <span style="font-size: 16px" class="text-muted fw-bold">Школа</span>
                                    <div style="font-size: 16px" class="fs-14px fw-bolder"> <?php echo e($_COOKIE['sch_name']); ?></div>
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