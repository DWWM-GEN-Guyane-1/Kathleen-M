$(document).ready(function () {
  alert("Bienvenue ! Pour votre confort visuel, vous pouvez activer le mode nuit en cliquant sur la pastille en bas à droite de votre écran. Enjoy ! :)");
  $('.js-scrollTo').on('click', function () { // Au clic sur un élément
    var page = $(this).attr('href'); // Page cible
    var speed = 1800; // Durée de l'animation (en ms)
    $('html, body').animate({
      scrollTop: $(page).offset().top
    }, speed); // Go
    return false;
  });

})