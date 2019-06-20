<?php
$services = get_field('services');

?>

<?php if (!empty($services['title']) || !empty($services['description']) ) {?>

	<div class="row align-items-center">
		<div class="col-xl-4 col-lg-4 col-md-4 col-12">

			<div class="title-bl services-block__tit-padd">
				<div class="title-bl__title"><?= (!empty($services['title'])) ? $services['title'] : ''; ?></div>
				<div class="title-bl__description"><?= (!empty($services['description'])) ? $services['description'] : ''; ?></div>
			</div>

		</div>
		<div class="col-xl-8 col-lg-8 col-md-8 col-12">

			<div class="row service-pages__content">
				<?php if ( count($services['services_list']) % 2 == 0 ) { ?>
					<div class="service-pages__list row">
						<div class="service-pages__item col-lg-12 col-md-12-col-sm-12 col-xs-12 col-12">

							<div class="row">
								<?php foreach ($services['services_list'] as $key => $item) {?>

									<div class="row-block col-lg-3 col-md-6 col-sm-6-col-xs-6 col-6">
										<a href="<?= (!empty($item['link'])) ? $item['link'] : '#'; ?>">
											<div class="service-pages__item--element">
												<div class="text">
													<?= (!empty($item['title'])) ? $item['title'] : ''; ?>
												</div>
												<div class="bg" style="background: url(<?= (!empty($item['image']['url'])) ? $item['image']['url'] : get_template_directory_uri() . '/img/home/no-image.png'?>)no-repeat 50% / cover;"></div>
												<div class="bg-gradient"></div>
												<div class="bg-gradient-second"></div>
											</div>
										</a>
									</div>

								<?php } ?>




							</div>

						</div>
					</div>
				<?php } else { ?>
					
					<div class="service-pages__list row">
						<div class="service-pages__item col-lg-4 col-md-12-col-sm-12 col-xs-12 col-12">
							<div class="service-pages__item--big-element row">
								<a href="<?= (!empty($services['services_list'][0]['link'])) ? $services['services_list'][0]['link'] : '#'; ?>">
									<div class="text"><?= (!empty($services['services_list'][0]['title'])) ? $services['services_list'][0]['title'] : ''; ?></div>
									<div class="bg" style="background: url(<?= (!empty($services['services_list'][0]['image']['url'])) ? $services['services_list'][0]['image']['url'] : get_template_directory_uri() . '/img/home/no-image.png'?>)no-repeat 50% / cover;"></div>
									<div class="bg-gradient"></div>
									<div class="bg-gradient-second"></div>
								</a>

							</div>
						</div>
						<div class="service-pages__item col-lg-8 col-md-12-col-sm-12 col-xs-12 col-12">
							
							<div class="row">
								<?php foreach ($services['services_list'] as $key => $item) {?>
									<?php if($key !== 0) { ?>
										<div class="row-block col-lg-4 col-md-6 col-sm-6-col-xs-6 col-6">
											<a href="<?= (!empty($item['link'])) ? $item['link'] : '#'; ?>">
												<div class="service-pages__item--element">
													<div class="text">
														<?= (!empty($item['title'])) ? $item['title'] : ''; ?>
													</div>
													<div class="bg" style="background: url(<?= (!empty($item['image']['url'])) ? $item['image']['url'] : get_template_directory_uri() . '/img/home/no-image.png'?>)no-repeat 50% / cover;"></div>
													<div class="bg-gradient"></div>
													<div class="bg-gradient-second"></div>
												</div>
											</a>
										</div>
									<?php } ?>
								<?php } ?>

								


							</div>
							
						</div>
					</div>
				<?php }?>

			</div>

		</div>
	</div>

	<?php } ?>