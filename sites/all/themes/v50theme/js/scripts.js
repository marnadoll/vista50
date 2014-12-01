jQuery(document).ready(function($) {
  // Target your .container, .wrapper, .post, etc.
    $(".past_videos").fitVids();
  
  // Smooth scrolling
    $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
  
  //mobile scripts
if( jQuery(this).width() < 1100 ) {
	    
// Mobile menu
jQuery('#menu a#toggle').click(function(e) {
  e.preventDefault();
  
  jQuery('#menu ul').slideToggle(200, function() {
    // Animation complete.
  });
});

    };


//Desktop scritps
if( jQuery(this).width() >= 1100 ) {
	    
// Hide sticky nav
jQuery(document.getElementById('menu')).hide();

// Show and hide the menu. uses waypoint.js
jQuery('.middle').waypoint(function(direction) {
       if (direction === 'down') {
     jQuery(document.getElementById('menu')).fadeIn( 500 );
       }     
      }, { offset: -120 });
     
    
jQuery('.middle').waypoint(function(direction) {
       if (direction === 'up') {  
    jQuery(document.getElementById('menu')).fadeOut( 100 );
       }     
      }, { offset: -121 });
    };

  
});


// Instagram feed. See docs on instafeedjs.com
    var feed2 = new Instafeed({
        get: 'user',
        // Change this to Vista's. look on instafeed.js site for auth
        userId: 695964219,
        accessToken: '695964219.467ede5.4db9dbcef8f1450b8c2c8fc7a934f0a9',
        clientId: '8e15b8a6cffd43bf9ff0a1cc7000e4b7',
        limit: 15,
        resolution: 'standard_resolution',
        sortBy: 'random',
        template: '<a href="{{image}}" class="colorbox-load init-colorbox-processed cboxElement" title="{{caption}}" rel="gallery-insta"><img src="{{image}}" /></a>',
        target: 'v50insta2',
        filter: function(image) {
    return image.tags.indexOf('vista50') >= 0;
  }
    });
    feed2.run();
  
    