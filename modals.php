<?php $page_title = 'Попапы'; ?>
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
					<h3 class="sc-title">Попапы</h3>
				</div>
				<a href="#" class="btn" data-toggle="modal" data-target="#modal-offer"><span>Отправить </span>запрос на КП</a>
				<a href="#" class="btn" data-toggle="modal" data-target="#modal-success">Заявка отправлена</a>
			</div>
		</section>

		<?php include('page-parts/individual-proposal-section.inc.php') ?>

		<?php include('page-parts/partners-section.inc.php') ?>
	</div>
<?php include('footer.php'); ?>