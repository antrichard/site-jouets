<HTML>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--pour gérer les problèmes d’accents-->
        <link href="jouets.css" rel="stylesheet" media="all" type="text/css"/>
    </head>
    <body>
        <!-- Cette page fait suite à la page ChoisirUneCategorie-->
        <!-- elle récupère en méthode Get le champ TIdCat du formulaire de saisie-->
        <!-- elle affiche tous les produits correspondant à ce numéro catégorie -->

        <h3>Liste des produits de la catégorie choisie</h3>

        <?php
        include ('connexion.php');

// Récupération du champ TIdcat et vérification s'il a bien été saisi

        $ChoixIdCat = $_GET["TIdCat"];
        $listeCategories = $connexion->query("SELECT * FROM categorie where id_cat = $ChoixIdCat");
        $resultats = $listeCategories->fetch();
        if ($ChoixIdCat != $resultats["id_cat"]) {
            echo "PB : la catégorie n'existe pas";
        } else {
            //Mémorisation du code  - ici dans la variable $ChoixIdCat  - si la saisie a bien eu lieu 
            $ChoixIdCat = $_GET["TIdCat"];
            echo "<H2>vous avez choisi la catégorie $ChoixIdCat</H2>";

            //Récupération des produits correspondants à $ChoixIdCat
            $listeProduits = $connexion->query("SELECT * FROM produit where id_cat = $ChoixIdCat");

            echo"<table border = 1 width = 700>";
            echo'<tr><th>Identifiant</th><th>Libellé</th><th>Photo</th></tr>';
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
        <H3><A  href="ChoisirUneCategorie.php">Retour à la prévisualisation de toutes les catégories</A></H3>
        <H3> <A  href="Index.php">Retour Page d'accueil</A></H3>
    </body>
</HTML>
