 <!--start sidebar -->
 <aside class="sidebar-wrapper" data-simplebar="true">
     <div class="sidebar-header">
         <div>
             <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
         </div>
         <div>
             <h4 class="logo-text"><?= $config['title'] ?></h4>
         </div>
         <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
         </div>
     </div>
     <!--navigation-->
     <ul class="metismenu" id="menu">
         <li>
             <a href="/<?= $_COOKIE['user_phone'] ?>">
                 <div class="parent-icon"><i class="bi bi-person-fill"></i>
                 </div>
                 <div class="menu-title">Профиль</div>
             </a>
         </li>
         <li>
             <a href="/works">
                 <div class="parent-icon"><i class="bi bi-receipt"></i>
                 </div>
                 <div class="menu-title">Контрольные работы</div>
             </a>
         </li>
     </ul>
     <!--end navigation-->
 </aside>
 <!--end sidebar -->
