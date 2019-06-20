<?php

$spare_parts = get_field('spare_parts');

?>

<?php if (!empty($spare_parts['title']) || !empty($spare_parts['description']) ) { ?>

	<div class="row align-items-center">

		<div class="col-xl-4 col-lg-4 col-md-4 col-12">
			<div class="title-bl services-block__tit-padd">
				<div class="title-bl__title"><?= (!empty($spare_parts['title'])) ? $spare_parts['title'] : ''; ?></div>
				<div class="title-bl__description"><?= (!empty($spare_parts['description'])) ? $spare_parts['description'] : ''; ?></div>
			</div>
		</div>

		<div class="image-block col-xl-8 col-lg-8 col-md-8 col-12">
			<?php if (!empty($spare_parts['text'])) { ?>
			<div class="content-block ">
				<p class="content__text"><?= $spare_parts['text']; ?></p>
			</div>
			<?php } ?>
			<div class="spare_parts_slider">
				<?php $i = 0;?>
				<?php foreach($spare_parts['parts_list'] as $item) { ?>
					<div class="row align-items-center we-values__w-item item-list" style="padding: 5px 0;">

						<div class="img col-lg-3 col-md-4 col-sm-4 col-xs-4 col-4" style=" width: 100%">
							<div style="background: url(<?= $item['image']['url']; ?>) no-repeat 50% / cover; width: 100%; height: 100%">
								<div class="background"><a data-toggle="modal" data-target="#buyPartsModal" href="#" class="btn-buy element-<?= $i; ?>" id="btn-buy"><?= __('Заказать'); ?></a></div>

							</div>
						</div>
						
						<div class="text col-lg-9 col-md-8 col-sm-8 col-xs-8 col-8 element-<?= $i; ?>">
							<div class="title"><?= $item['title']; ?></div>
							<div class="description"><?= $item['description']; ?></div>
							<div class="background"></div>
						</div>
						

					</div>
					<?php $i ++; ?>
				<?php } ?>
				<?php
				unset($item);
				unset($i);
				?>
			</div>
		</div>

	</div>

	<script type="text/javascript" src="<?= get_template_directory_uri()  . '/template-parts/sliders/vertical-slider-with-buy-button.js'?>"></script>

	<?php } ?>