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
    <section class="border-body">
        <section class="navbar">
                <i class="fa-solid fa-bars"></i> <!-- burger menu -->
                <p class="title">BingCine</p>
    
                <nav class="uk-navbar-container">
                    <a href="">Acceuil</a>
                    <a href="view/listeFilms.php">Films</a>
                    <a href="">Categorie</a>
                    <a href="">Acteurs</a>
                    <a href="">Réalisateur</a>
                </nav>
                <i class="fa-solid fa-magnifying-glass"></i> <!-- search -->
                <i class="fa-solid fa-basket-shopping"></i> <!-- basket shopping -->
                <i class="fa-solid  fa-user"></i> <!-- user logo-->
        </section>
        <div id="wrapper" class="uk-container uke-container-expand">
            <main>
                <div id="contenu">
                    <h2 class="uk-heading-bullet"> <?= $second_title ?> </h2> <!--on va recuperer la variable titre_secondaire -->
                    <?= $contain ?>
                </div>
            </main>
        </div>

        <footer>
            <p class="title">BingCine</p>

            <nav class="uk-navbar-container">
                <a href="">Acceuil</a>
                <a href="">Films</a>
                <a href="">Categorie</a>
                <a href="">Acteurs</a>
                <a href="">Réalisateur</a>
            </nav>
            <hr> <!-- put a line-->
            <section class="legal_mention">
                <section class="l1">
                    <a href="">Politique de confidentialité</a>
                    <a href="">Mentions légales</a>
                </section>

                <section class="l2">
                    <a href="">Conditions Génrérales de Vente</a>
                    <a href="">Conditions Générales d'Utilisation</a>
                </section>

                <section class="l3">
                    <a href="">Besoin d'aide?</a>
                    <a href="">Privatisation</a>
                    <a href="">Espace CSE</a>
                </section>
            </section>

            <hr>

            <section class="social_media">
                <p>Retrouvez-nous sur</p>
                <i class="fa-brands fa-square-facebook"></i>
                <i class="fa-brands fa-square-twitter"></i>
                <i class="fa-brands fa-square-instagram"></i>
                <i class="fa-brands fa-square-youtube"></i>
            </section>
        </footer>
    </section>
</body>
</html>