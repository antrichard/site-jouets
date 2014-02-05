<HTML>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php include ('connexion.php'); ?>
    <HEAD>
        <title>Jouets en Bois</title>
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

            <p>Petit site didactique</p>
            <p>Attention certaines pages ne sont pas fournies car  elles feront l'objet d'un développement ultérieur</p>

            <h2> Gestion des clients</h2>
            <ul>
                <li><A  href="AfficherTousClients.php">Visualiser toutes les clients</A></li>
            </ul>
            
            <h2> Gestion des catégories</h2>
            <ul>
                <li><A  href="AfficherToutesCategories.php">Visualiser toutes les catégories</A></li>
                <li><A  href="NouvelleCategorie.php">Créer une nouvelle catégorie</A></li>
            </ul>
            
            <h2> Gestion des produits </h2>
            <ul>
                <li><A  href="AfficherTousProduits.php">Visualiser tous les produits - en image</A></li>
                <li><A  href="ChoisirUneCategorie.php">Visualiser les produits d'une catégorie</A></li>
                <li><A  href="ChoisirUneCategorieV2.php">Visualiser les produits d'une catégorie V2</A></li>
                <li><A  href="ChoisirUnProduit.php">Visualiser un produit à partir de son N°</A></li>
                <li><A  href="NouveauProduit.php">Créer un nouveau produit</A></li>
            </ul>
            
        </DIV> 
    </BODY>
</HTML>
