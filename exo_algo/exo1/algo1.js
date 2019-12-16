// $(document).ready(function () {
    var nombre = 0;
    console.log(nombre);

    function lireNombreEntierNombre() {
        nombre = Number(window.prompt("Saisir un chiffre entre 1 et 3"));
    }
    lireNombreEntierNombre();
    console.log(nombre);

    while (nombre < 1 || nombre > 3) {
        lireNombreEntierNombre()
        if (nombre < 1 || nombre > 3) {
            window.alert('Saisie erronée. Recommencez.');
        }
    
    lireNombreEntierNombre();
    }