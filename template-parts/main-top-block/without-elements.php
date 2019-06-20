<?php 

//$top_banner = get_field('main_categories');
$top_block_one_image = get_field('top_block_one_image');
$lang = pll_current_language();
?>


<div class="row no-gutter main-block no-elements">
	<div class="container">
		<div class="row">
			<div class="top-text col-xl-8 col-lg-8 col-md-12 col-12">

				<div class="main-top-block">
					<h1 class="title-bl__title"><?= (!empty($top_block_one_image['title'])) ? $top_block_one_image['title'] : ''; ?></h1>
					<div class="text"><?= !empty($top_block_one_image['text']) ? $top_block_one_image['text'] : ''; ?></div>

					

		<?php 
		// global $wp;  
		// $current_url = home_url(add_query_arg(array($_GET), $wp->request));
		if (is_page(110) || is_page(2975)) {
		?>
					<a id="go-to-calc" class="main-block__button" href="#calc-block" onclick="$('.open-calc-button').trigger('click');">

							<?php if($lang == 'ru'){
								echo 'Подбор оборудования';
							}else if($lang == 'uk'){
								echo 'Пiдбiр обладнання';
							}?>
					</a>
			<?php } ?>



					<?php if (!empty($top_block_one_image['button']['block_id'])) { ?>
						<div class="main-block__button">
							<a id="fb-block-id" href="#<?= (!empty($top_block_one_image['button']['block_id'])) ? $top_block_one_image['button']['block_id'] : ''; ?>" ><?= (!empty($top_block_one_image['button']['name'])) ? $top_block_one_image['button']['name'] : ''; ?></a>
						</div>
					<?php } ?>

				</div>

			</div>
			<div class="top-image col-xl-4 col-lg-4 col-md-12 col-12">
				<div class="main-bl-img">

					<div id="main-bl-img<?= $i; ?>" class="main-bl-img__wrp static" style="background: url(<?= $top_block_one_image['image']['url']; ?>)no-repeat 50% / contain;">
					</div>

				</div>

			</div>
		</div>
		<a  href="#about-block" class="down-button"></a>
	</div>
</div>
