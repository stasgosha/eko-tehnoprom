<?php $page_title = 'Контакты'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<section class="breadcrumbs-section">
			<div class="container">
				<ul class="breadcrumbs">
					<li><a href="index.php">Главная</a></li>
					<li><?= $page_title ?></li>
				</ul>
			</div>
		</section>

		<section class="contacts-section">
			<div class="container">
				<div class="section-caption text-center">
					<h3 class="sc-title">Контакты</h3>
				</div>
				<div class="contacts-component">
					<div class="cmp-map">
						<iframe src="https://yandex.ua/map-widget/v1/?um=constructor%3Ae3fe44845a79bc52f010afa622b6c0dba8b37f59ff704ac6a81379dffa3d6524&amp;source=constructor" width="100%" height="520" frameborder="0"></iframe>
					</div>
					<div class="cmp-info">
						<div class="cmp-contacts-list">
							<ul class="contacts-list">
								<li>
									<a href="tel:+74993945769">
										<i class="icon-phone"></i>
										<span>+7 (499) 394-57-69</span>
									</a>
								</li>
								<li>
									<i class="icon-location-green"></i>
									<span>г. Москва, ул. Плеханова 11, строение 1</span>
								</li>
								<li>
									<a href="mailto:info@skvosxod.ru">
										<i class="icon-email"></i>
										<span>info@skvosxod.ru</span>
									</a>
								</li>
								<li>
									<i class="icon-clock"></i>
									<span>Время работы: с 9:00 до 18:00, ПН-ПТ</span>
								</li>
							</ul>
						</div>
						<div class="cmp-requisites tpg">
							<h5>Реквизиты:</h5>
							<p>В некоторых случаях сингулярности могут быть видны внешнему наблюдателю — так называемые голые сингулярности, например космологическая сингулярность в теории Большого взрыва математической точки зрения. Однако при этом необходимо строго отличать так называемую «координатную сингулярность» от истинной гравитационной координаты чёрных дыр</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php include('page-parts/individual-proposal-section.inc.php') ?>

		<?php include('page-parts/partners-section.inc.php') ?>
	</div>
<?php include('footer.php'); ?>