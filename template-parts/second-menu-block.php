<?php

$landing_menu = get_field('second_menu'); 

?>

<div class="landing-menu desc" id="landing-menu">
	<div class="container text-center">
		<?php foreach ($landing_menu as $item) { ?>
			<a class="landing-menu__item" href="#<?=$item['block_id']; ?>"><?= $item['name']; ?></a>
		<?php } ?>
	</div>
</div>


<div class="landing-menu mob" id="landing-menu">
	<div class="container" id="landing-menu-swipe">
		<?php foreach ($landing_menu as $item) { ?>
			<a class="landing-menu__item" href="#<?=$item['block_id']; ?>"><?= $item['name']; ?></a>
		<?php } ?>
	</div>
</div>