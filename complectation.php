<?php $page_title = 'Комплектация'; ?>
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

		<?php $main_directions_classes = 'gray-bg'; ?>
		<?php include('page-parts/main-directions-section.inc.php'); ?>

		<?php include('page-parts/scheme-of-work-section.inc.php'); ?>

		<section class="text-section gray-bg">
			<div class="container">
				<div class="section-inner">
					<div class="section-content tpg">
						<div class="section-caption">
							<h3 class="sc-title">Текстовый блок</h3>
						</div>
						<p>В рамках классической общей теории относительности сингулярности обязательно возникают при формировании чёрных дыр под горизонтом событий, в таком случае они ненаблюдаемы извне. </p>
						<p>В некоторых случаях сингулярности могут быть видны внешнему наблюдателю — так называемые голые сингулярности, например космологическая сингулярность в теории Большого взрыва математической точки зрения. Однако при этом необходимо строго отличать так называемую «координатную сингулярность» от истинной гравитационной. Координатные сингулярности возникают тогда, когда принятые для решения уравнений. Cингулярности могут быть видны внешнему наблюдателю — так называемые голые сингулярности, например космологическая сингулярность в теории Большого взрыва</p>
					</div>
					<div class="section-image">
						<img src="img/section-images/text-section.png" alt="">
					</div>
				</div>
			</div>
		</section>

		<?php include('page-parts/why-we-section.inc.php') ?>

		<?php include('page-parts/individual-proposal-section.inc.php') ?>

		<?php include('page-parts/partners-section.inc.php') ?>
	</div>
<?php include('footer.php'); ?>