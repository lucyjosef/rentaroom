$(document).ready(function(){
	$('[data-action="open-modal"]').on('click', function(){
		$('[data-modal="outside"]').removeClass('hidden');
	});

	$('[data-btn="book"]').on('click', function(){
		$('[data-modal="outside"]').addClass('hidden');
	});

	$('div#close').on('click', function(){
		$('[data-modal="outside"]').addClass('hidden');
	});
});