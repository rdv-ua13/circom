<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="/build/css/vendors.css">
    <link rel="stylesheet" href="/build/css/main.css">

    <title>TITLE</title>
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <div class="container">
                <a class="navbar__logo" href="javascript:;">
                    <img src="/build/img/logo.svg">
                </a>
                <button class="navbar__toggler js-navbar-toggler" type="button">
                    <span></span>
                </button>

                <div id="navbarSupportedContent" class="navbar__collapse">
                    <ul class="navbar__nav">
                        <li class="navbar__nav-item">
                            <a class="navbar__nav-link js-navbar-link-dropdown" href="javascript:;">
                                <svg class="icon icon-stroke">
                                    <use href="/build/img/sprite.svg#menu"></use>
                                </svg>
                                <span class="text-content">Услуги</span>
                            </a>
                        </li>
                        <li class="nav-item  navbar__nav-item">
                            <a class="nav-link  navbar__nav-link" href="javascript:;">
                                <span class="text-content">Станочный парк</span>
                            </a>
                        </li>
                        <li class="nav-item  navbar__nav-item">
                            <a class="nav-link  navbar__nav-link" href="javascript:;">
                                <span class="text-content">Портфолио</span>
                            </a>
                        </li>
                        <li class="nav-item  navbar__nav-item">
                            <a class="nav-link  navbar__nav-link" href="javascript:;">
                                <span class="text-content">О компании</span>
                            </a>
                        </li>
                        <li class="nav-item  navbar__nav-item">
                            <a class="nav-link  navbar__nav-link" href="javascript:;">
                                <span class="text-content">Контакты</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="navbar__contacts">
                    <div class="navbar__contacts-tel">
                        <a href="tel:+79362510805">
                            <span class="navbar__contacts-text">+7 936 251-08-05</span>
                            <svg class="icon icon-fill">
                                <use href="/build/img/sprite.svg#phone"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="navbar__contacts-email">
                        <a href="mailto:zakaz@circom.ru">
                            <span class="navbar__contacts-text">zakaz@circom.ru</span>
                            <svg class="icon icon-fill">
                                <use href="/build/img/sprite.svg#email"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="navbar__contacts-wa">
                        <a class="btn btn-primary" href="https://wa.me/+79362510805" target="_blank">
                            <svg class="icon icon-stroke">
                                <use href="/build/img/sprite.svg#whatsapp"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="navbar-panel js-navbar-panel">
            <div class="container navbar-panel__container">
                <div class="navbar-panel__col">
                    <div class="navbar-panel__dropdown-item">
                        <a class="navbar-panel__dropdown-link active" href="javascript:;" data-target="navbarPanelDropsubmenuOne">
                            <span class="text-content text-content-mr">Металлообработка</span>
                            <svg class="icon icon-stroke">
                                <use href="/build/img/sprite.svg#arrow-right"></use>
                            </svg>
                        </a>
                    </div>

                    <div class="navbar-panel__dropdown-item">
                        <a class="navbar-panel__dropdown-link" href="javascript:;" data-target="navbarPanelDropsubmenuTwo">
                            <span class="text-content text-content-mr">Деревообработка</span>
                            <svg class="icon icon-stroke">
                                <use href="/build/img/sprite.svg#arrow-right"></use>
                            </svg>
                        </a>
                    </div>

                    <div class="navbar-panel__dropdown-item">
                        <a class="navbar-panel__dropdown-link" href="javascript:;" data-target="navbarPanelDropsubmenuThree">
                            <span class="text-content text-content-mr">Покраска</span>
                            <svg class="icon icon-stroke">
                                <use href="/build/img/sprite.svg#arrow-right"></use>
                            </svg>
                        </a>
                    </div>

                    <div class="navbar-panel__dropdown-item">
                        <a class="navbar-panel__dropdown-link" href="javascript:;" data-target="navbarPanelDropsubmenuFour">
                            <span class="text-content text-content-mr">Разработка МАФ</span>
                            <svg class="icon icon-stroke">
                                <use href="/build/img/sprite.svg#arrow-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="navbar-panel__col">
                    <div class="navbar-panel__dropdown-submenu active" data-id="navbarPanelDropsubmenuOne">
                        <a class="navbar-panel__dropdown-subitem" href="javascript:;">Line 1</a>
                        <a class="navbar-panel__dropdown-subitem" href="javascript:;">Line 2</a>
                        <a class="navbar-panel__dropdown-subitem" href="javascript:;">Line 3</a>
                    </div>

                    <div class="navbar-panel__dropdown-submenu" data-id="navbarPanelDropsubmenuTwo">
                        <a class="navbar-panel__dropdown-subitem" href="javascript:;">Строжка, деление и калибровка</a>
                        <a class="navbar-panel__dropdown-subitem" href="javascript:;">Изготовление мебели под заказ</a>
                        <a class="navbar-panel__dropdown-subitem" href="javascript:;">Торцовка бруса в размер</a>
                        <a class="navbar-panel__dropdown-subitem" href="javascript:;">Шлифовка заготовок</a>
                        <a class="navbar-panel__dropdown-subitem" href="javascript:;">Дополнительные услуги</a>
                        <a class="navbar-panel__dropdown-subitem" href="javascript:;">Строжка, деление и калибровка</a>
                        <a class="navbar-panel__dropdown-subitem" href="javascript:;">Изготовление мебели под заказ</a>
                    </div>

                    <div class="navbar-panel__dropdown-submenu" data-id="navbarPanelDropsubmenuThree">
                        <a class="navbar-panel__dropdown-subitem" href="javascript:;">Line 1</a>
                        <a class="navbar-panel__dropdown-subitem" href="javascript:;">Line 2</a>
                        <a class="navbar-panel__dropdown-subitem" href="javascript:;">Line 3</a>
                    </div>

                    <div class="navbar-panel__dropdown-submenu" data-id="navbarPanelDropsubmenuFour">
                        <a class="navbar-panel__dropdown-subitem" href="javascript:;">Line 1</a>
                        <a class="navbar-panel__dropdown-subitem" href="javascript:;">Line 2</a>
                        <a class="navbar-panel__dropdown-subitem" href="javascript:;">Line 3</a>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <main class="main">