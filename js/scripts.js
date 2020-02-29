$(function() {
    $(".menuIcon").click(function(e) {
        $(".menu").toggleClass("menuOpen");
        $("i", this).toggleClass("fa-bars fa-times");
        e.preventDefault();
    });
});




// Weather API
