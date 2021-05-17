<?php

use ludk\Persistence\ORM;
use Entity\Movie; //utilise le bdd movie
use Entity\User; // idem user

require __DIR__ . "/../vendor/autoload.php"; // j'inclue redirige vers autoload.php

session_start(); //va utiliser la session

$orm = new ORM(__DIR__ . '/../Ressources');
$movieRepo = $orm->getRepository(Movie::class); //on reprend-récupère le tableau, l'entité
//userRepo =$orm->getepository(User::class), //si on veut récup l'entité user

// $items = $codeRepo->findall(); // récup tout de l'entité au dessus en requette (select * from ...) 

$ItemsDc = [];
$ItemsMarvel = [];
if (isset($_GET["search"])) {
    $ItemsDc = $movieRepo->findBy(array("category" => "dc", "title" => '%' . $_GET["search"] . '%')); //on choisie la catégorie dc
    $ItemsMarvel = $movieRepo->findBy(array("category" => "marvel", "title" => '%' . $_GET["search"] . '%')); //idem marvel
} else {
    $ItemsDc = $movieRepo->findBy(array("category" => "dc")); //on choisie la catégorie dc
    $ItemsMarvel = $movieRepo->findBy(array("category" => "marvel")); //idem marvel

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="script.js">
    <!-- partial:index.partial.html -->
    <link href='https://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
</head>

<body>
    <div id="ancre"></div>
    <header>
        <!-- Etoiles -->
        <div class="stars-wrapper" id="scene">
            <div class="layer" data-depth="0.00"></div>
            <div class="stars-cluster stars-cluster-1 layer" data-depth="0.30">
                <div class="star star-1"></div>
                <div class="star star-2"></div>
                <div class="star star-3"></div>
                <div class="star star-4"></div>
                <div class="star star-5"></div>
                <div class="star star-6"></div>
                <div class="star star-7"></div>
                <div class="star star-8"></div>
                <div class="star star-9"></div>
                <div class="star star-10"></div>
                <div class="star star-11"></div>
                <div class="star star-12"></div>
                <div class="star star-13"></div>
                <div class="star star-14"></div>
                <div class="star star-15"></div>
                <div class="star star-16"></div>
                <div class="star star-17"></div>
                <div class="star star-18"></div>
                <div class="star star-19"></div>
                <div class="star star-20"></div>
                <div class="star star-21"></div>
                <div class="star star-22"></div>
                <div class="star star-23"></div>
                <div class="star star-24"></div>
                <div class="star star-25"></div>
                <div class="star star-26"></div>
                <div class="star star-27"></div>
                <div class="star star-28"></div>
                <div class="star star-29"></div>
                <div class="star star-30"></div>
                <div class="star star-31"></div>
                <div class="star star-32"></div>
                <div class="star star-33"></div>
                <div class="star star-34"></div>
                <div class="star star-35"></div>
                <div class="star star-36"></div>
                <div class="star star-37"></div>
                <div class="star star-38"></div>
                <div class="star star-39"></div>
                <div class="star star-40"></div>
            </div>
            <div class="stars-cluster stars-cluster-2 layer" data-depth="0.50">
                <div class="star star-1"></div>
                <div class="star star-2"></div>
                <div class="star star-3"></div>
                <div class="star star-4"></div>
                <div class="star star-5"></div>
                <div class="star star-6"></div>
                <div class="star star-7"></div>
                <div class="star star-8"></div>
                <div class="star star-9"></div>
                <div class="star star-10"></div>
                <div class="star star-11"></div>
                <div class="star star-12"></div>
                <div class="star star-13"></div>
                <div class="star star-14"></div>
                <div class="star star-15"></div>
                <div class="star star-16"></div>
                <div class="star star-17"></div>
                <div class="star star-18"></div>
                <div class="star star-19"></div>
                <div class="star star-20"></div>
                <div class="star star-21"></div>
                <div class="star star-22"></div>
                <div class="star star-23"></div>
                <div class="star star-24"></div>
                <div class="star star-25"></div>
                <div class="star star-26"></div>
                <div class="star star-27"></div>
                <div class="star star-28"></div>
                <div class="star star-29"></div>
                <div class="star star-30"></div>
                <div class="star star-31"></div>
                <div class="star star-32"></div>
                <div class="star star-33"></div>
                <div class="star star-34"></div>
                <div class="star star-35"></div>
                <div class="star star-36"></div>
                <div class="star star-37"></div>
                <div class="star star-38"></div>
                <div class="star star-39"></div>
                <div class="star star-40"></div>
            </div>
            <div class="stars-cluster stars-cluster-3 layer" data-depth="0.90">
                <div class="star star-1"></div>
                <div class="star star-2"></div>
                <div class="star star-3"></div>
                <div class="star star-4"></div>
                <div class="star star-5"></div>
                <div class="star star-6"></div>
                <div class="star star-7"></div>
                <div class="star star-8"></div>
                <div class="star star-9"></div>
                <div class="star star-10"></div>
                <div class="star star-11"></div>
                <div class="star star-12"></div>
                <div class="star star-13"></div>
                <div class="star star-14"></div>
                <div class="star star-15"></div>
            </div>

            <h1 class="glitch" data-text="Le duel des univers">Le duel des univers</h1>
            <h2>Quel est le meilleur !</h2>

            <!--MARVEL-->
            <div class="choose">
                <div class="versus">
                    <div class="card" data-effect="zoom">
                        <button class="card__save  js-save" type="button">
                            <i class="fa  fa-bookmark"></i>
                        </button>
                        <figure class="card__image">
                            <img src="images/marvel-avengers.jpg" alt="Short description">
                        </figure>
                        <div class="card__header">
                            <figure class="card__profile">
                                <img src="images/marvel-profile.gif" alt="Short description">
                            </figure>
                        </div>
                        <div class="card__body">
                            <h3 class="card__name">Marvel</h3>
                            <p class="card__job">astronaut & engineer</p>
                            <p class="card__bio"></p>
                        </div>
                        <div class="card__footer">
                            <p class="card__date"></p>
                            <p class=""></p>
                        </div>
                    </div>
                </div>
                <img class="versus-img" src="images/Combat-Versus4.png" alt="image versus">
                <!--DC -->
                <div class="versus">
                    <div class="card" data-effect="zoom">
                        <button class="card__save  js-save" type="button">
                            <i class="fa  fa-bookmark"></i>
                        </button>
                        <figure class="card__image">
                            <img src="images/dcbg-jl.jpg" alt="Short description">
                        </figure>
                        <div class="card__header">
                            <figure class="card__profile">
                                <img src="images/dc-profile.gif" alt="Short description">
                            </figure>
                        </div>
                        <div class="card__body">
                            <h3 class="card__name">DC</h3>
                            <p class="card__job">astronaut & engineer</p>
                            <p class="card__bio"></p>
                        </div>
                        <div class="card__footer">
                            <p class="card__date"></p>
                            <p class=""></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <aside>
        <div class="light-box">
            <nav>
                <ul>
                    <li><a href="#marvel-films">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Marvel films</a></li>
                    <li><a href="#dc-films">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            DC films</a></li>
                </ul>
                <ul>
                    <form action="/">
                        <input type="search" id="search" name="search" placeholder="Search">
                    </form>
                </ul>
            </nav>

        </div>
    </aside>

    <main class="container">
        <div class="films">

            <section class="marvel-films" id="marvel-films">
                <h2>Marvel Universe</h2>
                <p>Par ordre de viosionnage</p>
                <?php
                foreach ($ItemsMarvel as $onemovie) {
                ?>
                    <div class="flip flip-vertical">
                        <div class="front" style="background-image: url(<?= $onemovie->image ?>)">
                        </div>
                        <div class="badge-order"><?= $onemovie->viewOrder ?></div>
                        <div class="back">
                            <h1 class="text-shadow"><?= $onemovie->title ?></h1>
                            <h2>de <?= $onemovie->author ?></h2>
                            <p><?= $onemovie->date ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </section>

            <section class="dc-films" id="dc-films">
                <h2>DC Universe</h2>
                <p>Liste officielle de la DC Extended Universe par ordre de viosionnage</p>
                <?php
                foreach ($ItemsDc as $onemovie) {
                ?>
                    <div class="flip flip-vertical">
                        <div class="front" style="background-image: url(<?= $onemovie->image ?>)">
                        </div>
                        <div class="badge-order"><?= $onemovie->viewOrder ?></div>
                        <div class="back">
                            <h1 class="text-shadow"><?= $onemovie->title ?></h1>
                            <h2>de <?= $onemovie->author ?></h2>
                            <p><?= $onemovie->date ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>

                <h3>Tous les films par ordre de visionnage</h3>
                <ol>
                    <li>Wonder Woman (2017)</li>
                    <li>Superman et les hommes taupes (1951)</li>
                    <li>Batman: le film (1966)</li>
                    <li>Superman (1978)</li>
                    <li>Superman II (1980)</li>
                    <li>Joker (2019)</li>
                    <li>Chose de marais (1982)</li>
                    <li>Superman III (1983)</li>
                    <li>Supergirl (1984)</li>
                    <li>Superman IV: La quête de la paix (1987)</li>
                    <li>Le retour de Swamp Thing (1989)</li>
                    <li>Batman (1989)</li>
                    <li>Le retour de Batman (1992)</li>
                    <li>Batman pour toujours (1995)</li>
                    <li>Batman et Robin (1997)</li>
                    <li>Acier (1997)</li>
                    <li>Catwoman (2004)</li>
                    <li>Constantine (2005)</li>
                    <li>Batman commence (2005)</li>
                    <li>Le retour de Superman (2006)</li>
                    <li>Le chevalier noir (2008)</li>
                    <li>Gardiens (2009)</li>
                    <li>Jonas Hex (2010)</li>
                    <li>Lanterne verte (2011)</li>
                    <li>Le chevalier noir se lève (2012)</li>
                    <li>Lhomme dacier (2013)</li>
                    <li>Batman V Superman: laube de la justice (2016)</li>
                    <li>Suicide Squad (2016)</li>
                    <li>Ligue de justice (2017)</li>
                    <li>Justice League de Zack Snyder (2021)</li>
                    <li>Aquaman (2018)</li>
                    <li>Shazam (2018)</li>
                    <li>Oiseaux de proie (2020)</li>
                    <li>La brigade suicide (2021)</li>
                </ol>
            </section>
        </div>
    </main>

    <!-- Ancre -->
    <div class="ancre"><a href="#ancre"><img src="images/up.png" alt="ancre haut"></a></div>

    <footer>
        <p>Haingo Ramaroson</p>
    </footer>

    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src='https://cdn.rawgit.com/wagerfield/parallax/master/source/jquery.parallax.js'></script>
    <script src="./script.js"></script>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>

</html>