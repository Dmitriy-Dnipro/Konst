<?php
/**
* Template Name: Шаблон для страницы Компрессоры Airpol
* Template Post Type: page
*
*/

get_header();
?>

<div id="primary" class="content-area compressors-airpol">

	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content">	


			<!-- About section -->	
			<section class="about-block main-bg-top" id="about-block">
				<div class="container">

					<!-- Breadscrumbs section -->
					<div class="breadscrumbs">
						<?php
						if ( function_exists('yoast_breadcrumb') ) yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						?>
					</div>
					<!-- /Breadscrumbs section -->

					<?php include'template-parts/services/services-with-text.php' ?> 

				</div>
			</section>
			<!-- About section EOF -->	

			<!-- Slider section -->	
			<section class="slider-about-block" id="about-block">

				<div class="container">

					<?php include'template-parts/about-section/about-with-vertical-slider.php' ?> 

				</div>

				<div class="about-block__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-first.svg" alt="" class="img-fluid desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-first.svg" alt="" class="img-fluid tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-factory-backg.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!-- Slider section EOF -->	

			<!-- Proposition timeline block -->
			<section class="proposition-timeline main-bg">

				<div class="container">

					<?php include'template-parts/work-stages-block-without-bg.php' ?>
				
				</div>
			</section>
			<!-- Proposition timeline block EOF-->
			
			<!-- Feedback form section -->	
			<section class="main-form-block" id="about-block">

				<div class="container">

					<?php include'template-parts/feedback/general-form.php' ?> 

				</div>

				<div class="about-block__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-first.svg" alt="" class="img-fluid desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-first.svg" alt="" class="img-fluid tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-factory-backg.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!-- Feedback form section EOF -->	

			<!-- Seo-text section -->
			<section class="seo-text-block main-bg" id="seo-text-block">
				<div class="container">
					
					<?php include'template-parts/seo-text-section.php' ?>
					
				</div>
			</section>
			<!--/Seo-text section -->

		</main>	
	</div>
</div><!-- #primary -->

<?php
get_footer();
