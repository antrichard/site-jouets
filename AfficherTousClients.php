<HTML>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--pour gérer les problèmes d’accents-->
        <link href="jouets.css" rel="stylesheet" media="all" type="text/css"/>
    </head>
    <body>
        <h3>Liste des clients</h3>

        <?php
        include ('connexion.php');

        $listeClients = $connexion->query("SELECT * FROM client order by 1");

        echo"<table border = 1 width = 700>";
        echo'<tr><th>Code</th><th>Nom</th><th>Prénom</th><th>Code Postal</th>
                <th>Date dernière commande</th><th colspan="2">Actions</th></tr>';

        while ($client = $listeClients->fetch()) {
            $IdCli = $client ['id_cli'];
            $NomCli = $client['nom_cli'];
            $PreCli = $client ['prenom_cli'];
            $CpCli = $client ['codepos_cli'];
            $ComCli = $client ['DateDerCde_cli'];
            echo "<tr><td>$IdCli</td>
                <td>$NomCli</td>
                <td>$PreCli</td>
                <td>$CpCli</td>
                <td>$ComCli</td>
                <td><a href='AfficheUnClient.php?choix=$IdCli'>Voir le client associé</a></td>
                <td><a href='SupprimeUnClient.php?choix=$IdCli'>Supprimer</a></td></tr>";
        }
        echo"</table>";
        ?>
        <H3> <A  href="Index.php">Retour Page d'accueil</A></H3>
    </body>
</HTML>