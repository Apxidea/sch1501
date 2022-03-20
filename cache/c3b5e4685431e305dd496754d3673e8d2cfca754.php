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
                 <div class="parent-icon"><i class="bi bi-person"></i>
                 </div>
                 <div class="menu-title">Профиль</div>
             </a>
         </li>
         <?php if($_COOKIE['user_type'] == "user_admin"): ?>
         <li>
             <a href="/allworks">
                 <div class="parent-icon"><i class="bi bi-receipt"></i>
                 </div>
                 <div class="menu-title">Все Работы</div>
             </a>
         </li>
         <? else: ?>
         <li>
             <a href="/myworks">
                 <div class="parent-icon"><i class="bi bi-receipt"></i>
                 </div>
                 <div class="menu-title">Мои Работы</div>
             </a>
         </li>
         <? endif; ?>
         <li>
             <a href="/add_work">
                 <div class="parent-icon"><i class="bi bi-journal-plus"></i>
                 </div>
                 <div class="menu-title">Добавить работу</div>
             </a>
         </li>
     </ul>
     <!--end navigation-->
 </aside>
 <!--end sidebar -->
