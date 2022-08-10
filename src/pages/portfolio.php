<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/header.php'); ?>

<section>
	<div class="top-screen-inner" style="background-image: url('/build/img/topscreen-painting.jpg');">
		<div class="container">
			<div class="row">
				<div class="col col-sm-8 col-md-6 col-xl-4">
					<div class="h1 top-screen__title">Портфолио <br>выполненных работ</div>
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
        <div class="sidebar-page-wrapper">
            <?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/sidebar.php'); ?>

            <div class="section-container portfolio portfolio-page">
                <div class="section-container__col section-container__col-4">
                    <a class="portfolio__item js-portfolio-item" href="javascript:;" data-toggle="modal" data-target="portfolioPopup1">
                        <div class="portfolio__item-view">
                            <img src="/build/img/portfolio-img-1.png" alt="">
                        </div>
                        <div class="portfolio__item-descr">Уличный стул <br>модель «Азимут»</div>
                    </a>
                </div>
                <div class="section-container__col section-container__col-4">
                    <div class="portfolio__item-wrapper">
                        <a class="portfolio__item js-portfolio-item" href="javascript:;" data-toggle="modal" data-target="portfolioPopup2">
                            <div class="portfolio__item-view">
                                <img src="/build/img/portfolio-img-2.png" alt="">
                            </div>
                            <div class="portfolio__item-descr">Уличный стул <br>модель «Азимут»</div>
                        </a>
                    </div>
                </div>
                <div class="section-container__col section-container__col-4">
                    <a class="portfolio__item js-portfolio-item" href="javascript:;" data-toggle="modal" data-target="portfolioPopup3">
                        <div class="portfolio__item-view">
                            <img src="/build/img/portfolio-img-3.png" alt="">
                        </div>
                        <div class="portfolio__item-descr">Уличный стул <br>модель «Азимут»</div>
                    </a>
                </div>


                <div class="section-container__col section-container__col-4">
                    <a class="portfolio__item" href="javascript:;">
                        <div class="portfolio__item-view">
                            <img src="/build/img/portfolio-img-4.png" alt="">
                        </div>
                        <div class="portfolio__item-descr">Уличный стул <br>модель «Азимут»</div>
                    </a>
                </div>
                <div class="section-container__col section-container__col-4">
                    <a class="portfolio__item" href="javascript:;">
                        <div class="portfolio__item-view">
                            <img src="/build/img/portfolio-img-5.png" alt="">
                        </div>
                        <div class="portfolio__item-descr">Уличный стул <br>модель «Азимут»</div>
                    </a>
                </div>
                <div class="section-container__col section-container__col-4">
                    <a class="portfolio__item" href="javascript:;">
                        <div class="portfolio__item-view">
                            <img src="/build/img/portfolio-img-6.png" alt="">
                        </div>
                        <div class="portfolio__item-descr">Уличный стул <br>модель «Азимут»</div>
                    </a>
                </div>
                <div class="section-container__col section-container__col-4">
                    <a class="portfolio__item" href="javascript:;">
                        <div class="portfolio__item-view">
                            <img src="/build/img/portfolio-img-7.png" alt="">
                        </div>
                        <div class="portfolio__item-descr">Уличный стул <br>модель «Азимут»</div>
                    </a>
                </div>
                <div class="section-container__col section-container__col-4">
                    <a class="portfolio__item" href="javascript:;">
                        <div class="portfolio__item-view">
                            <img src="/build/img/portfolio-img-8.png" alt="">
                        </div>
                        <div class="portfolio__item-descr">Уличный стул <br>модель «Азимут»</div>
                    </a>
                </div>
                <div class="section-container__col section-container__col-4">
                    <a class="portfolio__item" href="javascript:;">
                        <div class="portfolio__item-view">
                            <img src="/build/img/portfolio-img-9.png" alt="">
                        </div>
                        <div class="portfolio__item-descr">Уличный стул <br>модель «Азимут»</div>
                    </a>
                </div>

                <div class="section-pagination">
                    <?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/pagination.php'); ?>
                </div>
            </div>
        </div>

        <?/* <div class="swiper-container portfolio-modal__main-slider js-test-modal-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="portfolio-modal__view">
                        <img src="/build/img/portfolio-img-2.png" alt="">
                    </div>
                    <div class="portfolio-modal__descr">
                        <div class="portfolio-modal__descr-title">Уличный стул <br>модель «Азимут» 2</div>
                        <div class="portfolio-modal__descr-details">
                            <p>Изготовлен из вымоченной сосны гнутым методом.</p>
                            <p>Размер 120х20х2000</p>
                        </div>
                        <div class="portfolio-modal__descr-btn">
                            <button class="btn btn-primary" type="submit">
                                <span class="text-content">Хочу такой</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="portfolio-modal__view">
                        <img src="/build/img/portfolio-img-3.png" alt="">
                    </div>
                    <div class="portfolio-modal__descr">
                        <div class="portfolio-modal__descr-title">Уличный стул <br>модель «Азимут» 2</div>
                        <div class="portfolio-modal__descr-details">
                            <p>Изготовлен из вымоченной сосны гнутым методом.</p>
                            <p>Размер 120х20х2000</p>
                        </div>
                        <div class="portfolio-modal__descr-btn">
                            <button class="btn btn-primary" type="submit">
                                <span class="text-content">Хочу такой</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="portfolio-modal__view">
                        <img src="/build/img/portfolio-img-4.png" alt="">
                    </div>
                    <div class="portfolio-modal__descr">
                        <div class="portfolio-modal__descr-title">Уличный стул <br>модель «Азимут» 2</div>
                        <div class="portfolio-modal__descr-details">
                            <p>Изготовлен из вымоченной сосны гнутым методом.</p>
                            <p>Размер 120х20х2000</p>
                        </div>
                        <div class="portfolio-modal__descr-btn">
                            <button class="btn btn-primary" type="submit">
                                <span class="text-content">Хочу такой</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="portfolio-modal__view">
                        <img src="/build/img/portfolio-img-5.png" alt="">
                    </div>
                    <div class="portfolio-modal__descr">
                        <div class="portfolio-modal__descr-title">Уличный стул <br>модель «Азимут» 2</div>
                        <div class="portfolio-modal__descr-details">
                            <p>Изготовлен из вымоченной сосны гнутым методом.</p>
                            <p>Размер 120х20х2000</p>
                        </div>
                        <div class="portfolio-modal__descr-btn">
                            <button class="btn btn-primary" type="submit">
                                <span class="text-content">Хочу такой</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-navigation">
                <div class="swiper-button-prev">
                    <svg class="icon icon-stroke rotate-top">
                        <use href="/build/img/sprite.svg#arrow-right"></use>
                    </svg>
                </div>
                <div class="swiper-button-next">
                    <svg class="icon icon-stroke rotate-bottom">
                        <use href="/build/img/sprite.svg#arrow-right"></use>
                    </svg>
                </div>
            </div>
        </div> */?>

	</div>
</section>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/footer.php'); ?>