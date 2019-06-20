(function($){
	$('.spare_parts_slider #btn-buy').click((e) => {
		let classesArr = $(e.currentTarget).attr('class').split(' ');
		let currentElement = $('.spare_parts_slider  .text.' + classesArr[1] + ' .title'); 

		$('.buy-parts-modal .product-buy-context').val(currentElement[0].innerHTML);
	});
})(jQuery);