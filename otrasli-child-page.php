<?php
/**
* Template Name: Шаблон для страницы Отрасли применения дочерняя
* Template Post Type: page
*
*/

$page = get_page_by_path( 'otrasli-primeneniya' );
$feedback_block = get_field('feedback_block', $page->ID);
$seo_text = get_field('seo_text', $page->ID);
?>
<div class="otrasli-page-child">
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

			<?php include ('template-parts/otrasli-primeneniya-child-block.php'); ?>

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
			<div class="row align-items-center">
				<div class="col-xl-4 col-lg-4 col-md-4 col-12">

					<div class="title-bl truest__tit-padd">
						<div class="title-bl__title"><?= (!empty($feedback_block['title']))? $feedback_block['title'] : ''; ?></div>
						<div class="title-bl__description"><?= (!empty($feedback_block['description'])) ? $feedback_block['description'] : ''; ?></div>
					</div>
				</div>

				<div class="col-xl-8 col-lg-8 col-md-8 col-12">
					<div class="main-form__wrp">
						<?=  (!empty($feedback_block['form_shortcode']))? do_shortcode($feedback_block['form_shortcode']) : '';  ?>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- /Services section EOF -->

	<!--  White feedback block section section -->
	<section class="category main-form" id="white-feedback-block">

		<div class="container">

			<div class="row align-items-center">
				<div class="col-xl-4 col-lg-4 col-md-4 col-12">

					<div class="title-bl services-block__tit-padd">
						<div class="title-bl__title"><?= (!empty($seo_text['title'])) ? $seo_text['title'] : ''; ?></div>
						<div class="title-bl__description"><?= (!empty($seo_text['description'])) ? $seo_text['description'] : ''; ?></div>
					</div>

				</div>
				<div class="col-xl-8 col-lg-8 col-md-8 col-12">

					<h1><?= (!empty($seo_text['text_title'])) ? $seo_text['text_title'] : ''; ?></h1>

					<div id="seo-text" class="calculator-block__text b-description_readmore js-description_readmore">
						<?= (!empty($seo_text['text'])) ? $seo_text['text'] : ''; ?>
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
	<!-- /White feedback block section section -->

</div>

<?php 
$application_industries_id = get_field('application_industries_id');
?>
<script>
	var index = '<?= $application_industries_id; ?>';

	jQuery("document").ready(function() {
		jQuery( "#tabs" ).tabs({ active: index });
	});
</script>

