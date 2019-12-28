(document).ready(function() {
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 1800; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
        return false;
    });
});

$(function() {
    /**
    * Smooth scrolling to the top of page
    **/
    $("html, body").animate({scrollTop : 0}, 1500);
});

// Smooth scrolling down
$(".down").click(function() {
    $('html, body').animate({
        scrollTop: $(page).offset().top
    }, 1500);
});