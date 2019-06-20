<?php

$feedback_block = get_field('feedback_block');

?>

<?php if(!empty($feedback_block['title']) || !empty($feedback_block['description']) || !empty($feedback_block['form_shortcode'])) { ?>

	<div class="row align-items-center">
		<div class="col-xl-4 col-lg-4 col-md-4 col-12">

			<div class="title-bl truest__tit-padd">
				<div class="title-bl__title"><?= (!empty($feedback_block['title']))? $feedback_block['title'] : ''; ?></div>
				<div class="title-bl__description"><?= (!empty($feedback_block['description'])) ? $feedback_block['description'] : ''; ?></div>
			</div>
		</div>

		<div class="col-xl-8 col-lg-8 col-md-8 col-12">
			<div class="main-form__wrp">
				<?=  (!empty($feedback_block['form_shortcode']))? do_shortcode($feedback_block['form_shortcode']) : '';  ?>
			</div>
		</div>

	</div>

<?php } ?>