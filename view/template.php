<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=ed">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link give in the doc but I don't know what is it  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- link for font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link for css page -->
    <link rel="stylesheet" href="public/css/style.css">
    <title><?= $title ?> </title> <!-- get the variable title-->
</head>
<body>
    <div class="header">
        <nav>
            <div class="nav-gauche" >
                <a href="javascript:void(0);" onclick="myFunction()"><i class="fa-solid fa-bars" ></i></a> <!-- burger menu -->
                <p class="title">BingCine</p>
            </div>
            <div class="nav-milieu">
                <a href="index.php?action=a">Acceuil</a>
                <a href="index.php?action=filmList">Films</a>
                <a href="index.php?action=categoriesList">Categorie</a>
                <a href="index.php?action=roleList">Rôle</a>
                <a href="index.php?action=actorList">Acteurs</a>
                <a href="index.php?action=directorList">Réalisateur</a>
            </div>
            <div class="nav-droite">
                <i class="fa-solid fa-magnifying-glass"></i> <!-- search -->
                <i class="fa-solid fa-basket-shopping"></i> <!-- basket shopping -->
                <i class="fa-solid  fa-user"></i> <!-- user logo-->
            </div>
        </nav>
        <!-- <img src="public/img/edward_main_argent.jpg" alt="Image de Edward aux mains d'argent"> -->
    </div>
    <div id="wrapper" class="uk-container uke-container-expand">
        <h2 class="uk-heading-bullet"> <?= $second_title ?> </h2> <!--on va recuperer la variable titre_secondaire -->
        <?= $contain ?>
    </div>
    <button id="scrollToTopBtn"> &#8593;</button> <!-- je creer un bouton pour remonter toute la page-->
    <footer>
        <p class="title">BingCine</p>
        
        <nav class="uk-navbar-container">
            <a href="index.php?action=a">Acceuil</a>
            <a href="index.php?action=filmList">Films</a>
            <a href="index.php?action=categoriesList">Categorie</a>
            <a href="index.php?action=roleList">Rôle</a>
            <a href="index.php?action=actorList">Acteurs</a>
            <a href="index.php?action=directorList">Réalisateur</a>
        </nav>
        <hr> <!-- put a line-->
        <section class="legal_mention">
            <div class="l1">
                <a href="index.php?action=confidentialite">Politique de confidentialité</a>
                <a href="index.php?action=mention">Mentions légales</a>
            </div>
            <div class="l2">
                <a href="index.php?action=vente">Conditions Génrérales de Vente</a>
                <a href="index.php?action=utilisation">Conditions Générales d'Utilisation</a>
            </div>     
            <div class="l3">
                <a href="index.php?action=aide">Besoin d'aide?</a>
                <a href="index.php?action=privatisation">Privatisation</a>
                <a href="index.php?action=cse">Espace CSE</a>
            </div>
        </section>   
        <hr>
        <section class="social_media">
            <p>Retrouvez-nous sur</p>
            <div class="logos">
                <a href="https://www.facebook.com/" class="logo"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="https://www.x.com/" class="logo"><i class="fa-brands fa-square-twitter"></i></a>
                <a href="https://www.instagram.com/" class="logo"><i class="fa-brands fa-square-instagram"></i></a>
                <a href="https://www.youtube.com/" class="logo"><i class="fa-brands fa-square-youtube"></i></a>
            </div>
        </section>
    </footer>


    <script src="public/js/index.js"></script>
</body>
</html>

