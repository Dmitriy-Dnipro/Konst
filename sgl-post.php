<?php
/**
* Blog single template
*
*/

get_header();
?>

<div id="primary" class="content-area otrasli-page">
	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content">	
			<?php include ('template-parts/top-banner-block.php'); ?>

			<!--  Single section -->	
			<section id="about-block" class="about-block"> 

				<div class="container">

					<!-- Breadscrumbs section -->
					<div class="breadscrumbs"> 
						<?php
						if ( function_exists('yoast_breadcrumb') ) yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						?>
					</div>
					<!-- /Breadscrumbs section -->
					
					<?php 
					$tags = wp_get_post_categories( $post->ID );
					print_r( $tags );

					var_dump(get_category($tags[0]));


					the_post();

					get_template_part( 'template-parts/content', get_post_type() );
					?>

				</div> 
			</section>
			<!-- Single EOF -->

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
