<?php
$title_desc_block = get_field('title_desc_block');

$page = get_page_by_path( 'otrasli-primeneniya' );
$page_title_desc = get_field('title_desc_block', $page->ID);

$application_industries_id = get_field('application_industries_id');
?>
<div class="row align-items-center">
	<div class="col-xl-4 col-lg-4 col-md-4 col-12">

		<div class="title-bl services-block__tit-padd">
			<div class="title-bl__title"><?= (!empty($page_title_desc['title'])) ? $page_title_desc['title'] : ''; ?></div>
			<div class="title-bl__description"><?= (!empty($page_title_desc['description'])) ? $page_title_desc['description'] : ''; ?></div>
		</div>

	</div>
	<div class="col-xl-8 col-lg-8 col-md-8 col-12">
			<div class="links">
				<?php 
				$cat = get_category_by_slug('otrasli-primeneniya'); 
				?>

				<?php 
				$args = array(
					'posts_per_page'   => -1,
					'category_name'    => $cat->name,
					'orderby'          => 'date',
					'order'            => 'DESC',
				);
				$posts_array = get_posts( $args ); 
				?>

				<div id="tabs">
					<ul id="tabs-ul"  class="row desc">
						<?php $i = 1; ?>
						<?php foreach ($posts_array as $post) { ?>
							<li class="col-lg-4">
								<a href="#tabs-<?= $i; ?>"><?= $post->post_title; ?></a>
								<div class="bg"></div>
							</li>
							<?php $i++; ?>
						<?php } ?>
						<?php unset($i, $post);?>
					</ul>
					<div class="row mob" id="otrasli-slider">
						<?php $i = 1; ?>
						<?php foreach ($posts_array as $post) { ?>
								<a href="<?= get_post_permalink( $post->ID ) ;?>"><?= $post->post_title; ?></a>
							<?php $i++; ?>
						<?php } ?>
						<?php unset($i, $post);?>
					</div>
					<?php $i = 1; ?>
					<?php foreach ($posts_array as $post) { ?>
						<div id="tabs-<?= $i; ?>">
							<div class="inner-tab-content">
								<div class="description">
									<h4><?= __('Description', 'industries_page'); ?></h4>
									<div class="text"><?= $post->post_content; ?></div>
								</div>
							</div>
							<?php $equipment_list = get_field('equipment_list', $post->ID); ?>
							<?php if (!empty($equipment_list)) { ?>
								<div class="equipment-list">
									<h4><?= __('List of equipment used in the industry', 'industries_page'); ?></h4>
									<?php foreach ($equipment_list as  $equipment) { ?>
										<a href="<?= $equipment['link']['url']; ?>">
											<div class="link">
												<span class="text"><?= $equipment['link']['title']; ?></span>
												<div class="bg"></div>
											</div>
										</a>
									<?php } ?>
								</div>
							<?php } ?>
						</div>
						<?php $i++; ?>
						<?php $equipment_list = get_field('equipment_list', $post->ID); ?>
					<?php } ?>
					<?php unset($i, $post);?>
				</div>
			</div>
			</div>
		</div>
		<?php wp_reset_postdata(); ?>

<script>
	( function ($) {

		var pageTitle = '<?= get_the_title() ?>';
		var tabsTitlesDesc = $('.otrasli-page-child #tabs .desc li a');
		$(tabsTitlesDesc).each(function () {
			if ( $(this).context.innerText === pageTitle) {
				$(this).parent().addClass('active');
			}
		});
		
		var tabsTitlesMob = $('.otrasli-page-child #tabs .mob a');
		$(tabsTitlesMob).each(function () {
			if ( $(this).context.innerText === pageTitle) {
				$(this).parent().addClass('active');
			}
		});

		var tabElement = $('#tabs li');
		var current_id = '<?= $application_industries_id;?>';
		tabElement.click(function(){
			$(tabElement).removeClass('active');
			$(this).addClass('active');
		});

	})(jQuery);
</script>