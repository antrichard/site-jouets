<HTML>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--pour gérer les problèmes d’accents-->
        <link href="jouets.css" rel="stylesheet" media="all" type="text/css"/>
    </head>
    <body>
        <p><H3>Fiche détaillée du client choisie</H3><BR>
        <!-- Cette page fait suite à la page AfficherTousClients-->
        <!-- elle affiche la fiche détaillée correspondant à ce numéro de client -->
        <?php
        include ('connexion.php');

        // Récupération du champ "choix"
        $Choix = $_GET["choix"];

        if (empty($_GET["choix"])) {
            //Message d'erreur si la fiche client est vide
            echo "PB : la fiche du client n'a pas été renseigné précédemment";
        } else {

            //Récupération des données correspondants au client
            $ficheClient = $connexion->query("SELECT * FROM client where id_cli = $Choix");

            echo"<table border = 1 width = 700>";
            foreach ($ficheClient as $client) {
                echo '<tr><th>Code</th>';
                echo '<td>' . $client["id_cli"] . '</td>';
                echo '</tr>';
                echo '<tr><th>Nom</th>';
                echo '<td>' . $client["nom_cli"] . '</td>';
                echo '</tr>';
                echo '<tr><th>Prénom</th>';
                echo '<td>' . $client["prenom_cli"] . '</td>';
                echo '</tr>';
                echo '<tr><th>Rue</th>';
                echo '<td>' . $client["rue_cli"] . '</td>';
                echo '</tr>';
                echo '<tr><th>Code Postal</th>';
                echo '<td>' . $client["codepos_cli"] . '</td>';
                echo '</tr>';
                echo '<tr><th>Ville</th>';
                echo '<td>' . $client["ville_cli"] . '</td>';
                echo '</tr>';
                echo '<tr><th>Tel</th>';
                echo '<td>' . $client["tel_cli"] . '</td>';
                echo '</tr>';
                echo '<tr><th>Mail</th>';
                echo '<td>' . $client["mail_cli"] . '</td>';
                echo '</tr>';
                echo '<tr><th>Date dernière commande</th>';
                echo '<td>' . $client["DateDerCde_cli"] . '</td>';
                echo '</tr>';
                echo '<tr><th>Mot de passe</th>';
                echo '<td>' . $client["mdp_cli"] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        }
        ?>
        <p><H3> <A  href="AfficherTousClients.php">Retour à la prévisualisation de tous les clients</A></H3></p>
    <p><H3> <A  href="Index.php">Retour Page d'accueil</A></H3></p>
</body>
</HTML>
