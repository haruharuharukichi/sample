jQuery(document).ready(function($) {
  $(function() {
		// フェードインしながら上へスライド    
	  $('.inviewfadeInImg').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
	    if (isInView) {
	      $(this).stop().addClass('fadeInImg');
	    } else {
	      $(this).stop().removeClass('fadeInImg');
	    }
	  });
		// フェードインしながら上へスライド    
	  $('.inviewfadeInUp').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
	    if (isInView) {
	      $(this).stop().addClass('fadeInUp');
	    } else {
	      $(this).stop().removeClass('fadeInUp');
	    }
	  });
  });
});