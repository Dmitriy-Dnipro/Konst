
<div class="row align-items-center">
	<div class="col-xl-4 col-lg-4 col-md-4 col-12">

		<noindex>
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
					<ul class="row">
						<?php $i = 1; ?>
						<?php foreach ($posts_array as $post) { ?>
							<li><a class="col-lg-4" href="#tabs-<?= $i; ?>"><?= $post->post_title; ?></a></li>
							<?php $i++; ?>
						<?php } ?>
						<?php unset($i, $post);?>
					</ul>
					<?php $i = 1; ?>
					<?php foreach ($posts_array as $post) { ?>
						<div id="tabs-<?= $i; ?>">
							<div class="description">
								<h4><?= __('Description', 'industries_page'); ?></h4>
								<div class="text"><?= $post->post_content; ?></div>
							</div>
							<?php $equipment_list = get_field('equipment_list', $post->ID); ?>
							<?php if (!empty($equipment_list)) { ?>
								<h4><?= __('List of equipment used in the industry', 'industries_page'); ?></h4>
								<?php foreach ($equipment_list as  $equipment) { ?>
									<a href="<?= $equipment['link']['url']; ?>"><?= $equipment['link']['title']; ?></a>
								<?php } ?>
							<?php } ?>
						</div>
						<?php $i++; ?>
						<?php $equipment_list = get_field('equipment_list', $post->ID); ?>
					<?php } ?>
					<?php unset($i, $post);?>
				</div>
			</div>
			<noindex>

			</div>
		</div>
