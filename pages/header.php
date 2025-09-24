<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : '' ?></title>
    <link rel="stylesheet" href="../styles.css">
    <?php if (!empty($extraStyles) && is_array($extraStyles)) { foreach ($extraStyles as $styleHref) { ?>
    <link rel="stylesheet" href="<?= htmlspecialchars($styleHref, ENT_QUOTES, 'UTF-8') ?>">
    <?php } } ?>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <div class="nav__container">
                <div class="logo">
                    <div class="logo-icon"><a href="./main.html"><img src="../img/Logo.svg" alt="logo"></a></div>
                    <h1>ОСЕТРИНСКОЕ <br> <span class="logo_sub">РЫБХОЗЯЙСТВО</span></h1>
                </div>
                <ul class="nav__menu">
                    <li><a href="main.html" class="nav__link<?= (isset($activePage) && $activePage === 'main') ? ' nav__link--active' : '' ?>">Главная</a></li>
                    <li><a href="fishing.html" class="nav__link<?= (isset($activePage) && $activePage === 'fishing') ? ' nav__link--active' : '' ?>">Рыбалка</a></li>
                    <li class="nav__dropdown">
                        <a href="./aliveordead.html" class="nav__link">Осетровые</a>
                        <button class="nav__dropdown-toggle">
                            <span>Осетровые</span>
                        </button>
                        <ul class="nav__submenu">
                            <li class="nav__submenu-item"><a href="./genpass.html"
                                    class="nav__submenu-link">Генетический пасспорт</a></li>
                            <li class="nav__submenu-item"><a href="./oplod.html" class="nav__submenu-link">Икра
                                    оплодотворенная</a></li>
                            <li class="nav__submenu-item"><a href="./aliveordead.html" class="nav__submenu-link">Живой
                                    или охлажденный осетр</a></li>
                            <li class="nav__submenu-item"><a href="./young.html" class="nav__submenu-link">Молодь
                                    осетроывых</a></li>
                            <li class="nav__submenu-item"><a href="./hybrids.html" class="nav__submenu-link">Гибриды</a>
                            </li>
                            <li class="nav__submenu-item"><a href="./beluga.html" class="nav__submenu-link">Белуга</a>
                            </li>
                            <li class="nav__submenu-item"><a href="./kaluga.html" class="nav__submenu-link">Калуга</a>
                            </li>
                            <li class="nav__submenu-item"><a href="./lensk.html" class="nav__submenu-link">Ленский
                                    осётр</a></li>
                            <li class="nav__submenu-item"><a href="./sturgeon.html" class="nav__submenu-link">Русский
                                    осётр</a></li>
                            <li class="nav__submenu-item"><a href="./stellate.html"
                                    class="nav__submenu-link">Севрюга</a></li>
                            <li class="nav__submenu-item"><a href="./sterlet.html"
                                    class="nav__submenu-link">Стерлядь</a></li>
                            <li class="nav__submenu-item"><a href="./caviar.html" class="nav__submenu-link">Икра
                                    пищевая</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="products.html" class="nav__link<?= (isset($activePage) && $activePage === 'products') ? ' nav__link--active' : '' ?>">Товарная рыба</a>
                    </li>
                    <li><a href="contacts.html" class="nav__link<?= (isset($activePage) && $activePage === 'contacts') ? ' nav__link--active' : '' ?>">Контакты</a></li>

                    <div class="nav__contacts">
                        <div class="nav__phone">
                            <a href="tel:+79778169942">+7 977 816-99-42</a>
                        </div>
                        <div class="nav__schedule">
                            <p>ПОНЕДЕЛЬНИК-ВОСКРЕСЕНЬЕ: 06:00 - 20:00</p>
                        </div>
                        <div class="nav__addresses">
                            <p>Московская обл., Волоколамский р-н, дер. Таболово, ул. Озёрная, 28</p>
                        </div>
                        <div class="nav__email">
                            <a href="mailto:osetrinskoe@yandex.ru">e-mail: osetrinskoe@yandex.ru</a>
                        </div>
                    </div>
                </ul>
                <button class="nav__toggle" aria-label="Открыть меню">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>
    </header>

