<?php

$library = get_field('library');

?>

<?php if (!empty($library['title']) || !empty($library['text']) || !empty($library['list']) || !empty($library['shortcode_library'])) { ?>

	<div class="row align-items-center">
		<div class="col-xl-4 col-lg-4 col-md-4 col-12">

			<div class="title-bl services-block__tit-padd">
				<div class="title-bl__title"><?= (!empty($library['title'])) ? $library['title'] : ''; ?></div>
			</div>

		</div>
		<div class="right-content col-xl-8 col-lg-8 col-md-8 col-12">
			<div class="text-block row">
				<div class="form-title col-lg-10"><?= (!empty($library['text'])) ? $library['text'] : ''; ?></div>
				<?php if (!empty($library['list'])) { ?>
					<div class="col-lg-10">
						<?php if (!empty($library['list'])) { ?>
							<ol>
								<?php $i = 0; ?>
								<?php foreach ($library['list'] as $item) { ?>
									<?php $i++; ?>
									<li><?= ($i < 10) ? '0'.$i : $i; ?>. <?= $item['title']; ?></li>
								<?php } ?>
								<?php unset($i); unset($item); ?>
							</ol>
						<?php } ?>
					</div>
				<?php } ?>
				<div class="col-lg-10">
					<?= (!empty($library['shortcode_library'])) ? do_shortcode($library['shortcode_library']) : ''; ?>
				</div>
			</div>
		</div>
	</div>

<?php } ?>