<?php

$text_block = get_field('text_block');

?>

<?php if (!empty($text_block['title']) || !empty($text_block['description']) || !empty($text_block['text_title']) || !empty($text_block['text'])) {?>

	<div class="row align-items-center">
		<div class="col-xl-4 col-lg-4 col-md-4 col-12">

			<div class="title-bl services-block__tit-padd">
				<div class="title-bl__title"><?= (!empty($text_block['title'])) ? $text_block['title'] : ''; ?></div>
				<div class="title-bl__description"><?= (!empty($text_block['description'])) ? $text_block['description'] : ''; ?></div>
			</div>

		</div>
		<div class="col-xl-8 col-lg-8 col-md-8 col-12">

			<div class="text">
				<?= (!empty($text_block['text'])) ? $text_block['text'] : ''; ?>
			</div>

		</div>
	</div>

<?php } ?>