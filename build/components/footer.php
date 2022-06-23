    </main>

    <footer class="footer">
        <div class="container d-flex flex-wrap">
            <div class="footer__item">
                <div class="footer__logo mb-3">
                    <a class="footer__brand" href="javascript:;">
                        <img src="/build/img/logo.svg" alt="">
                    </a>
                </div>
                <div class="footer__rights">
                    <p>
                        Copyright <?= date("Y"); ?> | <a href="javascript:;">Все права защищены</a> | <a href="javascript:;">Circom</a>
                    </p>
                    <p>
                        <a href="javascript:;">Политика Конфиценциальности</a>
                    </p>
                </div>
            </div>
            <div class="footer__item">
                <div class="footer__menu">
                    <div class="row">
                        <div class="col col-6">
                            <ul>
                                <li><a href="javascript:;">Главная</a></li>
                                <li><a href="javascript:;">О компании</a></li>
                                <li><a href="javascript:;">Контакты</a></li>
                                <li><a href="javascript:;">Портфолио</a></li>
                            </ul>
                        </div>
                        <div class="col col-6">
                            <ul>
                                <li><a href="javascript:;">Металлообработка</a></li>
                                <li><a href="javascript:;">Деревообработка</a></li>
                                <li><a href="javascript:;">Покраска</a></li>
                                <li><a href="javascript:;">Услуги по проектированию</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__item">
                <div class="footer__contacts">
                    <div class="footer__contacts-item">посёлок Новые Дома, 8</div>
                    <div class="footer__contacts-item">
                        <a href="tel:+79362510805 ">+7 936 251-08-05</a>
                    </div>
                    <div class="footer__contacts-item">
                        <a href="mailto:zakaz@circom.ru  ">zakaz@circom.ru</a>
                    </div>
                </div>

                <form class="subscribe" action="" method="post">
                    <label class="subscribe__label" for="subscribe-email">
                        <input id="subscribe-email"
                               class="subscribe__field"
                               type="email"
                               name="subscribe-email"
                               placeholder="Подписаться на новости"
                        >
                    </label>
                    <button class="subscribe__button" type="submit">
                            <span class="subscribe__button-view">
                                <svg class="subscribe__button-icon">
                                    <use href="/build/img/sprite.svg#send"></use>
                                </svg>
                            </span>
                    </button>
                </form>
            </div>
        </div>
    </footer>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
    <script src="/build/js/libs.min.js"></script>
    <script src="/build/js/main.js"></script>

</body>
</html>