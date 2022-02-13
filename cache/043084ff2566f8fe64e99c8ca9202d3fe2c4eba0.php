<?require $_SERVER['DOCUMENT_ROOT'].'/config/config.php';?>

<?php $__env->startSection('main_content'); ?>
    <main class="page-content">

        <div class="row">
            <div class="col-12 col-lg-9 d-flex">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>№</th>
                                        <th>Имя учителя</th>
                                        <th>Предмет</th>
                                        <th>Тема</th>
                                        <th>Дата</th>
                                        <th>Время</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?
                            $mysql = new mysqli($adress_db, $user_name_db, $passwordm_db, $db_name_db);
                            $result = $mysql->query("SELECT * FROM works");
                                while ($row = $result->fetch_assoc()) {?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                    </tr>
                                    <? } ?>
                                    <tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex">
                <div class="card w-100">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Фильтр</h5>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" id="customerFilter">
                            <div class="col-12">
                                <label class="form-label">№</label>
                                <input name="idc" type="text" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Имя учителя</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Предмет</label>
                                <input name="city" class="form-control mb-3" type="text">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Тема</label>
                                <input name="phone" type="text" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Дата</label>
                                <input name="phone" type="text" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Время</label>
                                <input name="phone" type="text" class="form-control">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn btn-primary">Применить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--end row-->
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>