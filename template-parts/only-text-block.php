<?php

$text = get_field('add_text');

?>
<?php if (!empty($text)) { ?>
	<div class="row align-items-center text-block-in-component">
		<div class="col-xl-4 col-lg-4 col-md-4 col-12">

		</div>
		<div class="col-xl-8 col-lg-8 col-md-8 col-12 ">
			<?= (!empty($text)) ? $text : ''; ?>
		</div>
	</div>
<?php } ?>