<?php 

$image_slider = get_field('image_slider');
$about_work = get_field('about_work');

?>


<?php if (!empty($about_work['title']) || !empty($about_work['description']) || !empty($about_work['image']) ) { ?>
	<div class="row align-items-center about-block-with-right-images">
		<div class="title-block col-lg-4 col-md-4 col-sm-12 col-12">

			<div class="title-bl services-block__tit-padd">
				<div class="title-bl__title"><?= (!empty($about_work['title'])) ? $about_work['title'] : ''; ?></div>
				<div class="title-bl__description"><?= (!empty($about_work['description'])) ? $about_work['description'] : ''; ?></div>
			</div>
		</div>

		<div class="col-lg-offset-4 col-md-offset-4 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

			<div class="row">
				<div class="image-block col-lg-5 col-md-12 col-sm-7 col-7">
					<div class="row">
						<?php if(!empty($about_work['image']) && count($about_work['image']) === 2) { ?>
							<?php foreach($about_work['image'] as $image) { ?>
									<div class="two-images" style="background: url(<?= $image['url']; ?>)no-repeat 50% / cover;"></div>
							<?php } ?>
						<?php }?>

						<?php if(!empty($about_work['image']) && count($about_work['image']) === 1) { ?>
							<?php foreach($about_work['image'] as $image) { ?>
								
									<div class="one-image" style="background: url(<?= $image['url']; ?>)no-repeat 50% / cover;"></div>
								
							<?php } ?>
						<?php }?>
					</div>
				</div>

				<div class="text-block col-lg-7">
					<?php if (!empty($about_work['text'])) { ?>
						<div class="about-block__text b-description_readmore js-description_readmore">
							<?= $about_work['text']; ?>
						</div>
					<?php } ?>
				</div>
			</div>

		</div>


	</div>
	<?php } ?>