<HTML>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php
    include ('connexion.php');
    ?>
    <p>Choix d'une catégorie<BR/>
        <?php
        $listeProduits = $connexion->query("SELECT * FROM produit order by 1");
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
        ?>
        <!-Saisie du code produit souhaité et envoie à la page AfficheProduitSurID -->
        <!-Mise en place d’un formulaire avec une zone de saisie pour le code  -->

    <FORM  action = 'AfficheProduitSurID.php' method = 'get'>


        Entrer le code produit </p>  <input type ="text" NAME = "TIdProd" SIZE = "2"> 
    <input type ='submit' value = 'Voir le produit associé'>

</FORM>

<p><H3> <A  href="Index.php">Retour Page d'accueil</A></H3></P>

</HTML>
