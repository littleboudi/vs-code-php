<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />

    <!-- chargement des medias-queries -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=5.0,user-scalable=yes" />

    <!-- lien bibliothèque FontAwesome -->
    <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>

    <title>speak easy cocktails</title>

    <!-- Lien  fichier annexes css -->
    <link rel="stylesheet" href="style.css" type="text/css" />

    <!-- jquery cdn (uniquement online) -->
    <!--utilisation de l'extension cdnsnippets pour faire apparaitre le lien en un clic commencer par "!jquery-cdn"-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--Lien fichier annexe javascript/jquery-->
    <script src="script.js"></script>


</head>

<body>

<!-- INSERTION de la page connecxion à la BDD-->    
<?php 

 //je test si le fichier connect.php existe bien
    $connect = "connect.php";
    if(file_exists($connect)){
        include $connect;
    }
?>

    <!-- INSERTION LOADER PENDANT LE CHARGEMENT DE LA PAGE -->
    <div id="loader"></div>

    <div id="container">
        <!-- MENU DE NAVIGATION -->

        <nav id="top">
            <ul id="nav-menu">
                <li class="effet-glowy">
                    <a href="#">
                        <span>H</span>
                        <span>O</span>
                        <span>M</span>
                        <span>E</span>
                    </a>
                </li>

                <li class="effet-glowy">
                    <a href="#">
                        <span>N</span>
                        <span>O</span>
                        <span>T</span>
                        <span>R</span>
                        <span>E</span>
                        <br>
                        <span>B</span>
                        <span>A</span>
                        <span>R</span>

                    </a>
                </li>

                <li class="effet-glowy">
                    <a href="#">
                        <span>C</span>
                        <span>O</span>
                        <span>N</span>
                        <span>T</span>
                        <span>A</span>
                        <span>C</span>
                        <span>T</span>
                    </a>
                </li>

                <li class="effet-glowy">
                    <a href="admin.php">
                        <span>A</span>
                        <span>D</span>
                        <span>M</span>
                        <span>I</span>
                        <span>N</span>
                    </a>
                </li>

                <li class="effet-glowy"><a href="#"><i class="fab fa-instagram fa-2x"></i></a></li>
                <li class="effet-glowy"><a href="#"><i class="fab fa-facebook fa-2x"></i></a></li>
                <li class="effet-glowy"><a href="#"><i class="fab fa-behance fa-2x"></i></a></li>

            </ul>
        </nav>

        <!-- DIV QUI ENGLOBE HEADER + MAIN -->
        <div id="contenu">
            <header>

                <!-- BANDEAU IMAGES ET LOGO -->
                <div class="picture" id="gauche">
                    <div id="animation">
                        <h4 id="scroll">Scroll Down</h4>
                        <p>|</p>
                    </div>

                </div>

                <div class="picture" id="centre">
                    <div id="logo"></div>

                </div>

                <div class="picture" id="droite">
                    <h1 id="experience">Une Expérience Unique au coeur de Tokyo</h1>
                </div>

            </header>

            <!-- MAIN -->

            <main>


                <!-- COCKTAILS -->
                <article class="un">
                    <section class="type" id="type1">

                        <div class="one slide"></div>
                        <div class="best-seller">
                            <h4>Mojito .......................................... 13€</h4>
                            <p class="glass">
                                Whisky The Sexton Single Malt Vermouth Rouge La Quintinye Angostura Bitters Cerise au
                                Marasquin
                                //
                                The
                                Sexton single malt Whisky, La Quintinye red vermouth, Angostura bitters, maraschino
                                cherry
                            </p>
                        </div>

                        <div class="two slide"></div>
                        <div class="best-seller">
                            <h4>Cosmopolitan .......................................... 15€</h4>
                            <p class="glass">
                                Whisky The Sexton Single Malt Vermouth Rouge La Quintinye Angostura Bitters Cerise au
                                Marasquin
                                //
                                The
                                Sexton single malt Whisky, La Quintinye red vermouth, Angostura bitters, maraschino
                                cherry
                            </p>
                        </div>

                        <div class="three slide"></div>
                        <div class="best-seller">
                            <h4>Américano .......................................... 10€</h4>
                            <p class="glass">
                                Whisky The Sexton Single Malt Vermouth Rouge La Quintinye Angostura Bitters Cerise au
                                Marasquin
                                //
                                The
                                Sexton single malt Whisky, La Quintinye red vermouth, Angostura bitters, maraschino
                                cherry
                            </p>
                        </div>


                        <div class="four slide"></div>
                        <div class="best-seller">
                            <h4>Caipirinha .......................................... 13€</h4>
                            <p class="glass">
                                Whisky The Sexton Single Malt Vermouth Rouge La Quintinye Angostura Bitters Cerise au
                                Marasquin
                                //
                                The
                                Sexton single malt Whisky, La Quintinye red vermouth, Angostura bitters, maraschino
                                cherry
                            </p>
                        </div>


                        <div class="five slide"></div>
                        <div class="best-seller">
                            <h4>Manhattan .......................................... 13€</h4>
                            <p class="glass">
                                Whisky The Sexton Single Malt Vermouth Rouge La Quintinye Angostura Bitters Cerise au
                                Marasquin
                                //
                                The
                                Sexton single malt Whisky, La Quintinye red vermouth, Angostura bitters, maraschino
                                cherry
                            </p>
                        </div>

                    </section>


                    <section class="menu">
                        <a href="#">
                            <span>C</span>
                            <span>O</span>
                            <span>C</span>
                            <span>K</span>
                            <span>T</span>
                            <span>A</span>
                            <span>I</span>
                            <span>L</span>

                        </a>

                    </section>


                    <section class="video" id="cocktails"></section>

                </article>


                <!-- MENU BAR -->
                <article class="deux">
                    <section class="video" id="menu-bar"></section>
                    <section class="menu" id="animation4">
                        <a href="#">
                            <span>M</span>
                            <span>E</span>
                            <span>N</span>
                            <span>U</span>
                            <br />

                            <span>B</span>
                            <span>A</span>
                            <span>R</span>
                        </a>

                    </section>
                    <section class="type" id="img-bar">
                        <form id="formulaire-resa" action="ajout.php" method="POST">
                            <ul>
                                <li class="bdd">
                                    <label class="intitule" for="nom">Nom</label>
                                    <input class="envoieDonnees" id="nom" type="text" name="nom">

                                </li>
                                <li class="bdd">
                                    <label class="intitule" for="prenom">Prénom</label>
                                    <input class="envoieDonnees" id="prenom" type="text" name="prenom">

                                </li>

                                <li class="bdd">
                                    <label class="intitule" for="telephone">Téléphone</label>
                                    <input class="envoieDonnees" id="telephone" type="telephone" name="telephone"
                                        required>
                                </li>

                                <li class="bdd">
                                    <label class="intitule" for="email">E-mail</label>
                                    <input class="envoieDonnees" id="email" type="email" name="email" required>
                                </li>


                                <li class="bdd">
                                    <p>Pass Sanitaire</p>
                                    <label class="intitule pass-sanitaire" for="oui">oui</label>
                                    <input class="envoieDonnees confirm" id="oui" type="radio" name="pass_sanitaire" value="1" checked required>

                                    <label class="intitule pass-sanitaire" for="non">non</label>
                                    <input class="envoieDonnees confirm" id="non" type="radio" name="pass_sanitaire" value="0" required>


                                </li>

                                <li id="info-covid">
                                    <p>(En raison de la crise sanitaire, veuillez vous munir de votre pass sanitaire,
                                        merci de votre compréhension.)
                                    </p>
                                </li>

                                <li class="bdd">
                                    <label class="intitule" for="date">Date</label>
                                    <input class="envoieDonnees" id="date" type="date" name="date" required>
                                </li>

                                <li class="bdd">
                                    <label class="intitule" for="heure">Heure</label>
                                    <input class="envoieDonnees" id="heure" type="time" name="heure" required>
                                </li>

                                <li class="bdd">
                                    <label class="intitule" for="personne">Nbr de pers</label>
                                    <input class="envoieDonnees" id="personne" type="number" name="personne" min="1"
                                        max="20" required>

                                </li>

                                <li class="bdd">
                                    <label class="intitule" for="message">Message</label>
                                    <textarea cols="30" rows="10" class="envoieDonnees" id="message" type="text"
                                        name="message"></textarea>

                                </li>

                                <li>
                                    <input id="valider-form" type="submit" value="Valider">
                                </li>

                            </ul>
                        </form>

                        <div id="animation2">
                            <button id="reservation">Réservation</button>
                        </div>

                    </section>
                </article>

                <!-- LIVE CONCERT -->
                <article class="trois">
                    <section class="type" id="img-concert"></section>
                    <section class="menu">
                        <a id="flex-live" href="#">
                            <div class="menu1">
                                <span>L</span>
                                <span>I</span>
                                <span>V</span>
                                <span>E</span>
                            </div>
                        </a>
                        <a id="flex-concert" href="#">
                            <div class="menu1">
                                <span>C</span>
                                <span>O</span>
                                <span>N</span>
                                <span>C</span>
                                <span>E</span>
                                <span>R</span>
                                <span>T</span>

                            </div>
                        </a>


                    </section>
                    <section class="video" id="concert"></section>
                </article>





            </main>


        </div>


    </div>

    <!-- FOOTER -->
    <footer>
        <nav id="bottom">
            <ul id="menu-bottom">
                <li class="effet-glowy"><a href="#" title="Contact">Contact</a></li>
                <li class="effet-glowy"><a href="#" title="FAQ">FAQ</a></li>
                <li class="effet-glowy"><a href="#" title="CGV">CGV</a></li>
                <li class="effet-glowy">
                    <a href="#" title="Politique de confidentialité">Politique de confidentialité</a>
                </li>
                <li class="effet-glowy"><a href="#" title="Mentions légales">Mentions légales</a></li>
                <li class="effet-glowy"><a href="#" title="Plan du site">Plan du site</a></li>
                <li class="effet-glowy">
                    <a href="#" title="Copyright 2019 - Tous droits réservés">© Copyright 2019 - Tous droits
                        réservés</a>
                </li>
            </ul>
        </nav>
    </footer>

    <!--Lien fichier annexe javascript/jquery-->
    <script src="script.js"></script>

</body>

</html>