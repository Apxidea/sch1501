<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php'; ?>

<body>
    <header id="header">
        <div class="container">
            <a href="" class="logo"><?= $config['title'] ?></a>
            <a href="/login.php" class="login_header">Войти</a>
        </div>
    </header>
    <div class="container">
        <div class="flex">
            <form action="handlers/reg.php" class="login_div">
                <div class="center_login">
                    <p class="name_login">Регистрация</p>
                    <div>
                        <input type="text" placeholder="Введите ФИО" class="input_login" id="name" name="name">
                        <input type="text" placeholder="Введите email" class="input_login" id="email" name="email">
                        <input type="text" placeholder="Введите телефон" class="input_login" id="phone" name="phone">
                        <input type="password" placeholder="Введите пароль" class="input_login" id="password" name="password">
                    </div>
                </div>

                <button class="submit_login" type="submit">Зарегистрироваться</button>
            </form>

            <form action="handlers/login.php" class="login_div">
                <div class="center_login">
                    <p class="name_login">Вход</p>
                    <div>
                        <input type="text" placeholder="Введите email" class="input_login" id="email" name="email">
                        <input type="password" placeholder="Введите пароль" class="input_login" id="password" name="password">
                    </div>
                </div>

                <button class="submit_login" type="submit">Войти</button>
            </form>
        </div>
    </div>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>