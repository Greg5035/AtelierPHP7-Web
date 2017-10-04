<div id ="contenu">
    <h2>Liste des films</h2>
    <?php
    //session_start();
    //faire if (isset($_SESSION["utilConnecte"] ....
    if ($_SESSION != null) {
        if ($_SESSION["utilConnecte"] == "admin") {
            ?>
    <a href="./front_controleur.php?action=ajoute_film"> <input type="button" value="Ajouter"  /></a>  
            <?php
        } else {
            
        }
    }
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($films as $film) {
                ?>
                <tr>
                    <td><?php echo $film["titre"]; ?></td>
                    <td><a href="./front_controleur.php?action=supprime_film">  <input type="button" value="Supprimer" /></a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

</div>

