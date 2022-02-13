<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div>
      <img src="/resource/img/logo.png" class="logo-icon" alt="logo icon">
    </div>
    <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
    </div>
  </div>
  <!--navigation-->
  <ul class="metismenu" id="menu">
    <li>
      <a href="/panel" >
        <div class="parent-icon"><i class="bi bi-house-fill"></i>
        </div>
        <div class="menu-title">Главная</div>
      </a>
    </li>
      <? if($_SESSION['user_type'] == 'user_pickup') { ?>
        <li>
          <a href="/panel/addtruck">
            <div class="parent-icon"><i class="bi bi-truck"></i>
            </div>
            <div class="menu-title">Добавить машину</div>
          </a>
        </li>
        <li>
          <a href="/panel/mycars">
            <div class="parent-icon"><i class="bi bi-truck"></i>
            </div>
            <div class="menu-title">Мои автомобили</div>
          </a>
        </li>
        <li>
          <a href="/panel/mycars">
            <div class="parent-icon"><i class="bi bi-person-fill"></i>
            </div>
            <div class="menu-title">Мои водители</div>
          </a>
        </li>
        <li>
          <a href="/panel/find_customer">
            <div class="parent-icon"><i class="bi bi-search"></i>
            </div>
            <div class="menu-title">Заказы</div>
          </a>
        </li>
        <li>
          <a href="/panel/find_customer">
            <div class="parent-icon"><i class="bi bi-box-seam"></i>
            </div>
            <div class="menu-title">Мои грузы</div>
          </a>
        </li>
        <li>
          <a href="/panel/find_customer">
            <div class="parent-icon"><i class="bi bi-check2-square"></i>
            </div>
            <div class="menu-title">Мои заказы</div>
          </a>
        </li>
        <li>
          <a href="/panel/find_customer">
            <div class="parent-icon"><i class="bi bi-cash-coin"></i>
            </div>
            <div class="menu-title">Платные услуги</div>
          </a>
        </li>
    <? } ?>
    <? if($_SESSION['user_type'] == 'user_сustomer') { ?>
      <li>
        <a href="/panel/addbox">
          <div class="parent-icon"><i class="bi bi-box"></i>
          </div>
          <div class="menu-title">Добавить груз</div>
        </a>
      </li>
      <li>
        <a href="/panel/mygrus">
          <div class="parent-icon"><i class="bi bi-bag-check"></i>
          </div>
          <div class="menu-title">Мои грузы</div>
        </a>
      </li>
      <li>
        <a href="/panel/find_carrier">
          <div class="parent-icon"><i class="bi bi-search"></i>
          </div>
          <div class="menu-title">Найти перевозчика</div>
        </a>
      </li>
  <? } ?>
  <li>
    <a href="/panel/auction">
      <div class="parent-icon"><i class="bi bi-cash-coin"></i>
      </div>
      <div class="menu-title">Аукционы</div>
    </a>
  </li>
  <li>
    <a href="/panel/archive">
      <div class="parent-icon"><i class="bi bi-archive"></i>
      </div>
      <div class="menu-title">Архив</div>
    </a>
  </li>

  </ul>
  <!--end navigation-->
</aside>
<!--end sidebar -->
