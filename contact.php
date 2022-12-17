<!DOCTYPE html>
<html lang="fr">

<!--=====| declaration des feuille de style utilise et information sur du site|=====-->

<head>

    <!--information via balise meta-->
    <meta charset="UTF-8">
    <meta name="description" content="site sur Phasmophobia">
    <meta name="keywords" content="HTML, CSS">
    <meta name="author" content="Maxime TAMARIN et Axel ROUBAUD">

    <!--utilisation du fichier CSS-->
    <link rel="stylesheet" href="CSS/style.css">

    <!--insertion du favicon-->
    <link rel="icon" href="phasmo.ico">

    <!--nomme la page-->
    <title> Projet R1.02 sur Phasmophobia </title>

</head>

<!--=====| Barre de navigation |=====-->

<body>
    <nav class="navbar">

        <!--nom de la classe-->
        <img src="logo-phasmo-pc.png" alt="">


        <!--logo de phasmophobia-->
        <input type="checkbox" id="btn">

        <ul class="nav-menu">

            <!--navigation pour onglet Présentation (index.html)-->
            <li class="nav-item">
                <a href="index.html">Presentation du jeux </a>
            </li>

            <!--navigation pour onglet gameplay (gameplay.html)-->
            <li class="nav-item">
                <a href="gameplay.html">Gameplay</a>
            </li>

            <!--navigation pour onglet Objet (objet.html)-->
            <li class="nav-item">
                <a href="objet.html">Objet</a>
            </li>

            <!--navigation pour onglet Entité (entite.html)-->
            <li class="nav-item">
                <a href="entite.html">Entité</a>
            </li>

            <!--navigation pour onglet Contact (contact.html)-->
            <li class="nav-item">
                <a href="contact.php">Contact</a>
            </li>

        </ul>

    </nav>


    <!--=====| Formulaire |=====-->

    <form id="form" action="#">

        <p>

            <label for="prenom">Prénom</label>
            <input id="prenom" type="text" name="prenom" value=" " require>

            <label for="nom">Nom</label>
            <input id="nom" type="text" name="nom" value=" " require>

            <select name="sexe">
                <option>choix</option>
                <option>homme</option>
                <option>femme</option>
            </select> <br> <br>

            <label for="email">mail</label>
            <input id="email" type="text" name="mail" value=" "> <br> <br>


            <textarea name="impression" rows="2" cols="50" require>
        Donnez vos impressions sur le site...
        </textarea><br>
            <input type="submit" value="envoyer le mail">
        </p>

    </form>

    <?php
    if (isset($_POST['impression'])) 
    {
        $retour = mail('maxtam83390@gmail.com', 'Envoi depuis la page Contact', $_POST['impression'], 'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']) //mail("Email du destinataire", "Sujet", "Message", "Entête");
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>

</body>

</html>