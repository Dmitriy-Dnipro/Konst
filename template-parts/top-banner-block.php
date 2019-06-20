<?php

$slider_shortcode = get_field('slider_shortcode');

?>

<div class="top-banner">
	<?= do_shortcode($slider_shortcode); ?>
</div>