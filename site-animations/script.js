
     $(document).ready(function(){
     var reponse = prompt("Bonjour, comment t'appelles-tu ?", "<Entrez ici votre prénom>");
     if (reponse == null) {
       alert("Vous avez cliqué sur Annuler");
     } else {
       alert("Bienvenue " + reponse + ", ça roule ?");
     }

    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 1800; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
        return false;
    });

    
})