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

        $listeProduits = $connexion->query("SELECT * FROM produit order by 1");
        
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
        ?>
        <!-Saisie du code produit souhaité et envoie à la page AfficheProduitSurID -->
        <!-Mise en place d’un formulaire avec une zone de saisie pour le code  -->

        <FORM  action = 'AfficheProduitSurID.php' method = 'get'>
            <p>Entrer le code produit
                <input type ="text" NAME = "TIdProd" SIZE = "2"> 
                <input type ='submit' value = 'Voir le produit associé'>
        </FORM>

        <H3> <A  href="Index.php">Retour Page d'accueil</A></H3>
    </body>
</HTML>
