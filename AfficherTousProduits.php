<HTML>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--pour gérer les problèmes d’accents-->
        <link href="jouets.css" rel="stylesheet" media="all" type="text/css"/>
    </head>
    <body>
        <h3>Liste de tous les produits</h3>
        <?php
        include ("connexion.php");
        $listeProduits = $connexion->query("SELECT * FROM produit");

        echo"<table border = 1 width = 700>";
        echo'<tr><th>identifiant</th><th>designation</th><th>photo</th></tr>';

//pour chaque enregistrement
        foreach ($listeProduits as $produit) {
            echo '<tr>';
            echo '<td>' . $produit["id_prod"] . '</td>';
            echo '<td>' . $produit["lib_prod"] . '</td>';
            $chemin = "ImagesProduits/" . $produit["photo_prod"];
            echo "<th><img src= $chemin width='100' height='75'></th>";
            echo '</tr>';
        }
        echo '</table>';
        ?>
        <p><H3> <A  href="Index.php">Retour Page d'accueil</A></H3></P>
</body>
</HTML>
