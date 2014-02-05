<HTML>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--pour gérer les problèmes d’accents-->
        <link href="jouets.css" rel="stylesheet" media="all" type="text/css"/>
    </head>
    <body>
        <h3>Choix d'une catégorie</h3>

        <?php
        include ('connexion.php');

        $listeCategories = $connexion->query("SELECT * FROM categorie order by 1");
        echo '<h2>Catégories actuelles</h2>';

        echo '<table border = 1 width = 700>';
        echo '<tr><th>Identifiant</th><th>Libellé</th><th>Action</th></tr>';

        while ($categorie = $listeCategories->fetch()) {
            $IdCat = $categorie ['id_cat'];
            $LibCat = $categorie ['lib_cat'];
            echo "<tr><td>$IdCat</td>
                <td>$LibCat</td>
                <td><a href='AfficheProduits1CategorieV2.php?choix=$IdCat'>Voir les produits
            associés</a></td></tr>";
        }
        echo"</table>";
        ?>
        <H3> <A  href="Index.php">Retour Page d'accueil</A></H3>
    </body>
</HTML>
