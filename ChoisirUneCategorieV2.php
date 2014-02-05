<HTML>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="jouets.css" rel="stylesheet" media="all" type="text/css"/>
    </head>
    <body>
        <p>Choix d'une catégorie<BR/>

            <?php
            include ('connexion.php');

            $listeCategories = $connexion->query("SELECT * FROM categorie order by 1");
            echo "<p><h2>Catégories actuelles</font></h2>

            <table border = 1 width = 700>";
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
        <p><H3> <A  href="Index.php">Retour Page d'accueil</A></H3></P>
</body>
</HTML>
