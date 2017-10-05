<?php
include_once './lib/lib_db.php';
require_once './vendor/autoload.php' ;
$loader = new Twig_Loader_Filesystem("TWIG");
$twig = new Twig_Environment($loader);


//include './lib/lib_db.php';
//static $films = ["Dracula", "Kung fu Panda", "dora l'exploratrice"];
//$films= listerFilms();



session_start();
@$action = $_REQUEST ["action"];
$pagecontenu = "";

switch ($action) {
    case "liste_films" :
        //récupère les films : $fims
        //Renvoie à la vue
        //$pagecontenu = './liste_films.php';
        $films = listerFilms(); 
        echo $twig->load("liste_films.html.twig")->render(["films"=> $films, "utilconnecte"=>@$_SESSION["utilConnecte"], "nbElt"=> count($films)]);
        break;
    case "ajoute_film" :
        echo $twig->render("ajouter_film.html.twig");
        break;
    case "film_ajoute_post" :
        //$pagecontenu = './film_ajoute.php';
        ajouterFilms($_REQUEST ["titre"]);
        header("Location: front_controleur.php?action=liste_films");
        exit;
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
        //$pagecontenu = './login.php';
        echo $twig->render("login.html.twig");
        break;
    case "login_post":
        @$login = $_REQUEST ["login"];
        @$mdp = $_REQUEST ["mdp"];
        if ($login == "admin" && $mdp == "123") {
            @$_SESSION["utilConnecte"] = $login;
            header("Location: front_controleur.php?action=liste_films");
            exit;
        } else {
            echo $twig->render("login.html.twig");
            break;
        }
        break;
    case "logout":
        //$pagecontenu = './logout.php';
        session_destroy();
        echo $twig->render("logout.html.twig");
        break;

    default :
        echo "ERREUR : action ionconnue";
        break;
}

//afficher l page par composition

//include './_HEADER.php';
//include './_MENU.php';
//include $pagecontenu;
//include './_FOOTER.php';
