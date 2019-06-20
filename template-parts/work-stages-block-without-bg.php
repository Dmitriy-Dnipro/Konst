<?php

$work_stages = get_field('work_stages');

?>

<div class="row align-items-center">
	<div class="col-xl-4 col-lg-4 col-md-4 col-12">

		<div class="title-bl services-block__tit-padd">
			<div class="title-bl__title"><?= (!empty($work_stages['title'])) ? $work_stages['title'] : ''; ?></div>
			<div class="title-bl__description"><?= (!empty($work_stages['description'])) ? $work_stages['description'] : ''; ?></div>
		</div>
	</div>
	<div class="col-xl-8 col-lg-8 col-md-8 col-12 ">
		<div class="timelinecontainer row d-flex">
			<?php if (count($work_stages['content']) <= 5) { ?>
				<div id="timeline">
					<div class="timeline-list">
						<?php foreach ($work_stages['content'] as $item) {?>
							<div class="timeline-item">
								<div class="content-block"> 
									<div class="timeline-content  right ge-content">
										<p><?= (!empty($item['text'])) ? $item['text'] : ''; ?></p>
									</div>
									<div class="timeline-icon GE">&nbsp;</div>
								</div>
							</div>
						<?php  } ?>
					</div>
				</div>
			<?php } elseif (count($work_stages['content']) > 5 ) { ?>
				<div class="col-lg-6 col-md-12 col-xs-12 col-12">
					<div id="timeline">
						<div class="timeline-list">
							<?php for ($i=0; $i < 5; $i++) {?>

								<div class="timeline-item">
									<div class="content-block"> 
										<div class="timeline-content  right ge-content">
											<p><?= (!empty($work_stages['content'][$i]['text'])) ? $work_stages['content'][$i]['text'] : ''; ?></p>
										</div>
										<div class="timeline-icon GE">&nbsp;</div>
									</div>
								</div>
							<?php  } ?>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-xs-12 col-12">
					<div id="timeline" class="">
						<div class="timeline-list">
							<?php for ($i = 5; $i < count($work_stages['content']); $i++) {?>
								<div class="timeline-item">
									<div class="content-block"> 
										<div class="timeline-content  right ge-content">
											<p><?= (!empty($work_stages['content'][$i]['text'])) ? $work_stages['content'][$i]['text'] : ''; ?></p>
										</div>
										<div class="timeline-icon GE">&nbsp;</div>
									</div>
								</div>
							<?php  } ?>
						</div>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
</div>