<?php $__env->startSection('main_content'); ?>
<main class="page-content">

  <div class="row">
    <div class="col-12 col-lg-6 d-flex">
      <div class="card radius-10 w-100">
        <div class="card-body">
          <div class="d-flex align-items-center">
             <h6 class="mb-0">Контактная информация</h6>
          </div>
          <div class="row align-items-center">
            <div class="contact-block">
              <span class="text-muted fw-bolder fs-14px"> Контактное лицо </span>
              <div class="d-flex justify-content-between flex-wrap">
                <h6 class="mb-0 fw-bold"><?php echo e($_SESSION['sur_name']); ?> <?php echo e($_SESSION['first_name']); ?> <?php echo e($_SESSION['last_name']); ?></h6>
                <span class="text-muted fw-bolder fs-14px"><?php echo e(mb_convert_case($_SESSION['user_type-t'], MB_CASE_TITLE, "UTF-8")); ?></span>
              </div>
              <div class="d-flex justify-content-between flex-wrap mt-3 align-items-center">
              <span class="text-muted fw-bold">Местоположение</span>
              <div class="fs-14px fw-bolder"> <?php echo e($_SESSION['dest']); ?></div>
            </div>
            <div class="d-flex justify-content-between flex-wrap mt-2 align-items-center">
            <span class="text-muted fw-bold">E-Mail</span>
            <div class="fs-14px fw-bolder"> <?php echo e($_SESSION['email']); ?></div>
          </div>
          <div class="d-flex justify-content-between flex-wrap mt-2 align-items-center">
          <span class="text-muted fw-bold">Номер телефона</span>
          <div class="fs-14px fw-bolder"> <?php echo e($_SESSION['phone']); ?></div>
        </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--end row-->

  <div class="row">
    <div class="col-12 col-lg-6 d-flex">
      <div class="card radius-10 w-100">
        <div class="card-body">
          <div class="d-flex align-items-center">
             <h6 class="mb-0">Карточка автомобиля</h6>
          </div>
          <div class="row align-items-center">
            <div class="contact-block">
              <div class=" col-lg-11 d-flex w-100">
                <input name="from_city" class="form-control mb-3" type="text" placeholder="" aria-label="">
                <div class="mm-5"></div>
                <input name="from_city" class="form-control mb-3" type="text" placeholder="" aria-label="">
              </div>
              <div class=" col-lg-11 d-flex w-100">
                <input name="from_city" class="form-control mb-3" type="text" placeholder="" aria-label="">
                <div class="mm-5"></div>
                <input name="from_city" class="form-control mb-3" type="text" placeholder="" aria-label="">
              </div>
              <div class=" col-lg-11 d-flex w-100">
                <input name="from_city" class="form-control mb-3" type="text" placeholder="" aria-label="">
                <div class="mm-5"></div>
                <input name="from_city" class="form-control mb-3" type="text" placeholder="" aria-label="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--end row-->


</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>