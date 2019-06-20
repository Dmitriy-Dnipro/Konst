<?php
 $about_us_block = get_field('about_us_block');
?>
<div class="row align-items-center">
	<div class="col-xl-4 col-lg-4 col-md-4 col-12">

		<div class="title-bl about-block__tit-padd">
			<h2 class="title-bl__title"><?= (!empty($about_us_block['title'])) ? $about_us_block['title'] : ''; ?></h2>
			<div class="title-bl__description"><?= (!empty($about_us_block['description'])) ? $about_us_block['description'] : ''; ?></div>
		</div>

	</div>
	<div class="col-xl-8 col-lg-8 col-md-8 col-12">

		<div class="about-block__video" data-toggle="modal" data-target="#exampleModal">
			<img src="<?= (!empty($about_us_block['image'])) ? $about_us_block['image']['url'] : ''; ?>" alt="<?= $about_us_block['image']['url']; ?>" class="img-fluid" />
		</div>

	</div>
	<div class="col-xl-8 offset-xl-4 col-lg-8 offset-lg-4 col-md-8 offset-md-4 col-12">

		<?php if (!empty($about_us_block['text'])) { ?>
			<div id="about-us" class="about-block__text b-description_readmore js-description_readmore">
				<?= $about_us_block['text']; ?>
			</div>
		<?php } ?>
	</div>
</div>

