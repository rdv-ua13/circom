        <div class="pre-footer bgcolored-block bg-lightgray">
            <div class="container">
                <div class="row">
                    <div class="col col-12 col-md-6 col-xl-4 mb-4 mb-xl-0">
                        <div class="block-mb-small">
                            <div class="h2 pre-footer__heading">
                                Оставить заявку<br>
                                на расчет проекта
                            </div>
                        </div>
                        <form class="pre-footer__request" action="" method="">
                            <div class="field-wrapper">
                                <input class="field-input"
                                       type="text"
                                       name=""
                                       placeholder="Имя"
                                >
                            </div>
                            <div class="field-wrapper">
                                <input class="field-input"
                                       type="tel"
                                       name=""
                                       placeholder="Телефон"
                                >
                            </div>
                            <div class="field-wrapper">
                                <input class="field-input"
                                       type="email"
                                       name=""
                                       placeholder="E-mail"
                                >
                            </div>
                            <div class="field-wrapper">
                                <textarea class="field-input comment-input"
                                         type="text"
                                         name=""
                                         placeholder="Сообщение"
                                ></textarea>
                            </div>
                            <div class="field-wrapper flex-wrap justify-content-between align-items-start">
                                <div class="agreement-msg">Нажимая кнопку «Отправить», я даю согласие на обработку персональных данных.</div>

                                <div class="file-upload">
                                    <div class="btn btn-primary file-upload__view">
                                        <svg class="icon icon-stroke">
                                            <use href="/build/img/sprite.svg#folder-add"></use>
                                        </svg>
                                    </div>
                                    <div class="file-upload__text">Прикрепить файл</div>
                                </div>

                                <div class="pre-footer__request-btn">
                                    <button class="btn btn-primary" type="submit">
                                        <span class="text-content">Отправить заявку</span>
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>

                    <div class="col col-12 col-xl-4">
                        <div class="pre-footer__contacts">
                            <div class="pre-footer__contacts-item">
                                <div class="pre-footer__contacts-title">Наш телефон:</div>
                                <div class="pre-footer__contacts-value">
                                    <p>+7 936 251-08-05</p>
                                </div>
                            </div>
                            <div class="pre-footer__contacts-item">
                                <div class="pre-footer__contacts-title">Адрес:</div>
                                <div class="pre-footer__contacts-value">
                                    <p>посёлок Новые Дома, 8</p>
                                    <p>Городской округ Электросталь,</p>
                                    <p>Московская область</p>
                                </div>
                            </div>
                            <div class="pre-footer__contacts-item">
                                <div class="pre-footer__contacts-title">E-mail:</div>
                                <div class="pre-footer__contacts-value">
                                    <p>zakaz@circom.ru</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-12 col-md-6 col-xl-4 mb-4 mb-xl-0">
                        <div id="contacts_map" class="contacts-map"></div>
                    </div>

                </div>
            </div>
        </div>

    </main>

    <footer class="footer">
        <div class="container d-flex flex-wrap">
            <div class="footer__item">
                <a class="footer__logo" href="javascript:;">
                    <img src="/build/img/logo.svg" alt="">
                </a>
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
                    <ul>
                        <li><a href="javascript:;">Главная</a></li>
                        <li><a href="javascript:;">О компании</a></li>
                        <li><a href="javascript:;">Контакты</a></li>
                        <li><a href="javascript:;">Портфолио</a></li>
                    </ul>
                    <ul>
                        <li><a href="javascript:;">Металлообработка</a></li>
                        <li><a href="javascript:;">Деревообработка</a></li>
                        <li><a href="javascript:;">Покраска</a></li>
                        <li><a href="javascript:;">Услуги по проектированию</a></li>
                    </ul>
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
                               name=""
                               placeholder="Подписаться на новости"
                        >
                    </label>
                    <button class="btn btn-small btn-primary" type="submit">
                        <svg class="icon icon-stroke">
                            <use href="/build/img/sprite.svg#send"></use>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </footer>

    <?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/modals.php'); ?>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
    <script src="/build/js/libs.min.js"></script>
    <script src="/build/js/main.js"></script>

</body>
</html>