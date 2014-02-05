<HTML>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--pour gérer les problèmes d’accents-->
        <link href="jouets.css" rel="stylesheet" media="all" type="text/css"/>
    </head>
    <body>
        <h3>Produit choisi</h3>
        <!-- Cette page fait suite à la page ChoisirUnProduit-->
        <!-- elle récupère en méthode Get le champ TIdProd du formulaire de saisie-->
        <!-- elle affiche le produit correspondant à ce numéro -->

        <?php
        include ('connexion.php');

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
                //Récupération des produits correspondants à $ChoixIdProd
                $ChoixIdProd = $_GET["TIdProd"];
                $listeProduits = $connexion->query("SELECT * FROM produit where id_prod = $ChoixIdProd");

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
        }
        ?>
        <H3><A href="ChoisirUnProduit.php">Retour à la prévisualisation de tous les produits</A></H3>
        <H3><A href="Index.php">Retour Page d'accueil</A></H3>
    </body>
</HTML>
