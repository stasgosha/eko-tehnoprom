<?php $page_title = 'Наши проекты'; ?>
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

		<section class="projects-page">
			<div class="container">
				<div class="section-caption text-center">
					<h1 class="sc-title">Наши проекты</h1>
				</div>

				<ul class="tabs-nav wide-items">
					<li data-tab="#schools-projects">Школы</li>
					<li data-tab="#kindergardens-projects">Детские сады</li>
				</ul>

				<div class="tabs-container">
					<div class="tab" id="schools-projects">
						<?php include('page-parts/big-projects-list.inc.php') ?>
					</div>
					<div class="tab" id="kindergardens-projects">
						<?php include('page-parts/big-projects-list.inc.php') ?>
					</div>
				</div>


				<?php include('page-parts/pagination.inc.php') ?>
			</div>
		</section>

		<?php include('page-parts/why-we-section.inc.php') ?>

		<?php include('page-parts/individual-proposal-section.inc.php') ?>

		<?php include('page-parts/partners-section.inc.php') ?>
	</div>
<?php include('footer.php'); ?>