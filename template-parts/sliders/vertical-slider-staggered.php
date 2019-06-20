<?php

$application_industries = get_field('application_industries');

?>

<?php if (!empty($application_industries['title']) || !empty($application_industries['description']) || !empty($application_industries['image']) ) { ?>

	<div class="row align-items-center">

		<div class="col-xl-4 col-lg-4 col-md-4 col-12">
			<div class="title-bl services-block__tit-padd">
				<div class="title-bl__title"><?= (!empty($application_industries['title'])) ? $application_industries['title'] : ''; ?></div>
				<div class="title-bl__description"><?= (!empty($application_industries['description'])) ? $application_industries['description'] : ''; ?></div>
			</div>
		</div>

		<div class="image-block col-xl-8 col-lg-8 col-md-8 col-12">
			<div class="application_industries_slider">
				<?php $i = 0;?>
				<?php foreach($application_industries['list'] as $item) { ?>
					<div class="row align-items-center we-values__w-item">

						
							<a href="<?= (!empty($item['link']['url'])) ? $item['link']['url'] : '#';?>"  class="img <?= (($i%2) == 0) ? 'col-lg-3 col-md-4 col-sm-4 col-xs-4 col-4' : ' offset-lg-3 col-lg-3 col-md-4 col-sm-4 col-xs-4 col-4'; ?>" style="height: 100px; width: 100%"><div style="background: url(<?= (!empty($item['image']['url'])) ? $item['image']['url'] : get_template_directory_uri() . '/img/home/no-image.png'; ?>) no-repeat 50% / cover; width: 100%; height: 100%"></div></a>
						
						
						
						<a class="<?= (($i % 2) == 0) ? 'col-lg-9 col-md-8 col-sm-8 col-xs-8 col-8': 'col-lg-6 col-md-8 col-sm-8 col-xs-8 col-8'?>" href="<?= (!empty($item['link']['url'])) ? $item['link']['url'] : '#';?>" <?= (empty($item['link']['url'])) ? 'onclick="return false;"' : ''?>>
							<div class="text">
								<p>
									<?= $item['title']; ?>

								</p>
								<svg width="20" height="16" viewBox="0 0 20 16"  xmlns="http://www.w3.org/2000/svg">
									<path d="M19.7071 8.70714C20.0976 8.31661 20.0976 7.68345 19.7071 7.29292L13.3431 0.928963C12.9526 0.538438 12.3195 0.538438 11.9289 0.928963C11.5384 1.31949 11.5384 1.95265 11.9289 2.34318L17.5858 8.00003L11.9289 13.6569C11.5384 14.0474 11.5384 14.6806 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70714ZM0 9.00003H19V7.00003H0V9.00003Z" />
								</svg>

							</div>
						</a>

					</div>
					<?php $i ++; ?>
				<?php } ?>
				<?php
				unset($item);
				unset($i);
				?>
			</div>
		</div>

	</div>

	<?php } ?>

	<script>
document.getElementById('no-link').addEventListener('click', function(e) {
   e.preventDefault();
}, false);
</script>