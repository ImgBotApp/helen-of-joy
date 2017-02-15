var wh = $(window).height();

//make navbar visible past a certain scroll point

$(window).scroll(function() {
    if ($(this).scrollTop() > wh) {
        $( "#navbar" ).fadeIn('slow');
    } else {
        $( "#navbar" ).fadeOut('slow' );
    }
});

//render hero section the same as the window height

$(document).ready(function() {
  $("#hero").css("min-height", wh);
  $("#post-hero-bar").css("margin-top", 0);
});
