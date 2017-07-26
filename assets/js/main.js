//render hero section the same as the window height
var wheight = window.innerHeight + "px";
function createSpace() {
    document.getElementById("hero").style.height = wheight;
}
createSpace();

//jquery smooth scrolling for anchor tags
var wh = $(window).height();

  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });


//make navbar visible past a certain scroll point
$(window).scroll(function() {
    if ($(this).scrollTop() > wh) {
        $( "#navbar" ).fadeIn('slow');
    } else {
        $( "#navbar" ).fadeOut('slow' );
    }
});
