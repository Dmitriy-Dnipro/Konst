<?php
$truest = get_field('truest');
?>

<?php if (empty($truest["images_block"])) { 
	$truest_front = get_field('truest', get_option( 'page_on_front' )); 
	$truest["images_block"] = $truest_front["images_block"];
}?>


<?php if ( !empty($truest['title']) || !empty($truest['description']) || !empty($truest['images_block']) 
|| !empty($truest_front['title']) || !empty($truest_front['description']) || !empty($truest_front['images_block']) ) { ?>

	<div class="row align-items-center">

		<div class="col-xl-4 col-lg-4 col-md-4 col-12">
			<div class="title-bl truest__tit-padd">
				<h2 class="title-bl__title"><?= (!empty($truest['title'])) ? $truest['title'] : $truest_front['title']; ?></h2>
				<div class="title-bl__description"><?= (!empty($truest['description'])) ? $truest['description'] : $truest_front['description']; ?></div>
			</div>
		</div>

		<div class="col-xl-8 col-lg-8 col-md-8 col-12">

			<div class="partner-slider swiper-container">

				<div class="swiper-wrapper">
					<?php foreach($truest['images_block'] as $image) {?>
						<div class="swiper-slide">
							<img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
						</div>
					<?php } ?>
					<?php
					unset($image);
					?>
				</div>

				<!-- Add Pagination	<div class="swiper-pagination"></div> -->

				<!-- Add Arrows -->

				<div class="swiper-button-prev">
					<svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M7 1L1 7.5L7 14" stroke="#1423F0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>			
				</div>

				<div class="swiper-button-next">
					<svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 14L7 7.5L1 1" stroke="#1423F0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>		
				</div>

			</div>

		</div>
	</div>

<?php } ?>