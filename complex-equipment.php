<?php $page_title = 'Комплексное оснащение детских садов'; ?>
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

		<section class="big-slider-section">
			<div class="container">
				<div class="section-caption text-center">
					<h3 class="sc-title">Комплексное оснащение детских садов</h3>
				</div>
				<ul class="tabs-nav small-gutters" data-nav-target="#big-slider">
					<li data-slide="1">Спальная комната</li>
					<li data-slide="2">Игровая комната</li>
					<li data-slide="3">Пищевой блок</li>
					<li data-slide="4">Столовая</li>
					<li data-slide="5">Развивающие пособия</li>
					<li data-slide="6">Медпункт</li>
					<li data-slide="7">Кабинет директора</li>
					<li data-slide="8">Спортзал</li>
					<li data-slide="9">Кабинет химии</li>
					<li data-slide="10">Кабинет биологии</li>
					<li data-slide="11">Кабинет физики</li>
					<li data-slide="12">Кабинет труда</li>
					<li data-slide="13">Кабинет истории</li>
					<li data-slide="14">Кабинет географии</li>
					<li data-slide="15">Актовый зал</li>
				</ul>
			</div>
			<div class="big-slider-wrapper">
				<div class="big-slider" id="big-slider">
					<!-- data-slide-link - ссылка для кнопки "Читать далее" -->
					<div class="slide" data-slide-link="#1">
						<img src="//placeimg.com/1170/520/any?v=1" alt="">
					</div>
					<div class="slide" data-slide-link="#2">
						<img src="//placeimg.com/1170/520/any?v=2" alt="">
					</div>
					<div class="slide" data-slide-link="#3">
						<img src="//placeimg.com/1170/520/any?v=3" alt="">
					</div>
					<div class="slide" data-slide-link="#4">
						<img src="//placeimg.com/1170/520/any?v=4" alt="">
					</div>
					<div class="slide" data-slide-link="#5">
						<img src="//placeimg.com/1170/520/any?v=5" alt="">
					</div>
					<div class="slide" data-slide-link="#6">
						<img src="//placeimg.com/1170/520/any?v=6" alt="">
					</div>
					<div class="slide" data-slide-link="#7">
						<img src="//placeimg.com/1170/520/any?v=7" alt="">
					</div>
					<div class="slide" data-slide-link="#8">
						<img src="//placeimg.com/1170/520/any?v=8" alt="">
					</div>
					<div class="slide" data-slide-link="#9">
						<img src="//placeimg.com/1170/520/any?v=9" alt="">
					</div>
					<div class="slide" data-slide-link="#10">
						<img src="//placeimg.com/1170/520/any?v=10" alt="">
					</div>
					<div class="slide" data-slide-link="#11">
						<img src="//placeimg.com/1170/520/any?v=11" alt="">
					</div>
					<div class="slide" data-slide-link="#12">
						<img src="//placeimg.com/1170/520/any?v=12" alt="">
					</div>
					<div class="slide" data-slide-link="#13">
						<img src="//placeimg.com/1170/520/any?v=13" alt="">
					</div>
					<div class="slide" data-slide-link="#14">
						<img src="//placeimg.com/1170/520/any?v=14" alt="">
					</div>
					<div class="slide" data-slide-link="#15">
						<img src="//placeimg.com/1170/520/any?v=15" alt="">
					</div>
				</div>
			</div>
		</section>

		<?php include('page-parts/individual-proposal-section.inc.php') ?>

		<?php include('page-parts/partners-section.inc.php') ?>
	</div>
<?php include('footer.php'); ?>