<?require $_SERVER['DOCUMENT_ROOT'].'/config/config.php';?>
<header class="top-header">
    <nav class="navbar navbar-expand gap-3">
        <div class="mobile-toggle-icon fs-3">
            <i class="bi bi-list"></i>
        </div>
        <div class="top-navbar-right ms-auto">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item search-toggle-icon">
                    <a class="nav-link" href="">
                        <div class="">
                            <i class="bi bi-search"></i>
                        </div>
                    </a>
                </li>
                <?php if (isset($_COOKIE['id'])): ?>
                <li class="nav-item dropdown dropdown-user-setting">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="" data-bs-toggle="dropdown">
                        <div class="user-setting d-flex align-items-center">
                            <img src="assets/images/avatars/default.svg" class="user-img" alt="">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="/">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/avatars/default.svg" alt="" class="rounded-circle"
                                        width="54" height="54">
                                    <div class="ms-3">
                                        <h6 class="mb-0 dropdown-user-name"><?= $_COOKIE['user_surname'] ?>
                                            <?= $_COOKIE['user_name'] ?></h6>
                                        <?php
                                        $type = $_COOKIE['user_type'];
                                        $mysql = new mysqli($adress_db, $user_name_db, $passwordm_db, $db_name_db);
                                        
                                        $result = $mysql->query("SELECT * FROM user_type WHERE user_type_key = '$type'");
                                        $user = $result->fetch_assoc(); ?>
                                        <small
                                            class="mb-0 dropdown-user-designation text-secondary"><?= $user['user_type_name'] ?></small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="/">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-person-fill"></i></div>
                                    <div class="ms-3"><span>Профиль</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="myworks">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-receipt"></i></div>
                                    <div class="ms-3"><span>Контрольные работы</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="../module/logout.php" method="POST">
                                <a class="dropdown-item" href="">
                                    <div class="d-flex align-items-center">
                                        <div class=""><i class="bi bi-lock-fill"></i></div>
                                        <button type="submit" class="transparent">
                                            <div class="ms-3"><span>Выйти</span></div>
                                        </button>
                                    </div>
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
                <? else: ?>
                <? endif; ?>
            </ul>
        </div>
    </nav>
</header>
