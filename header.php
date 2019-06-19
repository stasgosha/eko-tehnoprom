<?php
	if (!isset($page_title)) {
		$page_title = 'Заголовок страницы';
	}
?>

<!DOCTYPE html>
<html lang="ru"><!-- bloginfo('language') -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $page_title ?> - Экотехнопром</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
	<link rel="stylesheet" href="css/jcf.css">
	<link rel="stylesheet" href="css/main.css">
	<?php //wp_head(); ?>
</head>
<body>
	<div class="wrapper push">
		<div class="page">
			<header class="header">
				<div class="container">
					<div class="header-inner">
						<div class="header-block">
							<div class="logo-block">
								<a href="index.php" class="logo-link">
									<img src="img/logo.png" alt="">
									<span>Экотехнопром</span>
								</a>
								<div class="logo-slogan d-sm-none d-lg-flex">
									<span>Комплексное оснащение <br>социальных объектов</span>
								</div>
							</div>
						</div>
						<div class="header-block d-none d-sm-block">
							<div class="header-contacts">
								<div class="item d-none d-md-block">
									<a href="mailto:info@skvosxod.ru" class="contact-link">
										<span class="link-icon">
											<i class="icon-email"></i>
										</span>
										<span class="link-text">info@skvosxod.ru</span>
									</a>
								</div>
								<div class="item">
									<a href="tel:+74993945769" class="contact-link">
										<span class="link-icon">
											<i class="icon-phone"></i>
										</span>
										<span class="link-text">+7 (499) 394-57-69</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="top-nav-line">
					<div class="container">
						<div class="top-nav-line-inner">
							<div class="tnl-block flex-auto">
								<ul class="top-nav d-none d-lg-flex">
									<li><a href="about.php">О компании</a></li>
									<li><a href="complectation.php">Комплектация</a></li>
									<li><a href="projects.php">Наши проекты</a></li>
									<li><a href="reviews.php">Отзывы</a></li>
									<li><a href="news.php">Новости</a></li>
									<li><a href="contacts.php">Контакты</a></li>
								</ul>
								<div class="menu-opener d-lg-none">
									<div class="bars">
										<div class="bar"></div>
										<div class="bar"></div>
										<div class="bar"></div>
									</div>
									<span>Меню</span>
								</div>
							</div>
							<div class="tnl-block">
								<a href="#" class="tnl-order-btn" data-toggle="modal" data-target="#modal-offer"><span>Отправить </span>запрос на КП</a>
							</div>
						</div>
					</div>
				</div>
			</header>