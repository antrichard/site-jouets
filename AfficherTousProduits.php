<HTML>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php
    include ("connexion.php");
    $listeProduits = $connexion->query("SELECT * FROM produit");

    echo'<table><tr><th classe="id">identifiant</th><th classe="des">designation</th><th classe="photo">photo</th></tr>';

//pour chaque enregistrement
    foreach ($listeProduits as $produit) {
        echo '<tr>';
        echo '<td>' . $produit["id_prod"] . '</td>';
        echo '<td>' . $produit["lib_prod"] . '</td>';
        $chemin = "ImagesProduits/" . $produit["photo_prod"];
        echo "<td><img src= $chemin width='100' height='75'></td>";
        echo '</tr>';
    }
    echo '</table>';
    ?>
    <p><H3> <A  href="Index.php">Retour Page d'accueil</A></H3></P>
</HTML>
