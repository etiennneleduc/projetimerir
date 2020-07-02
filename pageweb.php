<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>Alarme velo </title>
</head>
<body>
    <img alt="logo imerir" src="logo_imerir.png" width="200" height="100" />

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

    <p><h3> Etat du vélo </h3></p>
    <p> variable actif/ nonactif </p>
    <p><h3> Coordonnées GPS du vélo </h3></p>
    <p>
        <ul>
        $output
            <li>Altitude : </li>
            <li>Longitude : variable</li>
            <li>Altitude : variable</li>
        </ul>
    </p>
</body>
</html>
