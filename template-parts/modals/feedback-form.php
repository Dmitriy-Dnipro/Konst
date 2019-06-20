<?php 

$form_shortcode = get_field('form_shortcode');

?>
<!-- Consult modal -->
<div class="consult-modal modal animated fadeInLeft" id="buyPartsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 2L13.8619 14.9326" stroke="#61616A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M1.13818 15L14.0001 2.06738" stroke="#61616A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>

				</button>
			</div>

			<div class="modal-body">
				<?= do_shortcode($form_shortcode['shortcode']); ?>								
			</div>
			<div class="consult-inner">
				<span><?= $form_shortcode['title']; ?></span>
			</div>
		</div>
	</div>
</div>
<!-- Consult modal EOF -->