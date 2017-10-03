<div id ="contenu">
    <h2>Liste des films</h2>
    <?php
    //session_start();
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
                    <td><?php echo $film; ?></td>
                    <td><a> <input type="submit" value="Supprimer" /></a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

</div>

