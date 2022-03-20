<?include $_SERVER['DOCUMENT_ROOT'].'/config/config.php';?>

<?php $__env->startSection('main_content'); ?>
<main class="authentication-content">
  <div class="container-fluid">
    <div class="authentication-card">
      <div class="card shadow rounded-0 overflow-hidden">
        <div class="row g-0">
          <div class="col-lg-6 bg-dark d-flex align-items-center justify-content-center">
            <img src="/resource/img/logo.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6">
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title">Вход в личный кабинет</h5>
              <form class="form-body" method="POST" action="../module/auth.php" id="authForm">
                  <div class="row g-3">
                    <div class="col-12">
                      <select id="AuthType" name="top_select" class="form-select radius-10" aria-label="Default select example">
                        <option value="user_teacher">Учитель</option>
                        <option value="user_admin">Администратор</option>
                      </select>
                    </div>
                    <div class="col-12">
                      <label for="inputEmailAddress" class="form-label">Адрес электронной почты</label>
                      <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                        <input name="email" type="email" class="form-control radius-30 ps-5 required" id="inputEmailAddress" placeholder="example@dovezut.ru">
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="inputChoosePassword" class="form-label">Пароль</label>
                      <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                        <input name="password" type="password" class="form-control radius-30 ps-5 required" id="inputChoosePassword" placeholder="Введите свой пароль">
                      </div>
                    </div>
                    <div class="col-6">
                    </div>
                    </div>
                    <div class="col-12" id=authInfo></div>
                    <div class="col-12">
                      <div class="d-grid">
                        <button id="but-act" type="submit" class="btn btn-primary radius-30">Войти</button>
                        
                      </div>

                    </div>
                    <div class="col-12">
                      <div style="margin-top: 20px" class="col-6"></div>
                      <p class="mb-0">Еще нет аккаунта в системе Sch1501? <a href="/register">Регистрация</a></p>
                    </div>
                  </div>
              </form>
           </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>