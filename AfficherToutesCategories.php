<HTML>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php
    include ("connexion.php");
    $listeCategorie = $connexion->query("SELECT * FROM categorie ORDER BY lib_cat ASC");

    echo'<table><tr><th classe="id">identifiant</th><th classe="des">designation</th><th classe="photo">photo</th></tr>';

    foreach ($listeCategorie as $categorie) {
        echo '<tr>';
        echo '<td>' . $categorie["id_cat"] . '</td>';
        echo '<td>' . $categorie["lib_cat"] . '</td>';
        $chemin = "ImagesCategories/" . $categorie["photo_cat"];
        echo "<td><img src= $chemin width='100' height='75'></td>";
        echo '</tr>';
    }
    echo '</table>';
    ?>
    <p><H3> <A  href="Index.php">Retour Page d'accueil</A></H3></P>
</HTML>
