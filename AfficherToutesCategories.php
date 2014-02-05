<HTML>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--pour gérer les problèmes d’accents-->
        <link href="jouets.css" rel="stylesheet" media="all" type="text/css"/>
    </head>
    <body> 
        <h3>Liste des catégories</h3>
        <?php
        include ("connexion.php");
        $listeCategorie = $connexion->query("SELECT * FROM categorie ORDER BY lib_cat ASC");

        echo"<table border = 1 width = 700>";
        echo'<tr><th>Identifiant</th><th>Désignation</th><th>Photo</th></tr>';

        foreach ($listeCategorie as $categorie) {
            echo '<tr>';
            echo '<td>' . $categorie["id_cat"] . '</td>';
            echo '<td>' . $categorie["lib_cat"] . '</td>';
            $chemin = "ImagesCategories/" . $categorie["photo_cat"];
            echo "<th><img src= $chemin width='100' height='75'></th>";
            echo '</tr>';
        }
        echo '</table>';
        ?>
        <p><H3> <A  href="Index.php">Retour Page d'accueil</A></H3></P>
</body> 
</HTML>
