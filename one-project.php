<?php $page_title = 'Страница проекта'; ?>
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
			<div class="big-slider-wrapper">
				<div class="d-md-none big-slider-mobile-nav">
					<div class="select-field">
						<select class="select js-big-slider-nav" data-target-slider="#big-slider">
							<!-- value in option is a target slide index -->
							<option value="0">Средняя школа № 63</option>
							<option value="1">Средняя школа № 64</option>
							<option value="2">Средняя школа № 65</option>
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
					<!-- data-slide-link - ссылка для кнопки "Читать далее" или на Карту -->
					<div
						class="slide" 
						data-slide-link="#0"
						data-link-text="г. Долгопрудный, <br>прт. Ракетостроителей 1"
						style="background-image: url(//placeimg.com/1170/520/arch?v=1)"
						>
							<div class="slide-caption">Средняя школа № 63</div>
					</div>
					<div
						class="slide" 
						data-slide-link="#1"
						data-link-text="г. Долгопрудный, <br>прт. Ракетостроителей 2"
						style="background-image: url(//placeimg.com/1170/520/arch?v=2)"
						>
							<div class="slide-caption">Средняя школа № 64</div>
					</div>
					<div
						class="slide" 
						data-slide-link="#2"
						data-link-text="г. Долгопрудный, <br>прт. Ракетостроителей 3"
						style="background-image: url(//placeimg.com/1170/520/arch?v=3)"
						>
							<div class="slide-caption">Средняя школа № 65</div>
					</div>
				</div>
				<div class="big-slider-controls-wrapper">
					<div class="container">
						<div class="big-slider-controls">
							<div class="more-link">
								<a href="#" class="map-link" target="_blank">
									<i class="icon-location-big"></i>
									<span class="js-link-text"></span>
								</a>
							</div>
							<div class="slider-arrows"></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="one-project-info-section">
			<div class="container">
				<div class="section-inner">
					<div class="section-info">
						<div class="info-list">
							<div class="item">
								<div class="item-label">
									<div class="label-icon">
										<i class="icon-calendar">
									</div></i>
									<span>Срок реализации</span>
								</div>
								<div class="item-value">
									<span>145</span> дней
								</div>
							</div>
							<div class="item">
								<div class="item-label">
									<div class="label-icon">
										<i class="icon-tape"></i>
									</div>
									<span>Площадь</span>
								</div>
								<div class="item-value">
									<span>837</span> m<sup>2</sup>
								</div>
							</div>
							<div class="item">
								<div class="item-label">
									<div class="label-icon">
										<i class="icon-person"></i>
									</div>
									<span>Вместимость</span>
								</div>
								<div class="item-value">
									<span>598</span> мест
								</div>
							</div>
						</div>
						<div class="section-text tpg">
							<h5>Цели и задачи:</h5>
							<p>В рамках классической общей теории относительности сингулярности обязательно возникают при формировании чёрных дыр под горизонтом событий, в таком случае они ненаблюдаемы извне. </p>
							<h5>Результат:</h5>
							<p>В некоторых случаях сингулярности могут быть видны внешнему наблюдателю — так называемые голые сингулярности, например космологическая сингулярность в теории Большого взрыва математической точки зрения. Однако при этом необходимо строго отличать так называемую «координатную сингулярность» от истинной гравитационной координаты чёрных дыр под горизонтом событий, в таком случае они ненаблюдаемы извне. </p>
						</div>
					</div>
					<div class="section-review">
						<div class="review-card">
							<div class="card-header">
								<div class="card-header-content">
									<p class="author">Трошкин Семен Петрович</p>
									<p>Директор школы № 21</p>
								</div>
								<div class="card-header-icon">
									<i class="icon-circled-tick"></i>
								</div>
							</div>
							<div class="card-content tpg">
								<p>Имея огромный опыт по разработке и внедрению различных проектов, мы всегда стремимся как можно лучше изучить и оценить требования клиентов для создания наиболее оптимального решения.</p>
							</div>
							<div class="card-footer">
								<div class="card-date">29.04.2019</div>
								<a href="#" class="more-link">
									<i class="icon-building"></i>
									<span>Посмотреть проект</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="production-section">
			<div class="container">
				<div class="section-caption text-center">
					<h3 class="sc-title">Используемая продукция</h3>
				</div>
				<div class="production-slider">
					<div class="slide">
						<div class="production-card">
							<div class="card-image">
								<img src="img/desk.png" alt="">
							</div>
							<div class="card-caption tpg-h5">Парта школьная</div>
						</div>
					</div>
					<div class="slide">
						<div class="production-card">
							<div class="card-image">
								<img src="img/stool.png" alt="">
							</div>
							<div class="card-caption tpg-h5">Стул офисный</div>
						</div>
					</div>
					<div class="slide">
						<div class="production-card">
							<div class="card-image">
								<img src="img/table.png" alt="">
							</div>
							<div class="card-caption tpg-h5">Стол кухонный</div>
						</div>
					</div>
					<div class="slide">
						<div class="production-card">
							<div class="card-image">
								<img src="img/chair.png" alt="">
							</div>
							<div class="card-caption tpg-h5">Кресло для отдыха</div>
						</div>
					</div>
					<div class="slide">
						<div class="production-card">
							<div class="card-image">
								<img src="img/desk.png" alt="">
							</div>
							<div class="card-caption tpg-h5">Парта школьная</div>
						</div>
					</div>
				</div>
				<div class="section-links">
					<div class="item">
						<a href="#" target="_blank" class="btn btn-light">Скачать каталог оборудования</a>
					</div>
					<div class="item">
						<a href="#" target="_blank" class="btn btn-light">Скачать каталог мебели</a>
					</div>
				</div>
			</div>
		</section>

		<?php include('page-parts/individual-proposal-section.inc.php') ?>

		<?php include('page-parts/partners-section.inc.php') ?>
	</div>
<?php include('footer.php'); ?>