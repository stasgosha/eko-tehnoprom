<?php $page_title = 'Новости'; ?>
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

		<section class="news-section">
			<div class="container">
				<div class="section-caption text-center">
					<h1 class="sc-title">Новости</h1>
				</div>
				<div class="cards-list columns-3 md-columns-2 sm-columns-1">
					<?php for ($i=0; $i < 6; $i++): ?>
						<div class="item">
							<div class="news-card">
								<div class="card-image" style="background-image: url(//placeimg.com/370/240/arch?v=<?= $i ?>);"></div>
								<div class="card-content">
									<h5 class="card-caption"><a href="#">Заголовок новости возможно пару строк текста</a></h5>
									<div class="card-excerpt">
										<p>Имея огромный опыт по разработке и внедрению различных проектов, мы всегда стремимся как можно лучше изучить...</p>
									</div>
									<p class="card-date">29.04.2019</p>
								</div>
							</div>
						</div>
					<?php endfor; ?>
				</div>

				<?php include('page-parts/pagination.inc.php') ?>
			</div>
		</section>

		<?php include('page-parts/why-we-section.inc.php') ?>

		<?php include('page-parts/individual-proposal-section.inc.php') ?>

		<?php include('page-parts/partners-section.inc.php') ?>
	</div>
<?php include('footer.php'); ?>