<HTML>
    <!-- Cette page fait suite à la page ChoisirUnProduit-->
    <!-- elle récupère en méthode Get le champ TIdCat du formulaire de saisie-->
    <!-- elle affiche tous les produits correspondant à ce numéro catégorie -->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php
    include ('connexion.php');
    ?>

    <p><H1>Produit choisi</H1><BR>
    <?php
// Récupération du champ TIdProd et vérification s'il a bien été saisi

    $ChoixIdProd = $_GET["TIdProd"];
    $listeProduits = $connexion->query("SELECT * FROM produit where id_prod = $ChoixIdProd");
    $resultats = $listeProduits->fetch();
    if ($ChoixIdProd != $resultats["id_prod"]) {
        echo "PB : le code produit n'existe pas";
    } else {
        if (empty($_GET["TIdProd"])) { //Message d'erreur si la saisie n'a pas eu lieu
            echo "PB : le code produit n'a pas été renseigné précédemment";
        } else {
            echo "<H2>vous avez choisi le produit $ChoixIdProd</H2>";
            //Il faudrait vérifier son existence dans la table catégorie et afficher son libellé
            //*************   à vous de compléter ********************
            //Récupération des produits correspondants à $ChoixIdProd
            $ChoixIdProd = $_GET["TIdProd"];
            $listeProduits = $connexion->query("SELECT * FROM produit where id_prod = $ChoixIdProd");
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
    }
    ?>
    <p><H3> <A  href="Index.php">Retour Page d'accueil</A></H3></P>
</HTML>
