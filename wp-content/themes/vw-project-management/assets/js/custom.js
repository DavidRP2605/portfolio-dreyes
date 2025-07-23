// Menus 
function vw_project_management_menu_open_nav() {
  jQuery(".sidenav").addClass('show');
}
function vw_project_management_menu_close_nav() {
  jQuery(".sidenav").removeClass('show');
}

( function( window, document ) {
  function vw_project_management_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const vw_project_management_nav = document.querySelector( '.sidenav' );

      if ( ! vw_project_management_nav || ! vw_project_management_nav.classList.contains( 'show' ) ) {
        return;
      }
      const elements = [...vw_project_management_nav.querySelectorAll( 'input, a, button' )],
        vw_project_management_lastEl = elements[ elements.length - 1 ],
        vw_project_management_firstEl = elements[0],
        vw_project_management_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;

      if ( ! shiftKey && tabKey && vw_project_management_lastEl === vw_project_management_activeEl ) {
        e.preventDefault();
        vw_project_management_firstEl.focus();
      }

      if ( shiftKey && tabKey && vw_project_management_firstEl === vw_project_management_activeEl ) {
        e.preventDefault();
        vw_project_management_lastEl.focus();
      }
    } );
  }
  vw_project_management_keepFocusInMenu();
} )( window, document );

jQuery('document').ready(function($){
	// preloader
  setTimeout(function () {
		jQuery("#preloader").fadeOut("slow");
  },1000);

  // Sticky Header
  $(window).scroll(function(){
		var sticky = $('.header-sticky'),
			scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('header-fixed');
		else sticky.removeClass('header-fixed');
	});
  // Sticky Copyright
  $(window).scroll(function(){
    var sticky = $('.copyright-sticky'),
      scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('copyright-fixed');
    else sticky.removeClass('copyright-fixed');
  });
});

// Scroller
jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scrollup i').fadeIn();
    } else {
      jQuery('.scrollup i').fadeOut();
    }
	});
	jQuery('.scrollup i').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
	});
});

// search
jQuery(document).ready(function () {
  function vw_project_management_search_loop_focus(element) {
    var vw_project_management_focus = element.find('select, input, textarea, button, a[href]');
    var vw_project_management_firstFocus = vw_project_management_focus[0];  
    var vw_project_management_lastFocus = vw_project_management_focus[vw_project_management_focus.length - 1];
    var KEYCODE_TAB = 9;

    element.on('keydown', function vw_project_management_search_loop_focus(e) {
      var isTabPressed = (e.key === 'Tab' || e.keyCode === KEYCODE_TAB);

      if (!isTabPressed) { 
        return; 
      }

      if ( e.shiftKey ) /* shift + tab */ {
        if (document.activeElement === vw_project_management_firstFocus) {
          vw_project_management_lastFocus.focus();
            e.preventDefault();
          }
        } else /* tab */ {
        if (document.activeElement === vw_project_management_lastFocus) {
          vw_project_management_firstFocus.focus();
            e.preventDefault();
          }
        }
    });
  }
  jQuery('.search-box span a').click(function(){
      jQuery(".serach_outer").slideDown(1000);
      vw_project_management_search_loop_focus(jQuery('.serach_outer'));
  });

  jQuery('.closepop a').click(function(){
      jQuery(".serach_outer").slideUp(1000);
  });
});

// Progress Dropdown
jQuery(document).ready(function($) {
  $('#timeFilter').on('change', function() {
    var selected = $(this).val(); // 'month' or 'year'

    ['done', 'review', 'doing'].forEach(function(type) {
      var value = $('.' + type + '-progress-value').data(selected);
      $('.' + type + '-progress-value').text(value + '%');
      $('.' + type + '-progress-bar')
        .css('width', value + '%')
        .attr('aria-valuenow', value);
    });
  });
});

// Project Section
jQuery('document').ready(function(){
  var owl = jQuery('.owl-carousel');
    owl.owlCarousel({
    margin:20,
    loop: true,
    dots:false,
    autoplay : true,
    nav:true,
    navText : ['<i class="fa-solid fa-angle-left"></i>','<i class="fa-solid fa-angle-right"></i>'],
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2
      },
      1024: {
        items: 2,
      },
      1200: {
        items: 2,
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});

//Video Popup
(function( $ ) {
  $(document).ready(function(){
    $('#openBtn').on('click', function() {
      $('#videoOverlay').css('display', 'flex');
    });
    $('.close-btn').on('click', function() {
      $('#videoOverlay').hide();
    });
  });
})( jQuery );