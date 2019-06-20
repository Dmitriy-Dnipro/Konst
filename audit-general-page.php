<?php
/**
* Template Name: Шаблон страницы Аудит (общая)
* Template Post Type: page
*
*/

get_header();
?>
<?php

$advantages = get_field('advantages');
$testimonials = get_field('testimonials');
?>
<div id="primary" class="content-area audit-page">
	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content" id="audit-page">	

			<!-- Top banner section -->	
			<?php include ('template-parts/top-banner-block.php'); ?>
			<!-- Top banner section EOF -->	

			<!-- About section -->	
			<section class="about-block" id="about-block">
				<div class="container">

					<!-- Breadscrumbs section -->
					<div class="breadscrumbs">
						<?php
						if ( function_exists('yoast_breadcrumb') ) yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						?>
					</div>
					<!-- /Breadscrumbs section -->

					<?php include'template-parts/about-section/about-with-horizontal-slider-second.php' ?> 

				</div>

				<div class="about-block__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-first.svg" alt="" class="img-fluid desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-first.svg" alt="" class="img-fluid tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-factory-backg.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!-- About section EOF -->	

			<!--  Services section -->	
			<section class="services-block main-bg">

				<div class="container">

					<?php include'template-parts/services-block.php' ?> 
				</div>
			</section>
			<!-- /Services section EOF -->	

			<!--  Advantages section -->	
			<section class="advantages-block" id="advantages">

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

				<div class="truest__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-second.svg" alt="" class="desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-second.svg" alt="" class="tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-car-backg.svg" alt="" class="mob">
				</div>
			</section>
			<!--  Advantages section -->

			<!--  Reviews section section -->
			<section class="reviews-block main-bg">

				<div class="container">
					<?php include('template-parts/feedback/general-form.php') ?>
				</div>
			</section>
			<!-- /Reviews section section -->

			<!--  White feedback block section section -->
			<!--<section class="category main-form" id="white-feedback-block">

				<div class="container">

					<?php include('template-parts/feedback/general-form.php') ?>
				</div>
				<div class="truest__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-second.svg" alt="" class="desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-second.svg" alt="" class="tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-car-backg.svg" alt="" class="mob">
				</div>
				
			</section>-->
			<!-- /White feedback block section section -->
		</main>	
	</div>
</div><!-- #primary -->


<?php
get_footer();
