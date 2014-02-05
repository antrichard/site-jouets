<HTML>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--pour gérer les problèmes d’accents-->
        <link href="jouets.css" rel="stylesheet" media="all" type="text/css"/>
    </head>
    <body>

        <H3>Liste des produits de la catégorie choisie</H3>
        <!-- Cette page fait suite à la page ChoisirUneCategorieV2-->
        <!-- elle récupère en méthode Get le champ IdCat de l'URL choisie-->
        <!-- elle affiche tous les produits correspondant à ce numéro catégorie -->
        <?php
        include ('connexion.php');

        // Récupération du champ TIdcat et vérification s'il a bien été saisi
        $Choix = $_GET["choix"];
        $listeCategories = $connexion->query("SELECT * FROM produit where id_cat = $Choix");
        $resultats = $listeCategories->fetch();
        if ($Choix != $resultats["id_cat"]) {
            echo "PB : la catégorie est vide";
        } else {
            //Mémorisation du code  - ici dans la variable $ChoixIdCat  - si la saisie a bien eu lieu 

            echo "<H2>vous avez choisi la catégorie $Choix</H2>";
            //Récupération des produits correspondants à $Choix
            $listeProduits = $connexion->query("SELECT * FROM produit where id_cat = $Choix");

            echo '<table border = 1 width = 700>';
            echo '<tr><th>identifiant</th><th>Libellé</th><th>Photo</th></tr>';
            foreach ($listeProduits as $produit) {
                echo '<tr>';
                echo '<td>' . $produit["id_prod"] . '</td>';
                echo '<td>' . $produit["lib_prod"] . '</td>';
                $chemin = "ImagesProduits/" . $produit["photo_prod"];
                echo "<th><img src= $chemin width='100' height='75'></th>";
                echo '</tr>';
            }
            echo '</table>';
        }
        ?>
        <H3><A  href="ChoisirUneCategorieV2.php">Retour à la prévisualisation de toutes les catégories</A></H3>
        <H3><A  href="Index.php">Retour Page d'accueil</A></H3>
    </body>
</HTML>
