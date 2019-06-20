<?php

$about_us_block = get_field('about_us_block');
$image_slider = get_field('image_slider');
?>

<?php if ( !empty($about_us_block['title']) || !empty($about_us_block['description']) || !empty($about_us_block['text']) || !empty ($image_slider) ) { ?>

	<div class="row align-items-center">
		<div class="title-block col-xl-4 col-lg-4 col-md-4 col-12">

			<div class="title-bl about-block__tit-padd">
				<h2 class="title-bl__title"><?= (!empty($about_us_block['title'])) ? $about_us_block['title'] : ''; ?></h2>
				<div class="title-bl__description"><?= (!empty($about_us_block['description'])) ? $about_us_block['description'] : ''; ?></div>
			</div>

		</div>
		<div class="text-block col-xl-8 col-lg-8 col-md-8 col-12">

			<?php if (!empty($about_us_block['text'])) { ?>
				<div class="text">
					<div class="about-block__text b-description_readmore js-description_readmore">
					<?= $about_us_block['text']; ?>
				</div>
				</div>
			<?php } ?>

			<div class="vertical-slider-images">

				<?php if (!empty ($image_slider)) { ?>
					<?php foreach ($image_slider as $image) { ?>
						<div class="slide">
							<div class="img" style="background: url('<?= $image['url']?>') no-repeat 50% / cover;"></div>
						</div>
					<?php } ?>
				<?php } ?>	

			</div>
	</div>
</div>

<?php } ?>