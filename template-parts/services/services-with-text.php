<?php

$services_with_text = get_field('services_with_text');
$lang = pll_current_language();
?>

<div class="row align-items-center services-with-text">
	<div class="col-xl-4 col-lg-4 col-md-4 col-12">

		<div class="title-bl services-block__tit-padd">
			<div class="title-bl__title"><?= (!empty($services_with_text['title'])) ? $services_with_text['title'] : ''; ?></div>
			<div class="title-bl__description"><?= !empty($services_with_text['description']) ? $services_with_text['description'] : ''; ?></div>
		</div>

	</div>
	<div class="col-xl-8 col-lg-8 col-md-8 col-12">

		<div class="row">

			<?if (!empty($services_with_text['services_list'])) { ?>
				<?php foreach ($services_with_text['services_list'] as $item) { ?>

					<?php if (empty($services_with_text['columns_count']) || $services_with_text['columns_count'] < 2) { ?>
						<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12  col-12">
						<?php } elseif ($services_with_text['columns_count'] == 2) { ?>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  col-12">
							<?php } elseif ($services_with_text['columns_count'] == 3) { ?>
								<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12  col-12">
								<?php } elseif ($services_with_text['columns_count'] >= 4 ) { ?>
									<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12  col-12">
									<?php } ?>

									<div class="service-element">
										<a class="services-block__item" href="<?= (!empty($item['link'])) ? $item['link'] : ''; ?>">
											<div class="img" style="background: url(<?= (!empty($item['image']['url'])) ? $item['image']['url'] : get_template_directory_uri() . '/img/home/no-image.png'; ?>) no-repeat 50% / cover;">
												<?php if (!empty($item['text'])) { ?>
													<div class="services-block__item-bg"></div>
												<?php } ?>
											</div>
											<div class="services-block__hover-bg"></div>
										</a>
										<div class="services-content">
											
											<div class="title">
												<a href="<?= (!empty($item['link'])) ? $item['link'] : ''; ?>">
													<?= (!empty($item['title'])) ? $item['title'] : ''; ?>
												</a>
											</div>
											
											<div class="description"><?= (!empty($item['text'])) ? $item['text'] : ''; ?></div>

											<?php if (!empty($item['text'])) { ?>
												<a href="<?= (!empty($item['link'])) ? $item['link'] : ''; ?>">
												<?php 
													if($lang == 'ru'){
														echo 'Подробнее';
													}else if($lang == 'uk'){
														echo 'Детальніше';
													}
												?>
											</a>
											<?php } ?>
										</div>
									</div>

								</div>
							<?php } ?>
						<?php }?>

					</div>

				</div>
			</div>