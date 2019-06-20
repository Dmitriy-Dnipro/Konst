<?php
/**
* Template Name: Шаблон для страницы Сервисы Пылегазоочистка
* Template Post Type: page
*
*/

get_header();
?>

<div id="primary" class="content-area pylegaz-service">

	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content">	

			<!-- Include top banner -->
			<?php include'template-parts/top-banner-block.php' ?>

			<!-- About section -->	
			<section class="about-block main-bg-top" id="service-block">
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
			</section>
			<!-- About section EOF -->	
			
			<!-- Services block -->
			<section class="services-tabs-block" id="services-tabs-block">

				<div class="container">

					<?php include'template-parts/tabs/4-vertical-tabs-block.php' ?>
					
					
				</div>
				<div class="truest__bg"> 
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-second.svg" alt="" class="desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-second.svg" alt="" class="tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-car-backg.svg" alt="" class="mob"> 
				</div>
			</section>
			<!-- Services block EOF-->

			<!-- Main form section -->
		<!--	<section class="main-form main-bg-top">
				<div class="container">
					<?php include'template-parts/feedback/general-form.php' ?>
				</div>
			</section>
		-->
			<section class="feedback-m-block main-bg" id="service-block">
				<div class="container">
					<?php include'template-parts/feedback/general-form.php' ?> 
				</div>
			</section>

			<!--  White feedback block section section -->
			<section class="category main-form" id="white-feedback-block">

				<div class="container">

					<?php include'template-parts/seo-text-section.php' ?>

					<div class="truest__bg">
						<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-second.svg" alt="" class="desc">
						<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-second.svg" alt="" class="tab">
						<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-car-backg.svg" alt="" class="mob">
					</div>
				</div>
			</section>
			<!-- /White feedback block section section -->

		</main>	
	</div>
</div><!-- #primary -->

<?php
get_footer();
