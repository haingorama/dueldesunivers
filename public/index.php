<?php
require "../vendor/autoload.php";

use Entity\Movie;
use Entity\User;

$user1 = new User();
$user1->id = 1;
$user1->nickname = "toto";
$user1->password = "tutu";

// MARVEL MOVIES
$movie1 = new Movie();
$movie1->id = 1;
$movie1->title = "Captain America : First Avenger";
$movie1->date = "2011";
$movie1->author = "Joe Johnston";
$movie1->image = "images/1-marvel.jpg";
$movie1->user = $user1;

$movie2 = new Movie();
$movie2->id = 2;
$movie2->title = "Captain Marvel";
$movie2->date = "2019";
$movie2->author = "Anna Boden";
$movie2->image = "images/2-marvel.jpg";
$movie2->user = $user1;

$movie3 = new Movie();
$movie3->id = 3;
$movie3->title = " Iron Man";
$movie3->date = "2008";
$movie3->author = "Jon Favreau";
$movie3->image = "images/3-marvel.jpg";
$movie3->user = $user1;

$movie4 = new Movie();
$movie4->id = 4;
$movie4->title = "Thor";
$movie4->date = "2011";
$movie4->author = "Kenneth Branagh";
$movie4->image = "images/4-marvel.jpg";
$movie4->user = $user1;

$movie5 = new Movie();
$movie5->id = 5;
$movie5->title = "L'Incroyable Hulk";
$movie5->date = "2008";
$movie5->author = "Louis Leterrier";
$movie5->image = "images/5-marvel.jpg";
$movie5->user = $user1;

$movie6 = new Movie();
$movie6->id = 6;
$movie6->title = "Captain Marvel";
$movie6->date = "2019";
$movie6->author = "Anna Boden";
$movie6->image = "images/6-marvel.jpg";
$movie6->user = $user1;

$movie7 = new Movie();
$movie7->id = 7;
$movie7->title = "Avengers";
$movie7->date = "2012";
$movie7->author = "Joss Whedon";
$movie7->image = "images/7-marvel.jpg";
$movie7->user = $user1;

$movie8 = new Movie();
$movie8->id = 8;
$movie8->title = "Iron Man 3";
$movie8->date = "2013";
$movie8->author = "Shane Black";
$movie8->image = "images/8-marvel.jpg";
$movie8->user = $user1;

$movie9 = new Movie();
$movie9->id = 9;
$movie9->title = "Thor : Le Monde des ténèbres";
$movie9->date = "2013";
$movie9->author = "Alan Taylor";
$movie9->image = "images/9-marvel.jpg";
$movie9->user = $user1;

$movie10 = new Movie();
$movie10->id = 10;
$movie10->title = "Captain America, le soldat de l'hiver";
$movie10->date = "2014";
$movie10->author = "Joe et Anthony Russo";
$movie10->image = "images/10-marvel.jpg";
$movie10->user = $user1;

$movie11 = new Movie();
$movie11->id = 11;
$movie11->title = "Les Gardiens de la Galaxie";
$movie11->date = "2013";
$movie11->author = "James Gunn";
$movie11->image = "images/11-marvel.jpg";
$movie11->user = $user1;

$movie12 = new Movie();
$movie12->id = 12;
$movie12->title = "Avengers : l'ère d'Ultron";
$movie12->date = "2015";
$movie12->author = "Joss Whedon et Joss Wheddon";
$movie12->image = "images/12-marvel.jpg";
$movie12->user = $user1;

$movie13 = new Movie();
$movie13->id = 13;
$movie13->title = "Ant-Man";
$movie13->date = "2015";
$movie13->author = "Peyton Reed";
$movie13->image = "images/13-marvel.jpg";
$movie13->user = $user1;

$movie14 = new Movie();
$movie14->id = 14;
$movie14->title = "Captain America : Civil War";
$movie14->date = "2016";
$movie14->author = "Anthony et Joe Russo";
$movie14->image = "images/14-marvel.jpg";
$movie14->user = $user1;

$movie15 = new Movie();
$movie15->id = 15;
$movie15->title = "Black Panther";
$movie15->date = "2018";
$movie15->author = "Ryan Coogler";
$movie15->image = "images/15-marvel.jpg";
$movie15->user = $user1;

$movie16 = new Movie();
$movie16->id = 16;
$movie16->title = "Spider-Man : Homecoming";
$movie16->date = "2017";
$movie16->author = "Jon Watts";
$movie16->image = "images/16-marvel.jpg";
$movie16->user = $user1;

$movie17 = new Movie();
$movie17->id = 17;
$movie17->title = "Les Gardiens de la Galaxie 2";
$movie17->date = "2017";
$movie17->author = "James Gunn";
$movie17->image = "images/17-marvel.jpg";
$movie17->user = $user1;

$movie18 = new Movie();
$movie18->id = 18;
$movie18->title = "Doctor Strange";
$movie18->date = "2016";
$movie18->author = "Scott Derrickson";
$movie18->image = "images/18-marvel.jpg";
$movie18->user = $user1;

$movie19 = new Movie();
$movie19->id = 19;
$movie19->title = "Thor : Ragnarok";
$movie19->date = "2017";
$movie19->author = "Taika Waititi";
$movie19->image = "images/19-marvel.jpg";
$movie19->user = $user1;

$movie20 = new Movie();
$movie20->id = 20;
$movie20->title = "Avengers : Infinity War";
$movie20->date = "2018";
$movie20->author = "Anthony et Joe Russo";
$movie20->image = "images/20-marvel.jpg";
$movie20->user = $user1;

$movie21 = new Movie();
$movie21->id = 21;
$movie21->title = "Ant-Man et la guêpe";
$movie21->date = "2018";
$movie21->author = "Peyton Reed";
$movie21->image = "images/21-marvel.jpg";
$movie21->user = $user1;

$movie22 = new Movie();
$movie22->id = 22;
$movie22->title = "Avengers : Endgame";
$movie22->date = "2019";
$movie22->author = "Anthony et Joe Russo";
$movie22->image = "images/22-marvel.jpg";
$movie22->user = $user1;

$movie23 = new Movie();
$movie23->id = 23;
$movie23->title = "Spider-Man : Far From Home";
$movie23->date = "2019";
$movie23->author = "Jon Watts";
$movie23->image = "images/23-marvel.jpg";
$movie23->user = $user1;

//DC MOVIES
$movie101 = new Movie();
$movie101->id = 101;
$movie101->title = "Wonder Woman";
$movie101->date = "2017";
$movie101->author = "Patty Jenkins";
$movie101->image = "images/dc-1.jpeg";
$movie101->user = $user1;

$movie102 = new Movie();
$movie102->id = 102;
$movie102->title = "Wonder Woman 1984";
$movie102->date = "2020";
$movie102->author = "Patty Jenkins";
$movie102->image = "images/dc-2.jpg";
$movie102->user = $user1;

$movie103 = new Movie();
$movie103->id = 103;
$movie103->title = "Man of Steel";
$movie103->date = "2013";
$movie103->author = "Zack Snyder";
$movie103->image = "images/dc-3.jpg";
$movie103->user = $user1;

$movie104 = new Movie();
$movie104->id = 104;
$movie104->title = "Batman v Superman: L’aube de la justice";
$movie104->date = "2016";
$movie104->author = "Zack Snyder";
$movie104->image = "images/dc-4.jpg";
$movie104->user = $user1;

$movie105 = new Movie();
$movie105->id = 105;
$movie105->title = "Suicide Squad";
$movie105->date = "2016";
$movie105->author = "David Ayer";
$movie105->image = "images/dc-5.jpg";
$movie105->user = $user1;

$movie106 = new Movie();
$movie106->id = 106;
$movie106->title = "Justice League";
$movie106->date = "2017";
$movie106->author = "Zack Snyder";
$movie106->image = "images/dc-6.jpg";
$movie106->user = $user1;

$movie107 = new Movie();
$movie107->id = 107;
$movie107->title = "Justice League Version HBO Max";
$movie107->date = "2021";
$movie107->author = "Zack Snyder";
$movie107->image = "images/dc-7.jpg";
$movie107->user = $user1;

$movie108 = new Movie();
$movie108->id = 108;
$movie108->title = "Aquaman";
$movie108->date = "2018";
$movie108->author = "James Wan ";
$movie108->image = "images/dc-8.jpg";
$movie108->user = $user1;

$movie109 = new Movie();
$movie109->id = 109;
$movie109->title = "Shazam!";
$movie109->date = "2019";
$movie109->author = "David F. Sandberg";
$movie109->image = "images/dc-9.jpg";
$movie109->user = $user1;

$movie110 = new Movie();
$movie110->id = 110;
$movie110->title = "Birds of Prey et la fantabuleuse histoire de Harley Quinn";
$movie110->date = "2020";
$movie110->author = "Cathy Yan";
$movie110->image = "images/dc-10.jpg";
$movie110->user = $user1;

$ItemsMarvel = [$movie1, $movie2, $movie3, $movie4, $movie5, $movie6, $movie7, $movie8, $movie9, $movie10, $movie11, $movie12, $movie13, $movie14, $movie15, $movie16, $movie17, $movie18, $movie19, $movie20, $movie21, $movie22, $movie23];
$ItemsDc = [$movie101, $movie102, $movie103, $movie104, $movie105, $movie106, $movie107, $movie108, $movie109, $movie110];

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
                            <img src="images/marvel-avengers.jpg" alt="Short description">
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

    <main>
        <div class="films">
            <section class="marvel-films">
                <h2>Marvel Universe</h2>
                <p>Par ordre de viosionnage</p>
                <?php
                foreach ($ItemsMarvel as $onemovie) {
                ?>
                    <div class="flip flip-vertical">
                        <div class="front" style="background-image: url(<?= $onemovie->image ?>)">
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
                <h2>DC Universe</h2>
                <p>Liste officielle de la DC Extended Universe par ordre de viosionnage</p>
                <?php
                foreach ($ItemsDc as $onemovie) {
                ?>
                    <div class="flip flip-vertical">
                        <div class="front" style="background-image: url(<?= $onemovie->image ?>)">
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

    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src='https://cdn.rawgit.com/wagerfield/parallax/master/source/jquery.parallax.js'></script>
    <script src="./script.js"></script>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>

</html>