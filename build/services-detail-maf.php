<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/header.php'); ?>

<section class="mb-3">
	<div class="top-screen-inner" style="background-image: url('/build/img/topscreen-maf.jpg');">
		<div class="container">
			<div class="row">
				<div class="col col-sm-8 col-md-6 col-xl-4">
					<div class="h1 top-screen__title">Услуги по <br>разработке МАФ</div>
					<a class="btn btn-primary" href="javascript:;">
						<span class="text-content">Отправить заявку</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="block-mb">
	<div class="container">
		<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/breadcrumbs.php'); ?>
	</div>
</section>

<section class="block-mb">
	<div class="container">
		<div class="section-services section-container">
			<div class="section-container__col section-container__col-12">
				<div class="section-services__view">
					<img src="/build/img/section-services-img-12.png" alt="">
				</div>
				<div class="section-services__descr">
					<div class="section-services__descr-title">Проектирование и разработка МАФ</div>
					<div class="section-services__descr-text">Проектируем и разрабатываем малые архитектурные формы или создадим изделия по вашим чертежам.</div>
				</div>
				<div class="section-services__more">
					<a href="javascript:;">
						<span class="text-content text-content-mr">Подробнее</span>
						<svg class="icon icon-stroke">
							<use href="/build/img/sprite.svg#arrow-right"></use>
						</svg>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="block-mb">
	<div class="container">
		<div class="block-header">
			<div class="h2">Портфолио выполненных работ</div>
			<a class="link-more color-blue" href="javascript:;">
				<span>Посмотреть все</span>
				<svg class="icon icon-stroke">
					<use href="/build/img/sprite.svg#arrow-right"></use>
				</svg>
			</a>
		</div>

		<div class="portfolio">
			<a class="portfolio__item" href="javascript:;" style="background-image: url('/build/img/portfolio-img1.jpg');">
				<a class="portfolio__item-link"></a>
			</a>
			<a class="portfolio__item" href="javascript:;" style="background-image: url('/build/img/portfolio-img2.jpg');">
				<a class="portfolio__item-link"></a>
			</a>
			<a class="portfolio__item" href="javascript:;" style="background-image: url('/build/img/portfolio-img3.jpg');">
				<a class="portfolio__item-link"></a>
			</a>
			<a class="portfolio__item" href="javascript:;" style="background-image: url('/build/img/portfolio-img4.jpg');">
				<a class="portfolio__item-link"></a>
			</a>
		</div>
	</div>
</section>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/footer.php'); ?>