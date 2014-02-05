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

        echo"<table border = 1 width = 700>";
        echo'<tr><th>Identifiant</th><th>Libellé</th></tr>';

        foreach ($listeCategories as $categorie) {
            echo '<tr>';
            echo '<td>' . $categorie["id_cat"] . '</td>';
            echo '<td>' . $categorie["lib_cat"] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        ?>
        <!-Saisie du code catégorie souhaité et envoie à la page AfficheProduits1Categ -->
        <!-Mise en place d’un formulaire avec une zone de saisie pour le code  -->

        <FORM  action = 'AfficheProduits1Categorie.php' method = 'get'>
            <p>Entrer le code catégorie 
                <input type ="text" NAME = "TIdCat" SIZE = "2"> 
                <input type ='submit' value = 'Voir les produits associés'>

        </FORM>

        <H3> <A  href="Index.php">Retour Page d'accueil</A></H3>
    </body>
</HTML>
