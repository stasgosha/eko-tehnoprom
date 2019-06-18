<?php $page_title = 'Отзывы'; ?>
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

		<section class="reviews-page">
			<div class="container">
				<div class="section-caption text-center">
					<h1 class="sc-title">Отзывы</h1>
				</div>
				<div class="cards-list columns-3 md-columns-2 sm-columns-1">
					<?php for ($i=0; $i < 6; $i++): ?>
						<div class="item">
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