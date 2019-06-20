<?php 

$top_banner = get_field('main_categories');

?>

<div class="row no-gutter">
	<div class="col-xl-7 col-lg-7 col-md-12">

		<div class="main-bl-text">

			<img src="<?= get_template_directory_uri(); ?>/img/home/main-nl-line-second.svg" alt="Lines back" class="main-bl-text__line desc" />
			<img src="<?= get_template_directory_uri(); ?>/img/home/main-nl-line-second-m.svg" alt="" class="main-bl-text__line tab" />

			<?php $i = 0;?>
			<?php foreach($top_banner['categories'] as $category) { ?>
				<?php 
				$i++; 
				$category_url = get_post_permalink($category->ID);
				?>
				<a href="<?= $category_url; ?>" id="text-item<?= $i; ?>" class="main-bl-text__item"><?= $category->post_title; ?></a>
			<?php } ?>
			<?php unset($i); ?>

		</div>

	</div>
	<div class="col-xl-5 col-lg-5 col-md-12">
		<div class="main-bl-img">
			<?php $i = 0; ?>
			<?php foreach($top_banner['images'] as $category) { ?>
				<?php $i++; ?>
				<div id="main-bl-img<?= $i; ?>" class="main-bl-img__wrp static" style="background: url(<?= $category['url']; ?>)no-repeat 50% / contain;">
				</div>

			<?php } ?>
			<?php unset($i); ?>
		</div>

	</div>
	<a href="#about-block" class="down-button"></a>
</div>
