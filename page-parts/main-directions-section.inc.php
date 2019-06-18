<?php

	if (!isset($main_directions_classes)) {
		$main_directions_classes = '';
	}

?>

<section class="main-directions-section <?= $main_directions_classes ?>">
	<div class="container">
		<div class="section-caption text-center">
			<h3 class="sc-title">Основные направления</h3>
		</div>
		<div class="cards-list columns-3 md-columns-1 md-small-gutter">
			<div class="item">
				<div class="direction-card">
					<div class="card-image">
						<img src="img/directions/equipment.png" alt="">
					</div>
					<div class="card-content">
						<div class="card-text">
							<h4 class="card-name">Оснащение детских садов</h4>
							<p>и дошкольных учереждений</p>
						</div>
						<div class="card-footer">
							<a href="#" class="more-link">
								<span>Подробнее</span>
								<i class="icon-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="direction-card">
					<div class="card-image">
						<img src="img/directions/school.png" alt="">
					</div>
					<div class="card-content">
						<div class="card-text">
							<h4 class="card-name">Оснащение школ</h4>
							<p>и образовательных учереждений</p>
						</div>
						<div class="card-footer">
							<a href="#" class="more-link">
								<span>Подробнее</span>
								<i class="icon-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="direction-card">
					<div class="card-image">
						<img src="img/directions/man.png" alt="">
					</div>
					<div class="card-content">
						<div class="card-text">
							<h4 class="card-name">У вас другое направление?</h4>
							<p>Мы предложим Вам индивидуальное решение</p>
						</div>
						<div class="card-footer">
							<a href="#" class="more-link with-bg">
								<span>Получить предложение</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>