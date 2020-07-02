<!DOCTYPE html>
<html>
    <head>
        <title>Alarme velo </title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Page de test</h2>
        
        <p>
                <img alt="logo imerir" src="logo_imerir.png" width="200" height="100" />
                <p><h3> Etat du vélo </h3></p>
                <p> variable actif/ nonactif </p>
                <p><h3> Coordonnées GPS du vélo </h3></p>
            Cette page contient du code HTML avec des balises PHP.<br />
            <?php /* Insérer du code PHP ici */ ?>
            Voici quelques petits tests :
        </p>
        
        <ul>
        <li style="color: blue;">Altitude : </li>
        <li style="color: red;">Longitude : </li>
        <li style="color: green;">Altitude : </li>
        </ul>
        
        <?php
    $ch = curl_init();
    
// C'est ici que vous mettez les options comme l'url, timeout, returntransfer
    curl_setopt($ch, CURLOPT_URL, 'https://google.fr/');
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // prend le contenu de l'url et le place dans une variable
    $output = curl_exec($ch);
    
    // Affiche les infos :
    echo '<pre>';
    print_r (curl_getinfo($ch));
    echo '</pre>';
    
    // Fermeture
    curl_close($ch);
        ?>
    </body>
</html>

