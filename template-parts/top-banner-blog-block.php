<?php

$slider_shortcode = get_field('slider_shortcode', 15);

?>

<div class="top-banner">
	<?= do_shortcode($slider_shortcode); ?>
</div>



