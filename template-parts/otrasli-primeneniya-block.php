<?php
$title_desc_block = get_field('title_desc_block');
$lang = pll_current_language();
?>
<div class="row align-items-center">
	<div class="col-xl-4 col-lg-4 col-md-4 col-12">

		<div class="title-bl services-block__tit-padd">
			<div class="title-bl__title"><?= (!empty($title_desc_block['title'])) ? $title_desc_block['title'] : ''; ?></div>
			<div class="title-bl__description"><?= (!empty($title_desc_block['description'])) ? $title_desc_block['description'] : ''; ?></div>
		</div>

	</div>
	<div class="col-xl-8 col-lg-8 col-md-8 col-12">

		<noindex>
			<div class="links">
				<?php 
				  if($lang == 'ru'){
					$cat = get_category_by_slug('otrasli-primeneniya'); 
				  }else if($lang == 'uk'){
					$cat = get_category_by_slug('galuzi-zastosuvannya');
				  }
					
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
					<ul id="tabs-ul" class="row desc">
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
								<?php if($lang == 'ru'){?>
									<h4><?= __('Описание', 'industries_page'); ?></h4>
								<?}else if($lang == 'en'){?>
									<h4><?= __('Description', 'industries_page'); ?></h4>
								<?}else if($lang == 'uk'){?>
									<h4><?= __('Опис', 'industries_page'); ?></h4>
								<?}?>
									<div class="text"><?= $post->post_content; ?></div>
								</div>
							</div>
							<?php $equipment_list = get_field('equipment_list', $post->ID); ?>
							<?php if (!empty($equipment_list)) { ?>
								<div class="equipment-list">
									<?php if($lang == 'ru'){?>
										<h4><?= __('Перечень оборудования используемый в отрасли', 'industries_page'); ?></h4>
									<?}else if($lang == 'en'){?>
										<h4><?= __('List of equipment used in the industry', 'industries_page'); ?></h4>
									<?}else if($lang == 'uk'){?>
										<h4><?= __('Перелік обладнання що використовується в галузі', 'industries_page'); ?></h4>
									<?}?>
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
			<noindex>
			</div>
		</div>
