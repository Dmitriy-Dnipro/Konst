<?php

$realized_projects = get_field('realized_projects');

?>


<div class="row align-items-center">
	<div class="col-xl-4 col-lg-4 col-md-4 col-12">

		<div class="title-bl services-block__tit-padd">
			<div class="title-bl__title"><?= $realized_projects['title']; ?></div>
			<div class="title-bl__description"><?= $realized_projects['description']; ?></div>
		</div>

	</div>
	<div id="relized-projects-slider" class="relized-projects-slider col-xl-8 col-lg-8 col-md-8 col-12 ">

		<div class="slider-for">
			<?php foreach ($realized_projects['slider'] as $item) { ?>
			<div class=" item">
				<div class="row">
					<div class="col-lg-7">
						<div class="slider-image" style="background: url(<?= $item['image']['url']; ?>) no-repeat 50% / cover;"></div>
						<div class="slider-bg"></div>
					</div>
					<div class="col-lg-5">
						<div class="slider-text">
							<!--<img class="logo" src="<?= $item['company_logo']['url']; ?>" alt="<?= $item['company_logo']['alt']; ?>" />-->
							<div class="logo" style="background: url(<?= $item['company_logo']['url']; ?>) no-repeat 0% / contain;height: 100px;"></div>
							<p class="title"><?= $item['title']; ?></p>
							<p><?= $item['description']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>

		
		<div class="slider-nav">
			<?php foreach ($realized_projects['slider'] as $item) { ?>
			<div class="item">
				<div class="img-block">
					<img src="<?= $item['company_logo']['url']; ?>" alt="<?= $item['company_logo']['alt']; ?>">
					<div class="slider-bg"></div>
				</div>
				<div class="slider-text">
					<p><?= $item['text']?></p>
				</div>
			</div>
			<?php } ?>
		</div>

	</div>
</div>
