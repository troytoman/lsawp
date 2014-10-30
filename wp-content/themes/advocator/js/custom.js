/* ----------------- Start Document ----------------- */
(function($){
	$(document).ready(function(){

/*----------------------------------------------------*/
/*	Foundation Magic
/*----------------------------------------------------*/

		$(document).foundation();

/*----------------------------------------------------*/
/*	Search Box
/*----------------------------------------------------*/

		new UISearch( document.getElementById( 'rescue_search' ) );

/*----------------------------------------------------*/
/*  Fancybox Images
/*----------------------------------------------------*/

      $(".fancybox").fancybox({
        padding     : 0,
        helpers : {
            overlay : {
                css : {
                    'background' : 'rgba(35, 39, 43, 1)'
                }
            },
          title : {
            type: 'outside'
          },
          thumbs  : {
            width : 50,
            height  : 50
          }
        }
      });

/*----------------------------------------------------*/
/*  Fadin Sections -  http://jsfiddle.net/mohammadAdil/DFeqH/
/*----------------------------------------------------*/

    /* Every time the window is scrolled ... */
    $(window).scroll( function(){

      var windowSize = $(window).width();

      if (windowSize >= 650) { // Load only for desktop
    
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},1000);
                    
            }
            
        }); 

      }
    
    });


/* ------------------ End Document ------------------ */
});

})(this.jQuery);

