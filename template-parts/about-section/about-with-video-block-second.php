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
	
	<div class="col-xl-8  col-lg-8 4 col-md-8 col-12">

		<?php if (!empty($about_us_block['text'])) { ?>
			<div id="about-us" class="">
				<?= $about_us_block['text']; ?>
			</div>
		<?php } ?>
	</div>
</div>

