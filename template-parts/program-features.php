<?php

$program_features = get_field('program_features');

?>

<?php if (!empty($program_features['title']) || !empty($program_features['description']) ) {?>

	<div class="row align-items-center program-features">
		<div class="col-xl-4 col-lg-4 col-md-4 col-12">

			<div class="title-bl services-block__tit-padd">
				<div class="title-bl__title"><?= (!empty($program_features['title'])) ? $program_features['title'] : ''; ?></div>
				<div class="title-bl__description"><?= (!empty($program_features['description'])) ? $program_features['description'] : ''; ?></div>
			</div>

		</div>
		
		<?php if (!empty($program_features['images']) || !empty($program_features['images'])) { ?>
			<div class="program-features__content col-xl-8 col-lg-8 col-md-8 col-12">
				<div class="images-list">
					<?php foreach ($program_features['images'] as $image) { ?>
						<div class="images-list__item">
							<div class="images-list__item--content">
								<div class="img" style="background: url(<?= (!empty($image['url'])) ? $image['url'] : '' ; ?>)no-repeat 50% 50% /cover;"></div>
								<div class="images-list__item--bg"></div>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="featers-list">
					<div class="featers-list__header"><?= (!empty($program_features['table_title'])) ? $program_features['table_title'] : ''; ?></div>
					<div class="featers-list__body--desc row">
						<div class="head-1 col-lg-6"><?= (!empty($program_features['blocks']['first_row_title'])) ? $program_features['blocks']['first_row_title'] : ''; ?></div>
						<div class="head-2 col-lg-6"><?= (!empty($program_features['blocks']['second_row_title'])) ? $program_features['blocks']['second_row_title'] : ''; ?></div>
						<div class="body-1 col-lg-6">
							<ul>
								<?php if (!empty($program_features['blocks']['first_row_list'])) { ?>
									<?php foreach ($program_features['blocks']['first_row_list'] as $item) { ?>
										<li><div class="li-block"><div class="li-block__inner"><?= (!empty($item['title'])) ? $item['title'] : ''; ?></div></div></li>
									<?php } ?>
								<?php } ?>
							</ul>
						</div>
						<div class="body-2 col-lg-6">
							<ul>
								<?php if (!empty($program_features['blocks']['second_row_list'])) { ?>
									<?php foreach ($program_features['blocks']['second_row_list'] as $item) { ?>
										<li><div class="li-block"><div class="li-block__inner"><?= (!empty($item['title'])) ? $item['title'] : ''; ?></div></div></li>
									<?php } ?>
								<?php } ?>
							</ul>
						</div>
					</div>
					<div class="featers-list__body--mob">
						<div id="featers-tabs">
							<ul class="featers-tabs__header">
								<li><a href="#tab-1"><span><?= (!empty($program_features['blocks']['first_row_title'])) ? $program_features['blocks']['first_row_title'] : ''; ?></span></a></li>
								<li><a href="#tab-2"><span><?= (!empty($program_features['blocks']['second_row_title'])) ? $program_features['blocks']['second_row_title'] : ''; ?></span></a></li>
							</ul>
							<div class="featers-tabs__content">
								<div id="tab-1">
									<ul>
										<?php if (!empty($program_features['blocks']['first_row_list'])) { ?>
											<?php foreach ($program_features['blocks']['first_row_list'] as $item) { ?>
												<li><div class="li-block"><div class="li-block__inner"><?= (!empty($item['title'])) ? $item['title'] : ''; ?></div></div></li>
											<?php } ?>
										<?php } ?>
									</ul> 
								</div>
								<div id="tab-2">
									<ul>
										<?php if (!empty($program_features['blocks']['second_row_list'])) { ?>
											<?php foreach ($program_features['blocks']['second_row_list'] as $item) { ?>
												<li><div class="li-block"><div class="li-block__inner"><?= (!empty($item['title'])) ? $item['title'] : ''; ?></div></div></li>
											<?php } ?>
										<?php } ?>
									</ul> 
								</div>
							</div>
						</div>
						<script>
							jQuery(document).ready(function($){
								$("#featers-tabs").tabs();
							});
						</script>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>

	<?php } ?>