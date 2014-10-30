// http://goo.gl/sNQp9

jQuery(function($){
	$(document).ready(function(){

		$('.rescue-progressbar').waypoint(function() {

			$('.rescue-progressbar').each(function(){
				$(this).find('.rescue-progressbar-bar').animate({ 
					width: $(this).attr('data-percent') }, 1500 );
			});

		}, { offset: 500 });
	});
});