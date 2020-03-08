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
    auto: true,
    pager: true,
    nav: true,
    speed: 500,
    namespace: "centered-btns"
  });
});
