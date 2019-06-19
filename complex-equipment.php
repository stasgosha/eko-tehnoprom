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
				<div class="d-none d-md-block">
					<ul class="tabs-nav small-gutters" data-target-slider="#big-slider">
						<li data-slide="0">Спальная комната</li>
						<li data-slide="1">Игровая комната</li>
						<li data-slide="2">Пищевой блок</li>
						<li data-slide="3">Столовая</li>
						<li data-slide="4">Развивающие пособия</li>
						<li data-slide="5">Медпункт</li>
						<li data-slide="6">Кабинет директора</li>
						<li data-slide="7">Спортзал</li>
						<li data-slide="8">Кабинет химии</li>
						<li data-slide="9">Кабинет биологии</li>
						<li data-slide="10">Кабинет физики</li>
						<li data-slide="11">Кабинет труда</li>
						<li data-slide="12">Кабинет истории</li>
						<li data-slide="13">Кабинет географии</li>
						<li data-slide="14">Актовый зал</li>
					</ul>
				</div>
			</div>
			<div class="big-slider-wrapper">
				<div class="d-md-none big-slider-mobile-nav">
					<div class="select-field">
						<select class="select js-big-slider-nav" data-target-slider="#big-slider">
							<!-- value in option is a target slide index -->
							<option value="0">Спальная комната</option>
							<option value="1">Игровая комната</option>
							<option value="2">Пищевой блок</option>
							<option value="3">Столовая</option>
							<option value="4">Развивающие пособия</option>
							<option value="5">Медпункт</option>
							<option value="6">Кабинет директора</option>
							<option value="7">Спортзал</option>
							<option value="8">Кабинет химии</option>
							<option value="9">Кабинет биологии</option>
							<option value="10">Кабинет физики</option>
							<option value="11">Кабинет труда</option>
							<option value="12">Кабинет истории</option>
							<option value="13">Кабинет географии</option>
							<option value="14">Актовый зал</option>
						</select>
					</div>
				</div>
				<div class="big-slider-total-slides-wrapper">
					<div class="container">
						<div class="big-slider-total-slides">
							<span class="current-index"></span>
							<span>/</span>
							<span class="total-count"></span>
						</div>
					</div>
				</div>
				<div class="big-slider" id="big-slider">
					<!-- data-slide-link - ссылка для кнопки "Читать далее" -->
					<div
						class="slide" 
						data-slide-link="#0"
						style="background-image: url(//placeimg.com/1170/520/any?v=1)"
						>
							<div class="slide-caption">Спальная комната</div>
					</div>
					<div
						class="slide" 
						data-slide-link="#1"
						style="background-image: url(//placeimg.com/1170/520/any?v=2)"
						>
							<div class="slide-caption">Игровая комната</div>
					</div>
					<div
						class="slide" 
						data-slide-link="#2"
						style="background-image: url(//placeimg.com/1170/520/any?v=3)"
						>
							<div class="slide-caption">Пищевой блок</div>
					</div>
					<div
						class="slide" 
						data-slide-link="#3"
						style="background-image: url(//placeimg.com/1170/520/any?v=4)"
						>
							<div class="slide-caption">Столовая</div>
					</div>
					<div
						class="slide" 
						data-slide-link="#4"
						style="background-image: url(//placeimg.com/1170/520/any?v=5)"
						>
							<div class="slide-caption">Развивающие пособия</div>
					</div>
					<div
						class="slide" 
						data-slide-link="#5"
						style="background-image: url(//placeimg.com/1170/520/any?v=6)"
						>
							<div class="slide-caption">Медпункт</div>
					</div>
					<div
						class="slide" 
						data-slide-link="#6"
						style="background-image: url(//placeimg.com/1170/520/any?v=7)"
						>
							<div class="slide-caption">Кабинет директора</div>
					</div>
					<div
						class="slide" 
						data-slide-link="#7"
						style="background-image: url(//placeimg.com/1170/520/any?v=8)"
						>
							<div class="slide-caption">Спортзал</div>
					</div>
					<div
						class="slide" 
						data-slide-link="#8"
						style="background-image: url(//placeimg.com/1170/520/any?v=9)"
						>
							<div class="slide-caption">Кабинет химии</div>
					</div>
					<div
						class="slide" 
						data-slide-link="#9"
						style="background-image: url(//placeimg.com/1170/520/any?v=1)"
						>
							<div class="slide-caption">Кабинет биологии</div>
					</div>
					<div
						class="slide" 
						data-slide-link="#10"
						style="background-image: url(//placeimg.com/1170/520/any?v=1)"
						>
							<div class="slide-caption">Кабинет физики</div>
					</div>
					<div
						class="slide" 
						data-slide-link="#11"
						style="background-image: url(//placeimg.com/1170/520/any?v=1)"
						>
							<div class="slide-caption">Кабинет труда</div>
					</div>
					<div
						class="slide" 
						data-slide-link="#12"
						style="background-image: url(//placeimg.com/1170/520/any?v=1)"
						>
							<div class="slide-caption">Кабинет истории</div>
					</div>
					<div
						class="slide" 
						data-slide-link="#13"
						style="background-image: url(//placeimg.com/1170/520/any?v=1)"
						>
							<div class="slide-caption">Кабинет географии</div>
					</div>
					<div
						class="slide" 
						data-slide-link="#14"
						style="background-image: url(//placeimg.com/1170/520/any?v=1)"
						>
							<div class="slide-caption">Актовый зал</div>
					</div>
				</div>
				<div class="big-slider-controls-wrapper">
					<div class="container">
						<div class="big-slider-controls">
							<div class="more-link">
								<a href="#" class="btn btn-light btn-white btn-sm-green with-icon-hover">
									<span class="js-link-text">Читать подробнее</span>
									<i class="icon-arrow-right-big"></i>
								</a>
							</div>
							<div class="slider-arrows"></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="text-with-cards-section">
			<div class="container">
				<div class="section-inner">
					<div class="section-text tpg">
						<div class="section-caption">
							<h3 class="sc-title">Текстовый блок</h3>
						</div>
						<p class="text-uppercase">комплексное обеспечение социальных и жилых объектов: от разработки проектной документации до комплексного оснащения «под ключ» для их полноценного функционирования.</p>
						<p>В рамках классической общей теории относительности сингулярности обязательно возникают при формировании чёрных дыр под горизонтом событий, в таком случае они ненаблюдаемы извне. </p>
						<p>В некоторых случаях сингулярности могут быть видны внешнему наблюдателю — так называемые голые сингулярности, например космологическая сингулярность в теории Большого взрыва математической точки зрения. Однако при этом необходимо строго отличать так называемую «координатную сингулярность» от истинной гравитационной. Координатные сингулярности возникают.</p>
					</div>
					<div class="section-cards">
						<div class="item">
							<div class="catalog-card">
								<div class="card-content">
									<p>Каталог <br>оборудования</p>
									<a href="#">
										<i class="icon-arrow-down"></i>
										<span>Скачать</span>
									</a>
								</div>
								<div class="card-image">
									<img src="img/toy-castle.png" alt="">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="catalog-card">
								<div class="card-content">
									<p>Каталог <br>мебели</p>
									<a href="#">
										<i class="icon-arrow-down"></i>
										<span>Скачать</span>
									</a>
								</div>
								<div class="card-image no-bottom-padding">
									<img src="img/toy-house.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php include('page-parts/scheme-of-work-section.inc.php') ?>

		<?php $project_section_classes = 'no-bottom-padding' ?>
		<?php include('page-parts/projects-section.inc.php') ?>

		<?php $normative_documets_classes = 'gray-bg'; ?>
		<?php include('page-parts/normative-documets-section.inc.php') ?>

		<?php include('page-parts/why-we-section.inc.php') ?>

		<?php include('page-parts/individual-proposal-section.inc.php') ?>

		<?php include('page-parts/reviews-section.inc.php') ?>
	</div>
<?php include('footer.php'); ?>