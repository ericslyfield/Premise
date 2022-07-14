jQuery(document).ready(function(){

// Hide Header on on scroll down

var didScroll;
var lastScrollTop = 0;
var navbarHeight = jQuery('header').outerHeight();

jQuery(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = jQuery(this).scrollTop();

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop){
       jQuery('header').removeClass('show-navigation').addClass('hide-navigation');
    } else {
      jQuery('header').removeClass('hide-navigation').addClass('show-navigation');
    }
    lastScrollTop = st;
}



});