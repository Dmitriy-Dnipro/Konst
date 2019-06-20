<?php
/**
* Template Name: Шаблон для Инерционные пылеуловители
* Template Post Type: page
*
*/

get_header();
?>
<?php

/*$slider_shortcode = get_field('slider_shortcode');*/

$services = get_field('services');
$advantages = get_field('advantages');
$library = get_field('library');
$seo_text = get_field('seo_text');

?>


<div id="primary" class="content-area dust-collectors">
	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content">	

			<!-- Include top banner -->
			<?php include'template-parts/main-top-block/without-elements.php' ?>

			<!-- About section -->	
			<section class="about-block" id="about-block">

				<div class="container">

					<!-- Breadscrumbs section -->
					<div class="breadscrumbs">
						<?php
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						}
						?>
					</div>
					<!-- /Breadscrumbs section -->

					<?php include'template-parts/about-section/about-with-vertical-slider.php' ?> 

				</div>

				<div class="about-block__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-first.svg" alt="" class="img-fluid desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-first.svg" alt="" class="img-fluid tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-factory-backg.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!-- About section EOF -->	

			<?php $form_shortcode = get_field('form_shortcode'); ?>
			<!--  Services section -->	
			<section class="services-block  <?= (empty($form_shortcode['shortcode'])) ? 'main-bg-top with-fb' : ''; ?>" id="types-of-equipment" <?= (empty($form_shortcode['shortcode'])) ? 'style="padding-bottom:0px"' : ''; ?>>

				<div class="container">

					<?php include'template-parts/services-block.php' ?> 

				</div>
				<?php if (empty($form_shortcode['shortcode'])) { ?>
					
				<?php } else { ?>
					<div class="advantages-block__bg">
						<img src="<?= get_template_directory_uri(); ?>/img/home/blue-bg-lg.png" class="img-fluid desc" />
						<img src="<?= get_template_directory_uri(); ?>/img/home/blue-bg-md.png" class="img-fluid tab" />
						<img src="<?= get_template_directory_uri(); ?>/img/home/blue-bg-sm.png" alt="" class="img-fluid mob">
					</div>
				<?php } ?>
			</section>
			<!-- /Services section EOF -->

			<?php if (!empty($form_shortcode['shortcode'])) { ?>
				<!-- Include feedback -->
				<section class="feedback-block first">
					<div class="container">

						<?php include'template-parts/feedback/form-without-text.php' ?> 

						<div class="feedback-block__bg"></div>
						<div class="feedback-block__white-bg">
							<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-first.svg" alt="" class="img-fluid desc">
							<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-first.svg" alt="" class="img-fluid tab">
							<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-factory-backg.svg" alt="" class="img-fluid mob">
						</div>
					</div>
				</section>
			<?php } ?>

			<!--  Advantages section -->	
			<section class="advantages-block second" id="advantages">

				<div class="container">

					<div class="row no-gutters align-items-md-center">
						<div class="col-xl-4 col-lg-4 col-md-4 col-12">

							<div class="title-bl advantages-block__tit-padd">
								<div class="title-bl__title"><?= $advantages['title']; ?></div>
								<div class="title-bl__description"><?= $advantages['description']; ?></div>
							</div>

						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-12 advantages-block__slider">
							<div class="slider-for">
								<?php foreach( $advantages['slider'] as $item) {?>
									<div class="item">
										<div class="img" style="background: url('<?= (!empty($item['image']['url'])) ? $item['image']['url']: get_template_directory_uri() . '/img/home/no-image.png'; ?>') no-repeat 50% 50% / cover;"></div>
										<div class="slider-bg"></div>
										<div class="slider-text">
											<?= $item['title']; ?>
										</div>
									</div>
								<?php } ?>
							</div>


							<div class="slider-nav">


								<?php foreach ($advantages['slider'] as $item) { ?>

									<div class="item">
										<div class="img" style="background: url('<?= (!empty($item['image']['url'])) ? $item['image']['url']: get_template_directory_uri() . '/img/home/no-image.png'; ?>')no-repeat 50% 50% / cover">
											<div class="slider-bg"></div>
										</div>
										<div class="slider-text">
											<?= $item['title']; ?>
										</div>
									</div>
								<?php } ?>

							</div>
						</div>
					</div>

				</div>

				<div class="advantages-block__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-straight.svg" class="img-fluid desc" />
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-straight.svg" class="img-fluid tab" />
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-straight.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!--  Advantages section -->

			<!--  Feedback section section -->
			<section class="feedback-block second">
				<div class="container">

					<div class="row align-items-center">
						<div class="col-xl-4 col-lg-4 col-md-4 col-12">

							<div class="title-bl services-block__tit-padd">
								<div class="title-bl__title"><?= $library['title']; ?></div>
							</div>

						</div>
						<div class="right-content col-xl-8 col-lg-8 col-md-8 col-12">
							<div class="text-block row">
								<div class="form-title col-lg-10"><?= $library['text']; ?></div>
								<?php if (!empty($library['list'])) { ?>
									<div class="col-lg-10">
										<ol>
											<?php $i = 0; ?>
											<?php foreach ($library['list'] as $item) { ?>
												<?php $i++; ?>
												<li><?= ($i < 10) ? '0'.$i : $i; ?>. <?= $item['title']; ?></li>
											<?php } ?>
											<?php unset($i); unset($item); ?>
										</ol>
									</div>
								<?php } ?>
								<div class="col-lg-10">
									<?= do_shortcode($library['shortcode_library']); ?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="feedback-block__bg"></div>
				<div class="feedback-block__white-bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-first.svg" alt="" class="img-fluid desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-first.svg" alt="" class="img-fluid tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-factory-backg.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!-- /Feedback section section -->

			<!-- Seo-text section -->
			<section class="seo-text-block white-bg" id="advantages">

				<div class="container">

					<div class="row no-gutters align-items-md-center">
						<div class="col-xl-4 col-lg-4 col-md-4 col-12">

							<div class="title-bl advantages-block__tit-padd">
								<div class="title-bl__title"><?= $seo_text['title']; ?></div>
								<div class="title-bl__description"><?= $seo_text['description']; ?></div>
							</div>

						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-12 advantages-block__slider">
							<h1><?= $seo_text['text_title']; ?></h1>

							<div id="seo-text" class="calculator-block__text b-description_readmore js-description_readmore">
								<?= $seo_text['text']; ?>
							</div>
						</div>
					</div>

				</div>

				<div class="advantages-block__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-straight.svg" class="img-fluid desc" />
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-straight.svg" class="img-fluid tab" />
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-straight.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!--/Seo-text section -->

		</main>	
	</div>
</div><!-- #primary -->



<!-- Modal block video -->
<?php if (!empty($about_us_block['video'])) { ?>
	<div class="about-video modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="43" height="43" rx="5" fill="url(#paint0_linear)"/>
							<path d="M15 15L27.8619 27.9326" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M15.1387 28L28.0006 15.0674" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<defs>
								<linearGradient id="paint0_linear" x1="0.447916" y1="5.25437" x2="44.0927" y2="7.92483" gradientUnits="userSpaceOnUse">
									<stop stop-color="#263EBA"/>
									<stop offset="1" stop-color="#2D9CDB"/>
								</linearGradient>
							</defs>
						</svg>			
					</button>
				</div>

				<div class="modal-body">

					<!-- <video src="img/home/Nebula Space Interstellar Background.mp4"></video> -->

					<video width="100%" height="100%" controls="controls" poster="">
						<source src="<?= $about_us_block['video']; ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
						</video>

					</div>
				</div>
			</div>
		</div>
	<?php } ?>

	<?php
	get_footer();
