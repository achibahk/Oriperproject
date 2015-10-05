$(document).ready(function(e){
	
	$('.contentSection .sliderBlock .slider').nivoSlider();
	$('.newStoryToggle').click(function(e){
		e.preventDefault();
		if(!$('.newStoryForm').hasClass('active'))
			$('.newStoryForm').slideDown();
		
	});
});
