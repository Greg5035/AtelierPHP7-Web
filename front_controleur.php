<?php
    static $films = ["Dracula" , "Kung fu Panda" , "dora l'exploratrice"];

    @$action = $_REQUEST ["action"];
    $pagecontenu = "";
    switch ($action) {
        case "liste_films" :
            //récupère les films : $fims
            
            //Renvoie à la vue
            $pagecontenu='./liste_films.php';
            break;
        case "liste_series":   
            break;
        case "ajoute_film":
            break;
        case "ajoute_serie":
            break;
        case "supprime_film":
            break;
        case "supprime_serie":
            break;
        default :
            echo "ERREUR : action onconnue";
            break;
    }
    //afficher l page par composition
    include './_HEADER.php';
    include './_MENU.php';
    include $pagecontenu;
    include './_FOOTER.php';