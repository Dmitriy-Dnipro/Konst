<?php
/**
* Template Name: Шаблон для страницы Винтовые компрессоры
* Template Post Type: page
*
*/

get_header();
?>

<div id="primary" class="content-area pylegaz-service">

	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content">	

			<!-- Categories section -->	
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
			<!-- Categories section EOF -->	

			<!-- About with one image section -->	
			<section class="about-block" id="about-block">

				<div class="container">

					<?php include'template-parts/about-section/about-with-right-images.php' ?> 

				</div>

				<div class="about-block__bg">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/lg-factory-first.svg" alt="" class="img-fluid desc">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/md-factory-first.svg" alt="" class="img-fluid tab">
					<img src="<?= get_template_directory_uri(); ?>/img/home/gray-backgrounds/sm-factory-backg.svg" alt="" class="img-fluid mob">
				</div>
			</section>
			<!-- About with one image section EOF -->	

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
