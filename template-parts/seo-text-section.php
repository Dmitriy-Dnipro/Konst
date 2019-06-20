<?php

$seo_text = get_field('seo_text');

?>

<?php if (!empty($seo_text['title']) || !empty($seo_text['description']) || !empty($seo_text['text_title']) || !empty($seo_text['text'])) {?>

	<div class="row align-items-center">
		<div class="col-xl-4 col-lg-4 col-md-4 col-12">

			<div class="title-bl services-block__tit-padd">
				<div class="title-bl__title"><?= (!empty($seo_text['title'])) ? $seo_text['title'] : ''; ?></div>
				<div class="title-bl__description"><?= (!empty($seo_text['description'])) ? $seo_text['description'] : ''; ?></div>
			</div>

		</div>
		<div class="col-xl-8 col-lg-8 col-md-8 col-12">

			<h1><?= (!empty($seo_text['text_title'])) ? $seo_text['text_title'] : ''; ?></h1>

			<div id="seo-text" class="calculator-block__text b-description_readmore js-description_readmore">
				<?= (!empty($seo_text['text'])) ? $seo_text['text'] : ''; ?>
			</div>

		</div>
	</div>

<?php } ?>