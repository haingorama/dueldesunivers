<?php
require "../vendor/autoload.php";

use Entity\Movie;
use Entity\User;

$user1 = new User();
$user1->id = 1;
$user1->nickname = "toto";
$user1->password = "tutu";

$movie1 = new Movie();
$movie1->id = 1;
$movie1->title = "Second avenger";
$movie1->date = "2011";
$movie1->author = "Joe Johnson";
$movie1->url_image = "https://fr.web.img4.acsta.net/medias/nmedia/18/84/69/36/19774937.jpg";
$movie1->user = $user1;

$movie2 = new Movie();
$movie2->id = 2;
$movie2->title = "Captain Marvel";
$movie2->date = "2011";
$movie2->author = "Joe Johnson";
$movie2->url_image = "https://d1fmx1rbmqrxrr.cloudfront.net/cnet/i/edit/2019/01/captain-marvel-tout-savoir.jpg";
$movie2->user = $user1;

$movie3 = new Movie();
$movie3->id = 3;
$movie3->title = "Spider man";
$movie3->date = "2011";
$movie3->author = "Joe Johnson";
$movie3->url_image = "https://fr.web.img6.acsta.net/newsv7/19/07/05/10/38/4410013.jpg";
$movie3->user = $user1;

$ItemsMarvel = [$movie1, $movie2, $movie3];
$ItemsDc = [];

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

    <header class="container">
        <h1 class="glitch" data-text="Le duel des univers">Le duel des univers</h1>
        <h2>Quel est le meilleur !</h2>
    </header>

    <main>
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
        </div>

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
                        <p class="card__bio"> American astronaut, engineer, and the first person to walk on the Moon.</p>
                    </div>
                    <div class="card__footer">
                        <p class="card__date">Feb 10 2018</p>
                        <p class=""></p>
                    </div>
                </div>
            </div>

            <img class="versus-img" src="images/Combat-Versus4.png" alt="image versus">

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
                        <p class="card__bio"> American astronaut, engineer, and the first person to walk on the Moon.</p>
                    </div>
                    <div class="card__footer">
                        <p class="card__date">Feb 10 2018</p>
                        <p class=""></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="films">
            <section class="marvel-films">
                <h2>Tous les films Marvel</h2>
                <?php
                foreach ($ItemsMarvel as $onemovie) {
                ?>
                    <div class="flip flip-vertical">
                        <div class="front" style="background-image: url(<?= $onemovie->url_image ?>)">
                        </div>
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

            <section class="dc-films">
                <h2>Tous les films DC</h2>
                <?php
                foreach ($ItemsDc as $onemovie) {
                ?>
                    <div class="flip flip-vertical">
                        <div class="front" style="background-image: url(<?= $onemovie->url_image ?>)">
                        </div>
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
        </div>

    </main>

    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src='https://cdn.rawgit.com/wagerfield/parallax/master/source/jquery.parallax.js'></script>
    <script src="./script.js"></script>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>

</html>