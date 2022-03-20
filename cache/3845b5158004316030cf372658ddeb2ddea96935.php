<?include $_SERVER['DOCUMENT_ROOT'].'/config/config.php';?>

<?php $__env->startSection('main_content'); ?>
    <main class="page-content">

        <div class="row">
            <div class="col-12 col-lg-10 d-flex">
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
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $mysql = new mysqli($adress_db, $user_name_db, $password_db, $db_name_db);
                                  $result = $mysql->query("SELECT * FROM works");

                                    while ($row = $result->fetch_assoc()) {
                                      $subj = $row['work_subject'];
                                      $result2 = $mysql->query("SELECT * FROM subjects WHERE user_type_key = '$subj'");
                                      $sub = $result2->fetch_assoc();
                                      ?>
                                      <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['work_user_name'] ?> <?= $row['work_user_surname'] ?>
                                          <?= $row['work_user_patronymic'] ?></td>
                                          <td><?= $sub['user_type_name'] ?></td>
                                          <td><?= $row['work_topic'] ?></td>
                                          <td><?= $row['work_date'] ?></td>
                                        </tr>
                                      <? } ?>
                                    <tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-2 d-flex">
                <div class="card w-100">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Удалить работу</h5>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="../module/delete2.php" id="deleteWork">
                            <div class="col-12">
                                <label class="form-label">№ работы</label>
                                <input name="idc212" type="text" class="form-control">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn btn-danger">Удалить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>