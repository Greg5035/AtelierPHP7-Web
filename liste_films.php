<div id ="contenu">
     <h2>Liste des films</h2>
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
