<?php

$form_shortcode = get_field('form_shortcode');

?>

<?php if (!empty($form_shortcode['title']) || !empty($form_shortcode['shortcode']) ) { ?>

	<div class="row align-items-center">
		<div class="col-xl-4 col-lg-4 col-md-4 col-12">

			<div class="title-bl services-block__tit-padd">
				<div class="title-bl__title"><?= (!empty($form_shortcode['title'])) ? $form_shortcode['title'] : ''; ?></div>
			</div>

		</div>
		<div class="right-content col-xl-8 col-lg-8 col-md-8 col-12">
			<div class="text-block row">
				<div class="col-lg-10">
					<?= (!empty($form_shortcode['shortcode'])) ? do_shortcode($form_shortcode['shortcode']) : ''; ?>
				</div>
			</div>
		</div>
	</div>

<?php } ?>