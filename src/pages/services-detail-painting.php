<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/header.php'); ?>

<section class="mb-3">
	<div class="top-screen-inner painting" style="background-image: url('/build/img/services-painting.jpg');">
		<div class="container">
			<div class="row">
				<div class="col col-sm-8 col-md-6 col-xl-4">
					<div class="h1 top-screen__title">Услуги по <br>покраске</div>
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
		<div class="section-services">
			<div class="section-services__item section-services__item--col-7">
				<div class="section-services__view">
					<img src="/build/img/section-services-img-10.jpg" alt="">
				</div>
				<div class="section-services__descr">
					<div class="section-services__descr-title">Покраска металлических изделий</div>
					<div class="section-services__descr-text">Порошковая покраска металлических изделий в отличие от других лакокрасочных материалов она не содержит летучие вещества.</div>
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
			<div class="section-services__item section-services__item--col-5">
				<div class="section-services__view">
					<img src="/build/img/section-services-img-11.jpeg" alt="">
				</div>
				<div class="section-services__descr">
					<div class="section-services__descr-title">Покраска погонажных изделий</div>
					<div class="section-services__descr-text">Услуга позволяет получить однородно покрашенные материалы с высокими эстетическими и техническими характеристиками.</div>
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