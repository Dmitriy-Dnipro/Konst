<?php 

$top_banner = get_field('main_categories');
$lang = pll_current_language();
?>


<div class="row no-gutter many-elements">
	<div class="col-xl-7 col-lg-7 col-md-12">
		<div class="main-bl-text-8">
			<img src="<?= get_template_directory_uri(); ?>/img/home/pylegaz-nl-line-8.svg" alt="" class="main-bl-text__line desc">
			<img src="<?= get_template_directory_uri(); ?>/img/home/pylegaz-nl-line-m.svg" alt="" class="main-bl-text__line tab">

			<?php $i = 0;?>
			<?php foreach($top_banner['categories'] as $category) { ?>
				<?php 
				$i++; 
				$category_url = get_post_permalink($category->ID);
				?>
				<a href="<?= $category_url; ?>" id="text-item<?= $i; ?>" class="main-bl-text-8__item"><?= $category->post_title; ?></a>
			<?php } ?>
			<?php unset($i); ?>
		</div>

		<?php if($lang == 'ru'){?>
			<a id="go-to-calc" class="main-block__button" href="#calc-block" onclick="$('.open-calc-button').trigger('click');">
				Подбор оборудования
			</a>
		<?}else if($lang == 'uk'){?>
			<a id="go-to-calc" class="main-block__button" href="#calc-block" onclick="$('.open-calc-button').trigger('click');">
				Підбір обладнання
			</a>
		<?}?>
		<!--
			<div class="main-block__button" id="params">
				<a id="fb-block-id" href="#fb-block">Чертежи</a>
			</div>
		-->

		<?php if($lang == 'ru'){?>
			<a class="main-block__button"  id="fb-block-id" href="#fb-block">Чертежи</a>
		<?}else if($lang == 'uk'){?>
			<a class="main-block__button"  id="fb-block-id" href="#fb-block">Креслення</a>
		<?}?>

	</div>
	<div class="col-xl-5 col-lg-5 col-md-12">
		<div class="main-bl-img">
			<?php $i = 0; ?>
			<?php foreach($top_banner['images'] as $category) { ?>
				<?php $i++; ?>
				<div id="main-bl-img<?= $i; ?>" class="main-bl-img__wrp static" style="background: url(<?= $category['url']; ?>)no-repeat 0% 0% / contain;">
				</div>

			<?php } ?>
			<?php unset($i); ?>
		</div>

	</div>
	<!--<a href="#calc-block" class="down-button"></a>-->
</div>
