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
            <div id="regftext" class="card-body p-4 p-sm-5">
              <h5 class="card-title">Регистрация</h5>
              <form class="form-body" method="POST" action="../module/registration.php" id="registerForm"> 
                  <div class="row g-3">
                    <div class="col-12">
                      <select id="RegisterType" name="top_select" class="form-select radius-10" aria-label="Default select example">
                        <option value="user_teacher">Учитель</option>
                        <option value="user_admin">Администратор</option>
                      </select>
                    </div>
                    <div class="col-12">
                      <label for="inputEmailAddress" class="form-label">Фамилия</label>
                      <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-lines-fill"></i></div>
                        <input name ="surname" type="text" class="form-control radius-10 ps-5 required" id="inputSurName" placeholder="Иванов">
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="inputEmailAddress" class="form-label">Имя</label>
                      <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-lines-fill"></i></div>
                        <input name="name"type="text" class="form-control radius-10 ps-5 required" id="inputName" placeholder="Иван">
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="inputEmailAddress" class="form-label">Отчество</label>
                      <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-lines-fill"></i></div>
                        <input name="patronymic" type="text" class="form-control radius-10 ps-5 required" id="inputЗatronymic" placeholder="Иванович">
                      </div>
                    </div>
                    <div class="col-12" id="city_register">
                      <label for="inputEmailAddress" class="form-label">Школа</label>
                      <select id="RegisterType" name="sch_select" class="form-select radius-10" aria-label="Default select example">
                        <option value="sch_1275">Школа №1275</option>
                        <option value="sch_1501">Школа №1501</option>
                        <option value="sch_1275">Школа №1277</option>
                      </select>
                    </div>
                    <div class="col-12">
                      <label for="inputEmailAddress" class="form-label">Электронный адрес</label>
                      <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                        <input name="email" type="email" class="form-control radius-10 ps-5 required" id="inputEmailAddress" placeholder="example@dovezut.ru">
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="inputEmailAddress" class="form-label">Номер телефона</label>
                      <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-telephone-forward-fill"></i></div>
                        <input name ="phone" type="phone" class="form-control radius-10 ps-5 required" id="inputPhoneNumber" placeholder="+7 (999) 999-99-99">
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="inputChoosePassword" class="form-label">Придумайте пароль</label>
                      <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                        <input name="password" type="password" class="form-control radius-10 ps-5 required" id="inputChoosePassword" placeholder="Введите пароль">
                      </div>
                    </div>
                    <div id="registerRes"></div>
                    <div class="col-12">
                      <div class="d-grid">
                        <button id="but-act" id="regbutton" type="submit" class="btn btn-primary radius-10">Регистрация</button>
                        
                      </div>
                    </div>
                    <div class="col-12">
                      <p class="mb-0">Уже есть аккаунт? <a href="/login">Войти в личный кабинет</a></p>
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