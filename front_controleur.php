<?php

static $films = ["Dracula", "Kung fu Panda", "dora l'exploratrice"];

@$action = $_REQUEST ["action"];
$pagecontenu = "";
switch ($action) {
    case "liste_films" :
        //récupère les films : $fims
        //Renvoie à la vue
        $pagecontenu = './liste_films.php';
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
    case "login":
        $pagecontenu = './login.php';
        break;
    case "login_post":
        @$login = $_REQUEST ["login"];
        @$mdp = $_REQUEST ["mdp"];
        if ($login == "admin" && $mdp == "123") {
            session_start();
            @$_SESSION["utilConnecte"] = $login;
            header("Location: front_controleur.php?action=liste_films");
            exit;
        } else {
            $pagecontenu = './login.php';
        }
        break;
    case "logout":
        $pagecontenu = './logout.php';
        break;
    case "ajoute_film":
        echo "************";
        $pagecontenu = './logout.php';
        break;
    default :
        echo "ERREUR : action ionconnue";
        break;
}
//afficher l page par composition
include './_HEADER.php';
include './_MENU.php';
include $pagecontenu;
include './_FOOTER.php';
