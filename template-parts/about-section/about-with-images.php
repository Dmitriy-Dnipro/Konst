<?php 

$image_slider = get_field('image_slider');
$about_work = get_field('about_work');

?>


<?php if (!empty($about_work['title']) || !empty($about_work['description']) || !empty($about_work['image']) ) { ?>
	<div class="row align-items-center">
		<div class="col-xl-4 col-lg-4 col-md-4 col-12">

			<div class="title-bl services-block__tit-padd">
				<div class="title-bl__title"><?= (!empty($about_work['title'])) ? $about_work['title'] : ''; ?></div>
				<div class="title-bl__description"><?= (!empty($about_work['description'])) ? $about_work['description'] : ''; ?></div>
			</div>
		</div>

		<div class="col-xl-8 col-lg-8 col-md-8 col-12">

			<div class="image-block">
				<div class="row">
					<?php if(!empty($about_work['image']) && count($about_work['image']) === 2) { ?>
						<?php foreach($about_work['image'] as $image) { ?>
							<div class="img-blk col-lg-6 col-xs-6 col-6"> 
								<div class="image" style="background: url(<?= $image['url']; ?>)no-repeat 50% / cover;height: 230px;"></div>
							</div>
						<?php } ?>
					<?php }?>

					<?php if(!empty($about_work['image']) && count($about_work['image']) === 1) { ?>
						<?php foreach($about_work['image'] as $image) { ?>
							<div class="col-lg-12">
								<div class="image" style="background: url(<?= $image['url']; ?>)no-repeat 50% / cover;margin: 0 auto;max-width: 50%;height: 230px;"></div>
							</div>
						<?php } ?>
					<?php }?>
				</div>
			</div>

			<div class="text-block">
				<?php if (!empty($about_work['text'])) { ?>
					<div class="about-block__text b-description_readmore js-description_readmore">
						<?= $about_work['text']; ?>
					</div>
				<?php } ?>
			</div>

		</div>


	</div>
<?php } ?>