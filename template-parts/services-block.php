<?php

$services = get_field('services');

?>

<div class="row align-items-center">
	<div class="col-xl-4 col-lg-4 col-md-4 col-12">

		<div class="title-bl services-block__tit-padd">
			<div class="title-bl__title"><?= (!empty($services['title'])) ? $services['title'] : ''; ?></div>
			<div class="title-bl__description"><?= !empty($services['description']) ? $services['description'] : ''; ?></div>
		</div>

	</div>
	<div class="col-xl-8 col-lg-8 col-md-8 col-12">

		<div class="row">

			<?if (!empty($services['services_list'])) { ?>
				<?php $i = 0; ?>
				<?php foreach ($services['services_list'] as $item) { ?>

					<?php if (empty($services['columns_count']) || $services['columns_count'] < 2) { ?>
						<div class="services-block__item col-lg-4 col-md-4 col-sm-6 col-xs-6 col-6">
					<?php } elseif ($services['columns_count'] == 2) { ?>
						<div class="services-block__item row-two-el col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6">
					<?php } elseif ($services['columns_count'] == 3) { ?>
						<div class="services-block__item col-lg-4 col-md-4 col-sm-6 col-xs-6 col-6">
					<?php } elseif ($services['columns_count'] >= 4 ) { ?>
						<div class="services-block__item col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
					<?php } ?>

							<a href="<?= (!empty($item['link'])) ? $item['link'] : ''; ?>">
								<div class="img" style="background: url(<?= (!empty($item['image']['url'])) ? $item['image']['url'] : get_template_directory_uri() . '/img/home/no-image.png'; ?>) no-repeat 50% / cover;">
										<p class="text element-<?= $i; ?>"><?= (!empty($item['title'])) ? $item['title'] : ''; ?></p>
										<div class="services-block__item-bg"></div>
										<div class="services-block__item-bg-second"></div>
								</div>
							</a>

							
							<div class="background">
								<a data-toggle="modal" data-target="#buyPartsModal" href="#" class="btn-buy element-<?= $i; ?>" id="btn-buy"><?= $services['button_title']; ?></a>
							</div>
							
						</div>
						<?php $i++; ?>
				<?php } ?>
			<?php }?>

		</div>

	</div>
</div>

<script>
	(function($){
		$('#optional-equipment #btn-buy').click((e) => {
			let classesArr = $(e.currentTarget).attr('class').split(' ');
			let currentElement = $('#optional-equipment  .text.' + classesArr[1]); 

			$('.buy-parts-modal .product-buy-context').val(currentElement[0].innerHTML);
		});
	})(jQuery);
</script>