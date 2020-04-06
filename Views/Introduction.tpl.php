<?php

global $tplData;
require(DIRECTORY_VIEWS ."/ZakladSablona.php");
$tplHeaders = new ZakladSablona();


$tplHeaders->getHeader($tplData['title']);
?>

    <section class="ftco-section bg-light" id="cards">
        <div class="container jumbotron bg-white card-styles shadow">
            <div>
                <h1>O nás</h1>
                <hr>
                <figure>
                    <img class="logo" src="images/PIP_10.jpg">
                </figure>
                <div style="text-align: justify">
                <p>Naše společnost byla založena roku 2006, jako nástupce sdružení OSVČ a pracovníků, pohybujících se v oboru inženýrská geodézie a mapování již od roku 1984 .</p>
                <p> Později přibyly zkušenosti s pracemi v oblasti katastru nemovitostí ČR a některé speciální práce inženýrské geodézie. Stěžejní činností naší společnosti nadále zůstávají práce inženýrské geodézie.</p>
                 <p>   Snahou společnosti je vytvářet s našimi zákazníky dlouhodobý vztah, ve kterém nabízíme nejen odvedení kvalitní geodetické práce, ale i spolupráci při přípravě a změnách projektové dokumentace,
                     poradenství v problematice vztahů inženýrských staveb a Katastru nemovitostí a přizpůsobení k individuálním požadavkům zákazníka.</p> <h4>Využívané technologie</h4><hr>
                <p>   Po celou dobu existence naší společnosti se snažíme udržovat krok s technologickým vývojem geodetických přístrojů a softwarového vybavení.</p>
                <p> V současné době jsme vybaveni robotickými stanicemi Trimble, staršími totálními stanicemi Sokkia, nivelačními přístroji Leica a GeoMax.</p>
                <p> Naměřená data zpracováváme pomocí produktů předních výrobců geodetického SW Bentley (MicroStation v.8i, v.10),
                    Trimble (Trimble Business Center), Gepro (Kokeš), Geoline (Groma), ATLAS (Atlas DMT) a další.</p>
                </div>
            </div>
        </div>
    </section>
<?php
$tplHeaders->getFooter();

?>