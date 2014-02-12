<HTML>
    <?php include ('connexion.php'); ?>
    <HEAD>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Jouets en Bois</title>
        <link href="jouets.css" rel="stylesheet" media="all" type="text/css">
    </HEAD>
    <BODY>
        <h3>Création d'un nouveau produit</h3>
        <p>
            <?php
            //préparation de la liste des catégories possibles
            $listeCategorie = $connexion->query("select * from categorie order by 1");


            echo "<form action='TraitementNouveauProduit.php' method='post'>
            <table border='2' width=75%>
                <tbody>
                    <tr><td>Libellé</td><td><INPUT name='TLibelProd' size='20'></td></tr>
                    <tr><td>Prix TTC</td><td><INPUT name='TPrix' size='5'></td></tr>
                    <tr><td>Car_Produit</td><td><INPUT name='TCarac' size='70'></td></tr>
                    <tr><td>Extension Produit</td><td><INPUT name='TExtension' size='3'></td></tr>
                    <tr><td>Intitulé image</td><td><INPUT name='TImageProd' size='30'></td></tr>
                    
                    <tr><td>Catégorie</td>
                        <td><select name='listcat'>";
            foreach ($listeCategorie as $categorie) {
                echo '<option>' . $categorie['lib_cat'] . '</option>';
            }
            echo "</td></tr>
                        
                </tbody>
            </table>
            <p>Pensez à créer l'image dans le répertoire ImagesProduits avant de créer ce produit</p>
            <p>
                <input type='submit' value='Valider'>
        </form>";
            ?>
        <H3> <A  href="Index.php">Retour Page d'accueil</A></H3>
    </body>
</html>