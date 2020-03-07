$(document).ready(function() {
    $(".menuIcon").click(function(e) {
        $(".menu").toggleClass("menuOpen");
        $("i", this).toggleClass("fa-bars fa-times");
        e.preventDefault();
    });
});


// Image Slider on Home Page with Arrows
$(function() {
  $("#slider1").responsiveSlides({
    auto: false,
    pager: true,
    nav: true,
    speed: 500,
    namespace: "centered-btns"
  });
});

// Automatic Slider on About Page
$(".rslides2").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 500,            // Integer: Speed of the transition, in milliseconds
  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: false,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false     
  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
  manualControls: "",     // Selector: Declare custom pager navigation
  namespace: "rslides",   // String: Change the default namespace used
  before: function(){},   // Function: Before callback
  after: function(){}     // Function: After callback
});
