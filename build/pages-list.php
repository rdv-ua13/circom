<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pages</title>
        <style type="text/css">
            body {
                margin: 0;
                font-family: sans-serif;
                font-size: 16px;
                line-height: 1.4;
                box-sizing: border-box;
            }
            a {
                display: inline-block;
            }
            a:focus {
                color: chocolate;
            }
            div {
                padding-left: 40px;
                margin-bottom: 20px;
            }
            img {
                min-width: 200px;
                width: 200px;
            }
            ul {
                padding-left: 15px;
                list-style: none;
            }
            li {
                position: relative;
                margin-bottom: 10px;
                padding-left: 15px;
            }
            .logo {
                display: inline-flex;
                margin-bottom: 10px;
                padding: 15px;
            }
            .logo .logo-icon {
                min-width: 200px;
                width: 200px;
                min-height: 54px;
                height: 54px;
            }
        </style>
    </head>

    <body>
    <div style="display: flex; flex-wrap: wrap; align-items:center; margin: 0 0 15px 20px;">
        <div class="logo">
            <img class="logo-icon" src="/build/img/logo.svg">
        </div>
        <div style="display: flex; flex-basis: 100%; align-items:center; padding-left: 15px; font-size: 24px;">
            <span style="color: forestgreen; font-weight: 600;">9</span>
            &nbsp;/&nbsp;
            <span style="font-size: 24px;">13 (всего страниц в макете)</span>
        </div>
    </div>

    <div>
        <ol>
            <li><a href="/build/index.php" target="_blank">Главная</a></li>
            <li><a href="/build/services-detail-woodworking.php" target="_blank">Услуги детальная - деревообработка</a></li>
            <li><a href="/build/services-detail-metalworking.php" target="_blank">Услуги детальная - металлообработка</a></li>
            <li><a href="/build/services-detail-metalworking-additional.php" target="_blank">Услуги детальная - металлообработка (доп услуги)</a></li>
            <li><a href="/build/services-detail-painting.php" target="_blank">Услуги детальная - покраска</a></li>
            <li><a href="/build/services-detail-maf.php" target="_blank">Услуги детальная - МАФ</a></li>
            <br>
            <li><a href="/build/about.php" target="_blank">О компании</a></li>
            <li><a href="/build/contacts.php" target="_blank">Контакты</a></li>
            <li><a href="/build/equipment.php" target="_blank">Оборудование</a></li>

            <li><a href="/build/equipment-detail.php" target="_blank">Оборудование - детальная</a></li>
            <li><a href="/build/text-page.php" target="_blank">Текстовая страница</a></li>
        </ol>
    </div>
    </body>
</html>