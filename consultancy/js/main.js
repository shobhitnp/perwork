function main() {
(function () {
   'use strict';
   /* Testimonial Slider*/ 
  	$('a.page-scroll').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 40
            }, 900);
            return false;
          }
        }
      });
    // owlCarousel slider
  	$(document).ready(function() {
  	  $("#team").owlCarousel({
  	 
  	      navigation : false, // Show next and prev buttons
  	      slideSpeed : 300,
  	      paginationSpeed : 400,
  	      autoHeight : true,
  	      itemsCustom : [
				        [0, 1],
				        [450, 2],
				        [600, 2],
				        [700, 2],
				        [1000, 4],
				        [1200, 4],
				        [1400, 4],
				        [1600, 4]
				      ],
  	  });
  	 
    // main slider
      $("#slider").owlCarousel({
        navigation : false, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        autoPlay:true
        });

      //Testimonial
      $("#testimo").owlCarousel({
        navigation : false, // Show next and prev buttons
        slideSpeed : 500,
        paginationSpeed : 600,
        singleItem:true,
        autoPlay:true
        });


      //universities
  // slider
    $(document).ready(function() {
      $("#univ-logos").owlCarousel({
          autoPlay: false, //Set AutoPlay to 3 seconds
          itemsCustom : [
                  [0, 1],
                  [450, 1],
                  [600, 3],
                  [700, 3],
                  [1000, 4],
                  [1200, 4],
                  [1400, 5],
                  [1600, 5]
                ],
          navigation : true,
          navigationText: [
          // "<i class='fa fa-chevron-left'></i>",
          // "<i class='fa fa-chevron-right'></i>"
          "<span class='glyphicon glyphicon-chevron-left'></span>",
          "<span class='glyphicon glyphicon-chevron-right'></span>"
          ],
      });
     
    });



  	});

}());

}
main();