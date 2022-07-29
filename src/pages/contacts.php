<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/header.php'); ?>

<section>
	<div class="top-screen-inner contacts" style="background-image: url('/build/img/topscreen-contacts.jpg');">
		<div class="container">
			<div class="row">
				<div class="col col-sm-8 col-md-6 col-xl-4">
					<div class="h1 top-screen__title">Наши <br>контакты</div>
					<a class="btn btn-primary" href="javascript:;">
						<span class="text-content">Отправить заявку</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="block-mb-small">
	<div class="container">
		<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/breadcrumbs.php'); ?>
	</div>
</section>

<section class="block-mb">
	<div class="container">
		<div class="section-container">
			<div class="section-container__col section-container__col-7">
                <div id="contacts_page_map" class="contacts-map contacts-page-map"></div>
			</div>
			<div class="section-container__col section-container__col-5">
                <div class="pre-footer__contacts contacts-page-address">
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
                    <div class="pre-footer__contacts-item">
                        <div class="pre-footer__contacts-title">Режим работы</div>
                        <div class="pre-footer__contacts-value">
                            <p>Пн - Пт с 9<span class="fsz-lower">00</span> до 19<span class="fsz-lower">00</span></p>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</section>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/footer.php'); ?>
