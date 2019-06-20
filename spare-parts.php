<?php
/**
* Template Name: Шаблон для страницы Запасные части
* Template Post Type: page
*
*/

get_header();
?>

<div id="primary" class="content-area spare-parts">

	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content">	

			<!-- Include top banner -->
			<?php include'template-parts/top-banner-block.php' ?>

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

					<?php include'template-parts/about-section/about-with-right-images.php' ?> 

				</div>
			</section>
			<!-- About section EOF -->	
  
			<!-- Proposition timeline block -->
			<section class="proposition-timeline" id="proposition-timeline">

				<div class="container">

					<?php include'template-parts/sliders/vertical-slider-with-buy-button.php' ?>
				
				</div>
			</section>
			<!-- Proposition timeline block EOF-->

			<!-- Main form section -->
			<section class="main-form main-bg">

				<div class="container">

					<?php include'template-parts/feedback/general-form.php' ?>

				</div>
			</section>
			<!-- Main form section EOF -->

			

		</main>	
	</div>
</div><!-- #primary -->

<?php
get_footer();
