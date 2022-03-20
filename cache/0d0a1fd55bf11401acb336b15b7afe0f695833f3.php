<?include $_SERVER['DOCUMENT_ROOT'].'/config/config.php';?>

<?php $__env->startSection('main_content'); ?>
<main class="page-content">

  <div class="row">
    <div class="col-12 col-lg-10 ">
      <div class="card w-100">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table align-middle">
              <thead class="table-light">
                <tr>
                  <th>№</th>
                  <th>Имя учителя</th>
                  <th>Тип пользователя</th>
                  <th>E-mail</th>
                  <th>Телефон</th>
                  <th>Школа</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $mysql = new mysqli($adress_db, $user_name_db, $password_db, $db_name_db);
                $result = $mysql->query("SELECT * FROM users");
                while ($row = $result->fetch_assoc()) {
                  $type = $row['user_type'];
                  $subj = $row['sch_name'];
                  $result2 = $mysql->query("SELECT * FROM school WHERE sch_name_key = '$subj'");
                  $sub = $result2->fetch_assoc();

                  $result3 = $mysql->query("SELECT * FROM user_type WHERE user_type_key = '$type'");
                  $user_type2 = $result3->fetch_assoc(); ?>
                  <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['user_name'] ?> <?= $row['user_surname'] ?>
                      <?= $row['user_patronymic'] ?></td>
                      <td><?= $user_type2['user_type_name'] ?></td>
                      <td><?= $row['user_email'] ?></td>
                      <td><?= $row['user_phone'] ?></td>
                      <td><?= $sub['sch_name_name'] ?></td>
                    </tr>
                  <? } ?>
                  <tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-2">
          <div class="card w-100">
            <div class="card-header py-3">
              <h5 class="mb-0">Удалить учителя</h5>
            </div>
            <div class="card-body">
              <form class="row g-3" method="post" id="deleteTeacher">
                <div class="col-12">
                  <label class="form-label">№ учителя</label>
                  <input name="idc22" id="idc22" type="text" class="form-control">
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-danger">Удалить</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="card w-100">
            <div class="card-header py-3">
              <h5 class="mb-0">Добавить админа</h5>
            </div>
            <div class="card-body">
              <form class="row g-3" method="post" action="../module/addadmin.php" id="addAdmin">
                <div class="col-12">
                  <label class="form-label">№ учителя</label>
                  <input name="idc221" id="idc221" type="text" class="form-control">
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Добавить</button>
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