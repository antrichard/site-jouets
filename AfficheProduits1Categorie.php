<HTML>
    <!-- Cette page fait suite à la page ChoisirUneCategorie-->
    <!-- elle récupère en méthode Get le champ TIdCat du formulaire de saisie-->
    <!-- elle affiche tous les produits correspondant à ce numéro catégorie -->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php
    include ('connexion.php');


    echo"<p><H1>Liste des produits de la catégorie choisie</H1><BR>";

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
        //Il faudrait vérifier son existence dans la table catégorie et afficher son libellé
        //*************   à vous de compléter ********************
        //Récupération des produits correspondants à $ChoixIdCat
        $listeProduits = $connexion->query("SELECT * FROM produit where id_cat = $ChoixIdCat");
        echo'<table><tr><th classe="id">identifiant</th><th classe="des">Libelle</th></tr>';
        foreach ($listeProduits as $produit) {
            echo '<tr>';
            echo '<td>' . $produit["id_prod"] . '</td>';
            echo '<td>' . $produit["lib_prod"] . '</td>';
            $chemin = "ImagesProduits/" . $produit["photo_prod"];
            echo "<td><img src= $chemin width='100' height='75'></td>";
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>
    <p><H3> <A  href="Index.php">Retour Page d'accueil</A></H3></P>
</HTML>
