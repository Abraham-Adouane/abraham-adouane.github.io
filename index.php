<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/6e2cd958b0.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- <div class="wrapper"> -->
    <div class="modal-container">
        <div class="overlay modal-trigger"></div>
        <div class="modal">
            <header class="modal-header">
                <h3 class="modalTitle Booki"></h3>
                <span class="close modal-trigger">&times;</span>
            </header>
            <div class="modal-body">

            </div>
        </div>
    </div>
    <header>
        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item"><a class="nav__link" href="#home">Acceuil</a></li>
                <li class="nav__item"><a class="nav__link" href="#formations">Formations</a></li>
                <li class="nav__item"><a class="nav__link" href="#projet">Projet</a></li>
                <li class="nav__item"><a class="nav__link" href="#contact">Contact</a></li>
            </ul>
            <div class="toggleMenu">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
    </header>
    <section id="home">
        <div class="mediaContainer">
            <a class="mediaLink" href="https://www.linkedin.com/in/abraham-adouane" target="_blank">
                <i class="fa-brands fa-linkedin"></i>
            </a>
            <a class="mediaLink" href="https://github.com/Abraham-Adouane" target="_blank">
                <i class="fa-brands fa-github"></i>
            </a>
        </div>
        <h1 class="title title_home" id="element" aria-label="Bonjour, je suis Abraham ADOUANE, developpeur web">
        </h1>
        <img src="Ressources/Pictures/Background/20230323_183820.jpg" alt="">
        <p class="scroll-text"> Scroll down
        </p>
        <div class="arrow-down">
            <i class="fa-solid fa-chevron-down fa-bounce">
            </i>
            <i class="fa-solid fa-chevron-down fa-bounce"></i>

        </div>
    </section>
    <?php
    echo ('test');
    
    ?>
    <section id="formations">
        <h2 aria-label="Mes formations"><span class="bounce">M</span><span class="bounce">e</span><span
                class="bounce">s</span> <span class="bounce">f</span><span class="bounce">o</span><span
                class="bounce">r</span><span class="bounce">m</span><span class="bounce">a</span><span
                class="bounce">t</span><span class="bounce">i</span><span class="bounce">o</span><span
                class="bounce">n</span><span class="bounce">s</span></h2>
        <ul class="formations_list">
            <li class="formations_item">
                <h3>Développeur web et mobile</h3>
                <p>Titre professionnel niveau 5 (equivalent BTS/DUT)</p>
                <p>Afpa</p>
                <p>12/12/22 au 02/10/23</p>
            </li>
            <li class="formations_item">
                <h3>Prép’apprentissage - Développeur Web</h3>
                <p>Openclassroom</p>
                <p>06/12/21 au 05/04/22</p>
            </li>
            <li class="formations_item">
                <h3>Conducteur de presse numérique</h3>
                <p>Certificat de qualification professionnel</p>
                <p>Print6</p>
                <p>du 01/07/19 au 06/12/19</p>
            </li>
            <li></li>
            <li></li>
        </ul>

    </section>

    <section id="projet">
        <h2>Mes projets web</h2>
        <div class="card_container">
            <div class="card modal-trigger" data-title="Booki">
                <p>Booki</p>
                <img src="Ressources/Pictures/Projet/Booki/booki 2.jpg" alt="">
            </div>
            <div class="card modal-trigger" data-title="Ohmyfood">
                <p>Ohmyfood</p>
                <img src="Ressources/Pictures/Projet/ohmyfood/ohmyfood.jpg" alt="">
            </div>
            <div class="card modal-trigger" data-title="Georgia restaurant">
                <p>Georgia restaurant</p>
                <img src="Ressources/Pictures/Projet/Georgia/georgia_acceuil.jpg" alt="">
            </div>
            <div class="card modal-trigger" data-title="Recherche Wikipedia">
                <p>Recherche Wikipedia</p>
                <img src="Ressources/Pictures/Projet/WikiSearch/wiki.jpg" alt="">
            </div>
            <div class="card modal-trigger" data-title="App Meteo">
                <p>App Meteo</p>
                <img src="Ressources/Pictures/Projet/Meteo/meteo1.jpg" alt="">
            </div>
            <div class="card modal-trigger" data-title="Gestionnaire de bibliothèque">
                <p>Gestionnaire de bibliothèque</p>
                <img src="Ressources/Pictures/Projet/Booklist/Booklist.jpg" alt="">
            </div>
        </div>

        <a class="btn btn_download" href="Ressources/CV_ADOUANE_Abraham_Developpeur.pdf" download><i
                class="fa-solid fa-download"></i>Télécharger mon CV</a>
    </section>


    <section id="contact">
        <h2>Me contacter : </h2>
        <div class="form-container">
            <i class="fa-solid fa-envelope"></i>


            <form class="form" action="script/form-contact.php" method="post">
                <label class="name_label" for="name"></label>
                <input class="name_input" type="text" name="nom" id="name" placeholder="Nom">
                <label class="firstnameLabel" for="firstName"></label>
                <input class="firstNameInput" name="prenom" type="text" id="firstName" placeholder="Prénom">
                <label class="email_label" for="email"></label>
                <input class="email_input" type="email" id="email" name="email" placeholder="Email">
                <label class="message_label" for="message"></label>
                <textarea class="textarea" name="message" id="message" cols="30" rows="10"
                    placeholder="Message"></textarea>
                <button class="btn btn_form" type="submit">Envoyer</button>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="script/app.js"></script>
</body>

</html>