<?php $page_title = 'О компании'; ?>
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

		<section class="about-section gray-bg">
			<div class="container">
				<div class="section-inner">
					<div class="section-caption text-center d-lg-none">
						<h3 class="sc-title">О компании</h3>
					</div>
					<div class="section-image">
						<div class="image">
							<img src="img/section-images/about-section.jpg" alt="">
						</div>
					</div>
					<div class="section-content">
						<div class="section-caption small-margin d-none d-lg-block">
							<h3 class="sc-title">О компании</h3>
						</div>
						<div class="section-text tpg">
							<p class="text-uppercase">комплексное обеспечение социальных и жилых объектов: <br class="d-none d-md-inline">от разработки проектной документации до комплексного оснащения <br class="d-none d-md-inline">«под ключ» для их полноценного функционирования.</p>
							<p>В рамках классической общей теории относительности сингулярности обязательно возникают при формировании чёрных дыр под горизонтом событий, в таком случае они ненаблюдаемы извне. В некоторых случаях сингулярности могут быть видны внешнему наблюдателю — так называемые голые сингулярности, например космологическая сингулярность в теории Большого взрыва.</p>
							<p>С математической точки зрения гравитационная сингулярность является множеством особых точек решения уравнений Эйнштейна. Однако при этом необходимо строго отличать так называемую «координатную сингулярность» от истинной гравитационной. Координатные сингулярности возникают тогда, когда принятые для решения уравнений Эйнштейна координатные условия оказываются неудачными, так что, например, сами принятые координаты становятся многозначными (координатные линии пересекаются) или наоборот, не покрывают всего многообразия.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="tasks-section">
			<div class="container">
				<div class="section-caption text-center smaller">
					<h3 class="sc-title">Какие задачи мы помогаем решать?</h3>
				</div>
				<div class="cards-list columns-3 md-columns-2 xs-columns-1">
					<div class="item">
						<div class="task-card">
							<div class="card-icon">
								<img src="img/icons/circled-tick.png" alt="">
							</div>
							<div class="card-text">Консалтинг в области проектирования раздела технологического оборудования.</div>
						</div>
					</div>
					<div class="item">
						<div class="task-card">
							<div class="card-icon">
								<img src="img/icons/circled-tick.png" alt="">
							</div>
							<div class="card-text">Сопровождаем согласование и пересогласование в департаменте образования</div>
						</div>
					</div>
					<div class="item">
						<div class="task-card">
							<div class="card-icon">
								<img src="img/icons/circled-tick.png" alt="">
							</div>
							<div class="card-text">Проектирование, поставка и установка всего оборудования, а также защитных элементов</div>
						</div>
					</div>
					<div class="item">
						<div class="task-card">
							<div class="card-icon">
								<img src="img/icons/circled-tick.png" alt="">
							</div>
							<div class="card-text">Разработка и производство конструктива учебной, лабораторной и офисной мебели.</div>
						</div>
					</div>
					<div class="item">
						<div class="task-card">
							<div class="card-icon">
								<img src="img/icons/circled-tick.png" alt="">
							</div>
							<div class="card-text">Доставка, погрузка, разгрузка, сборка мебели, крепление мебели к стене, монтаж и пусконаладочные работы</div>
						</div>
					</div>
					<div class="item">
						<div class="task-card">
							<div class="card-icon">
								<img src="img/icons/circled-tick.png" alt="">
							</div>
							<div class="card-text">Комплексное сопровождение при получении объектом разрешения на ввод в эксплуатацию</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php include('page-parts/scheme-of-work-section.inc.php'); ?>

		<?php $normative_documets_classes = 'gray-bg'; ?>
		<?php include('page-parts/normative-documets-section.inc.php') ?>

		<?php include('page-parts/why-we-section.inc.php') ?>

		<?php include('page-parts/reviews-section.inc.php') ?>

		<?php include('page-parts/individual-proposal-section.inc.php') ?>

		<?php include('page-parts/partners-section.inc.php') ?>
	</div>
<?php include('footer.php'); ?>