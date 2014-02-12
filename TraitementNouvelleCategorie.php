<HTML>
    <?php include ('connexion.php'); ?>
    <HEAD>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Jouets en Bois</title>
        <link href="jouets.css" rel="stylesheet" media="all" type="text/css">
    </HEAD>
    <BODY>
        <h3>Information sur la catégorie enregistrée</h3>
        <?php
        //Récupération et mémorisation des infos de la catégorie saisie précédemment
        $wLibel=$_POST["TLibel"];
        $wImage=$_POST["TImage"];
        
        //requête d'ajout - le numéro étant automatique il n'est pas précisé dans la requête INSERT
        $connexion->exec("insert into categorie(lib_cat,photo_cat) values('$wLibel','$wImage')");
        
        //affichage de la catégorie ajoutée (ici sans le numéro - ce serait un peu plus compliqué...)
        $LienImage="ImagesCategories/".$wImage;
        
        echo "<table border=2 width=75%>
        <tbody>
        <tr><td>Libellé</td><td>$wLibel</td></tr>
        <tr><td>Lien Image</td><td>$LienImage</td></tr>
        <tr><td>Image</td><td><img src=$LienImage width=100 height=75 /></td></tr>
        <tbody>
        <table>"
        
        ?>

        <H3><A href="NouvelleCategorie.php">Autre catégorie</A></H3>
        <H3> <A  href="Index.php">Retour Page d'accueil</A></H3>
    </body>
</html>