<?php
/**
* Template Name: Шаблон для страницы Отрасли применения
* Template Post Type: page
*
*/

get_header();
?>

<div id="primary" class="content-area otrasli-page">
	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content">	
			<?php include ('template-parts/top-banner-block.php'); ?>

			<!--  Calculator section -->	
			<section id="about-block" class="about-block"> 

				<div class="container">

					<!-- Breadscrumbs section -->
					<div class="breadscrumbs"> 
						<?php
						if ( function_exists('yoast_breadcrumb') ) yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						?>
					</div>
					<!-- /Breadscrumbs section -->
					
					<?php include ('template-parts/otrasli-primeneniya-block.php'); ?>

				</div> 

				<div class="calculator-block__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-first.svg" alt="" class="img-fluid desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-first.svg" alt="" class="img-fluid tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-factory-backg.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!-- /Calculator section EOF -->

			<!--  Services section -->	
			<section class="services-block main-bg">
				<div class="container">
					<?php include ('template-parts/feedback/general-form.php'); ?>
				</div>
			</section>
			<!-- /Services section EOF -->

			<!--  White feedback block section section -->
			<section class="category main-form" id="white-feedback-block">

				<div class="container">

					<?php include('template-parts/seo-text-section.php') ?>
				</div>
				<div class="truest__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-second.svg" alt="" class="desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-second.svg" alt="" class="tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-car-backg.svg" alt="" class="mob">
				</div>
				
			</section>
			<!-- /White feedback block section section -->

		</main>	
	</div>
</div><!-- #primary -->


<script>
	jQuery("document").ready(function() {
		jQuery( "#tabs" ).tabs();
	});
</script>


<?php
get_footer();
