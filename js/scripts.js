$(function() {
    $(".menuIcon").click(function(e) {
        $(".menu").toggleClass("menuOpen");
        $("i", this).toggleClass("fa-bars fa-times");
        e.preventDefault();
    });
});

$(function () {
        $('#registerForm').bind('submit', function () {
          $.ajax({
            type: 'post',
            url: 'register.html.php',
            data: $('#registerForm').serialize(),
            success: function () {
              $('#sucessMessage').empty();
              $('#sucessMessage').show().append('<p>Thank you for registering!</p>');
              $('#successMessage').css('text-align: center; font-weight: bold; color: @color3;');
            }
          });
          return false;
        });
});


// Weather API
