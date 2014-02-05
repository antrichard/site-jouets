<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<HTML>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php include ('connexion.php'); ?>
    <HEAD>
        <link href="jouets.css" rel="stylesheet" media="all" type="text/css">
    </HEAD>
    <BODY>

        <DIV id="Haut">
        </DIV>

        <DIV id= "Corps">

            <?php
            //récupération PHP de la date système et affichage
            $aujourdhui = getdate();
            $jour = $aujourdhui['mday'];
            $mois = $aujourdhui['mon'];
            $an = $aujourdhui['year'];
            echo "<h1>Bienvenue sur le site des produits Jouets en Bois, aujourd'hui le $jour/$mois/$an </h1>";
            ?>

            <p><h4>Petit site didactique</h4></p>
        <p><h4> Attention certaines pages ne sont pas fournies car  elles feront l'objet d'un développement ultérieur</h4> </p>
    <BR><BR>

    <p><h2> Gestion des clients</h2> </p>
<A  href="AfficherTousClients.php">Visualiser toutes les clients</A><BR>
<BR>

<p><h2> Gestion des catégories</h2> </p>
<A  href="AfficherToutesCategories.php">Visualiser toutes les catégories</A><BR>
<A  href="NouvelleCategorie.php">Créer une nouvelle catégorie</A><BR>
<BR>

<p><h2> Gestion des produits </h2></p>
<A  href="AfficherTousProduits.php">Visualiser tous les produits - en image</A><BR>
<A  href="ChoisirUneCategorie.php">Visualiser les produits d'une catégorie</A> <BR>
<A  href="ChoisirUneCategorieV2.php">Visualiser les produits d'une catégorie V2</A> <BR>
<A  href="ChoisirUnProduit.php">Visualiser un produit à partir de son N°</A><BR>
<A  href="NouveauProduit.php">Créer un nouveau produit</A><BR>
<BR>

</DIV> 
</BODY>
</HTML>
