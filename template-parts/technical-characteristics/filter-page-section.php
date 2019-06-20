<?php

$technical_characteristics = get_field('technical_characteristics_block');

?>

<?php if(!empty($technical_characteristics['title']) || !empty($technical_characteristics['description']) || !empty($technical_characteristics['equipment_groups'])) { ?>

	<div class="row no-gutters align-items-md-center">
		<div class="col-xl-4 col-lg-4 col-md-4 col-12">

			<div class="title-bl advantages-block__tit-padd">
				<div class="title-bl__title"><?= (!empty($technical_characteristics['title'])) ? $technical_characteristics['title'] : ''; ?></div>
				<div class="title-bl__description"><?= (!empty($technical_characteristics['description'])) ? $technical_characteristics['description'] : ''; ?></div>
			</div>

		</div>


		<div class="col-xl-8 col-lg-8 col-md-8 col-12">
			<div id="tabs">

				<!-- Tabs titles first level -->
				<ul class="tabs__caption">
					<?php $j = 1; ?>
					<?php foreach ($technical_characteristics['equipment_groups'] as $item) { ?>
						<li style="<?= (count($technical_characteristics['equipment_groups']) == 1 ) ? 'display: none': '';?>">
							<a href="#tabs-<?= $j; ?>">
								<?= (!empty($item['title'])) ? $item['title'] : ''; ?>
							</a>						
						</li>
						<?php $j++;?>
					<?php } ?>
					<?php unset($item); unset($j); ?>
				</ul><!-- Tabs titles first level EOF -->


				<!-- Tabs content first level-->
				<?php $j = 1; ?>
				<?php foreach( $technical_characteristics['equipment_groups'] as $group ) { ?>
					<div id="tabs-<?= $j; ?>">



						<!-- Tabs titles second level -->
						<ul class="tabs__caption-inner">
							<?php $i = 1; ?>
							<?php foreach ($group['tabs'] as $tab) { ?>
								<li <?= (count($group['tabs']) == 1) ? 'style="width:95%"' : ''; ?>>
									<a href="#inner-<?= $i; ?>">
										<?= (!empty($tab['tab_title'])) ? $tab['tab_title'] : ''; ?>
									</a>
								</li>
								<?php $i++; ?>
							<?php } ?>

							<?php if (!empty($group['tab_with_images']['tab_title'])) { ?>
								<li>
									<a href="#inner-100">
										<?= (!empty($group['tab_with_images']['tab_title'])) ? $group['tab_with_images']['tab_title'] : ''; ?>
									</a>
								</li>
							<?php } ?>
						</ul>
						<?php unset($tab); unset($i); ?>
						<!-- Tabs titles second level EOF -->

						<!-- Tabs content second level -->
						<?php $i = 1; ?>
						<?php foreach ($group['tabs'] as $tab) { ?>
							<div class="tabs__content-inner" id="inner-<?= $i; ?>">
								<div class="tabs-cont">
									<?= $tab['content'] ; ?>
								</div>
							</div>
							<?php $i++; ?>
						<?php } ?>
						<?php unset($tab); unset($i); ?>

						<?php if (!empty($group['tab_with_images'])) { ?>
							<div class="tabs__content-inner" id="inner-100">
								<?php foreach ($group['tab_with_images']['images'] as $image) { ?>
									<div class="item" style="overflow: hidden; width: 100%; height: 400px;">
										<div style="background: url(<?= (!empty($image['url'])) ? $image['url'] : ''; ?>) no-repeat 50% / cover; width: 100%; height: 100%"></div>
									</div>
								<?php } ?>
							</div>
						<?php } ?>
						<!-- Tabs content second level EOF -->

						<?php $j++;?>
					</div>
				<?php } ?>
				<?php unset($item); unset($j); ?><!-- Tabs content first level EOF -->

			</div>
		</div>
	</div>

<?php } ?>

<script>
	jQuery.noConflict();
	(function ($) {
		$( function() {
			$( "#tabs" ).tabs();
		} );
		$( function() {
			$( "#inner-100" ).tabs();
		} );
	})(jQuery);

</script>

<?php for ($i = 0; $i <= count($group['tabs']); $i++ ) { ?>
	<script>
		(function ($) {
			$( function() {
				$( "#tabs-<?= ($i+1); ?>" ).tabs();
			} );
		})(jQuery);
	</script>
<?php } ?>