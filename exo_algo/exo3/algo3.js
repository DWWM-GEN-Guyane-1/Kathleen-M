// $(document).ready(function () {
    var N = 0;
    var i = 10;
    console.log(N);
    console.log(i);

    function lireNombreEntierN() {
        N = Number(window.prompt("Entrez un nombre : "));
    }
    lireNombreEntierN();
    console.log(N);

    // i ← 0 À traduire !!!

    // function lireNombreEntierN() {
    //     i = Number(window.alert("Les 10 nombres suivants sont : "));
    //     while (i < 10)
    //         i++;
    //     i += N;
    // }

    // lireNombreEntierN();

    while (i < 10)
        lireNombreEntierN()
            i++;
    function lireNombreEntierN() {
        i += N;
        i = Number(window.alert("Les 10 nombres suivants sont : "));
        console.log(N);
    }
    lireNombreEntierN();

