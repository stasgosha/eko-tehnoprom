<?php $page_title = 'Страница не найдена'; ?>
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

		<section class="error-page-section">
			<div class="container">
				<div class="error-page-content">
					<div class="image">
						<img src="img/404.png" alt="">
					</div>
					<p>Ой, тут должна была быть страница, <br>но что-то пошло не так</p>
					<div class="flex-center">
						<a href="index.php" class="btn back-btn">
							<i class="icon-arrow-left-big"></i>
							<span>Вернуться на главную</span>
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>