		</div>
		<footer class="footer">
			<div class="top-nav-line">
				<div class="container">
					<div class="top-nav-line-inner">
						<div class="tnl-block flex-auto">
							<ul class="top-nav d-none d-lg-flex">
								<li><a href="#">О компании</a></li>
								<li><a href="#">Комплектация</a></li>
								<li><a href="#">Наши проекты</a></li>
								<li><a href="#">Отзывы</a></li>
								<li><a href="#">Новости</a></li>
								<li><a href="#">Контакты</a></li>
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
			<div class="container">
				<div class="footer-inner">
					<div class="footer-block">
						<div class="logo-block">
							<a href="index.php" class="logo-link">
								<img src="img/logo.png" alt="">
								<span>Экотехнопром</span>
							</a>
						</div>
					</div>
					<div class="footer-block flex-auto">
						<div class="info-list">
							<div class="item">2019 - <?= date('Y') ?> <br>Все права защищены</div>
							<div class="item">Часы работы: <br>ПН - ПТ <span class="no-wrap">с 9:00 до 18:00</span></div>
							<div class="item">Адрес офиса: <br>Москва, ул. Пушкина 17</div>
						</div>
					</div>
					<div class="footer-block">
						<a href="//webolution.ru" class="webolution">
							<img src="img/webolution.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<nav id="menu" class="panel">
		<div class="panel-inner">
			<div class="panel-content"></div>
			<ul class="panel-nav">
				<li><a href=""></a></li>
			</ul>
		</div>
	</nav>
	<div class="modal fade narrow" tabindex="-1" role="dialog" id="modal-offer">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-close" data-dismiss="modal" aria-label="Close">
						<i class="icon icon-close"></i>
					</div>
					<h5 class="modal-caption tpg-h5">Запрос на комерческое предложение</h5>
					<div class="offer-form form">
						<div class="fields">
							<div class="form-row">
								<div class="form-field">
									<input type="text" class="input-field color-dark" placeholder="Ваше имя">
								</div>
							</div>
							<div class="form-row">
								<div class="form-field">
									<input type="tel" class="input-field color-dark" placeholder="Телефон">
								</div>
							</div>
							<div class="form-row">
								<div class="form-field">
									<textarea class="textarea color-dark" placeholder="Комментарий"></textarea>
								</div>
							</div>
							<div class="form-row big-margin">
								<div class="attach-file">
									<input type="file" name="file" id="file" class="inputfile">
									<label for="file">
										<div class="label-icon"></div>
										<div class="label-content">
											<div class="not-selected">
												<div class="label-caption">Прикрепить файл</div>
												<div class="label-subcaption">Не более 50 mb</div>
											</div>
											<div class="selected">
												<div class="selected-file-name"></div>
											</div>
										</div>
									</label>
								</div>
							</div>
							<div class="form-row big-margin">
								<div class="checkbox dark">
									<input type="checkbox" id="offer_agreement">
									<label for="offer_agreement">C соглашением о персональных данных ознакомлен и согласен</label>
								</div>
							</div>
							<div class="form-row">
								<button class="btn fullwidth" data-toggle="modal" data-target="#modal-success">Оставить заявку</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade narrow" tabindex="-1" role="dialog" id="modal-success">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-success">
						<div class="success-icon">
							<img src="img/success.png" alt="">
						</div>
						<div class="success-caption">Спасибо!</div>
						<p>Ваша заявка успешно отправлена, наш консультант свяжется с вами в ближайшее время</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script defer src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script defer src="//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.min.js"></script>
	<script defer src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script defer src="js/bootstrap.bundle.min.js"></script>
	<script defer src="js/bigSlide.min.js"></script>
	<script defer src="js/jcf.js"></script>
	<script defer src="js/jcf.select.js"></script>
	<script defer src="js/scripts.js"></script>
	<?php // wp_footer(); ?>
</body>
</html>