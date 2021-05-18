<?php

include __DIR__ . "/header.php";
?>

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

<?php
include __DIR__ . "/footer.php";
?>