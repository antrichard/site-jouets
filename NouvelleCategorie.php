<HTML>
    <?php include ('connexion.php'); ?>
    <HEAD>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Jouets en Bois</title>
        <link href="jouets.css" rel="stylesheet" media="all" type="text/css">
    </HEAD>
    <BODY>
        <h3>Création d'une nouvelle catégorie</h3>
        <p>
        <form action='TraitementNouvelleCategorie.php' method='post'>
            <table>
                <tbody>
                    <tr><td>Libellé</td><td><INPUT name='TLibel' size='20'></td></tr>
                    <tr><td>Intitulé image</td><td><INPUT name='TImage' size='30'></td></tr>
                </tbody>
            </table>
            <p>Pensez à créer l'image dans le répertoire ImagesCategories avant de créer cette catégorie</p>
            <p>
                <input type='submit' value='Valider'>
        </form>
        <H3> <A  href="Index.php">Retour Page d'accueil</A></H3>
    </body>
</html>