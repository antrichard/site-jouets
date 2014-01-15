<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<HTML>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?PHP
    include ('Connexion.php');
    ?>
    <HEAD>
        <link href="jouets.css" rel="stylesheet" media="all" type="text/css">
    </HEAD>
    <BODY>

        <DIV id="Haut">
        </DIV>

        <DIV id= "Corps">

            <?PHP //récupération PHP de la date système et affichage
            
            $aujourdhui = getdate();
            $jour = $aujourdhui['mday'];
            $mois = $aujourdhui['mon'];
            $an = $aujourdhui['year'];

            echo "<h1>Bienvenue sur le site des produits Jouets en Bois,  aujourd'hui  le $jour/$mois/$an </h1>";
            ?>

            <p><h4>Petit site didactique</h4></p>
        <p><h4> Attention certaines pages ne sont pas fournies car  elles feront l'objet d'un développement ultérieur </h4> </p>
    <BR><BR>

    

    <p><h2> Gestion des catégories</h2> </p>
<A  href="AfficheToutesCategories.php">visualiser toutes les catégories </A><BR>
<A  href="NouvelleCategorie.php">créer une nouvelle catégorie </A><BR>
<BR>

<p><h2> Gestion des produits </h2></p>
<A  href="AfficheTousProduits.php">visualiser tous les produits - en image</A><BR>
<A  href="Afficheproduits1Categorie.php">visualiser les produits d'une catégorie </A> <BR>
<A  href="ChoisirUnProduitSurId.php">visualiser un produit à partir de son N° </A><BR>
<A  href="NouveauProduit.php">créer un nouveau produit </A><BR>
<BR>

</DIV> 
</BODY>
</HTML>
