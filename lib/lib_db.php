<?php 

define ('CHAINE_DE_CONNEXION', 'mysql:host=localhost;dbname=mabase');
define ('DB_USER', 'root');

function createTable() {
    $req1 = "CREATE TABLE film (id BIGINT PRIMARY KEY AUTO_INCREMENT, titre VARCHAR(32));" ;
    $req2 = "CREATE TABLE utilisateur (id BIGINT PRIMARY KEY AUTO_INCREMENT, login VARCHAR(12), mdp VARCHAR(12));" ;
    $pdo = new PDO(CHAINE_DE_CONNEXION, DB_USER);

  $pdo->exec($req1);
  $pdo->exec($req2);
}


function supprimeTable() {
    $req1 = "DROP TABLE film;" ;
    $req2 = "DROP TABLE utilisateur;" ;
    $pdo = new PDO(CHAINE_DE_CONNEXION, DB_USER);
    
    $pdo->exec($req1);
    $pdo->exec($req2);
}

/**
 * retoune tous les films par ordre alpha
 * @return array
 */
function listerFilms() : array {
    $pdo = new PDO(CHAINE_DE_CONNEXION, DB_USER);
    $statement = $pdo->query("SELECT * from film ORDER BY titre");
    return $statement->fetchAll();
}

function ajouterFilms($titre) {
    $pdo = new PDO(CHAINE_DE_CONNEXION, DB_USER);
    $pdo->beginTransaction();
    
    $statement = $pdo->prepare("INSERT INTO film(titre) VALUES(:nomTitre)");
    $statement->bindValue('nomTitre', $titre);
    $statement->execute();
    
    $pdo->commit();
}

function supprimerFilms($id) {
    $pdo = new PDO(CHAINE_DE_CONNEXION, DB_USER);
    $pdo->beginTransaction();
    
    $statement = $pdo->prepare("DELETE FROM film WHERE id=:idFilm");
    $statement->bindValue('idFilm', $id);
    $statement->execute();
    
    $pdo->commit();
}



//supprimeTable();
//createTable();
//ajouterFilms("Dracula");
//ajouterFilms("Avatar");
//ajouterFilms("Toto");
//$films= listerFilms();
//var_dump($films);
//supprimerFilms(2);
?>