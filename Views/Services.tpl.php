<?php

global $tplData;
require(DIRECTORY_VIEWS ."/ZakladSablona.php");
$tplHeaders = new ZakladSablona();


$tplHeaders->getHeader($tplData['title']);
?>
<section class="ftco-section bg-light" id="cards">
    <div class="container card-styles">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow mb-1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Inženýrská geodezie</h5>
                        <hr>
                        <p class="card-text">Vytyčovací sitě stavby</p>
                        <hr>
                        <p class="card-text">Kompletní geodetické práce pro liniové a silniční stavby</p>
                        <hr>
                        <p class="card-text">Zaměření a výpočet kubatur zemních prací</p>
                        <hr>
                        <p class="card-text">Zpracování 3D modelu pro stavební stroje</p>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card shadow mb-1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Katastr nemovitostí</h5>
                        <hr>
                        <p class="card-text">Geometrické plány</p>
                        <hr>
                        <p class="card-text">Zřízení věcného břemene</p>
                        <hr>
                        <p class="card-text">Vytyčení vlastnické hranice</p>
                        <hr>
                        <p class="card-text">Vytyčení rodinných domů</p>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card shadow mb-1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mapovací práce a dokumentace skutečného provedení</h5>
                        <hr>
                        <p class="card-text">Výškopisné zaměření pro projekt</p>
                        <hr>
                        <p class="card-text">Dokumentace skutečného provedení stavby</p>
                        <hr>
                        <p class="card-text">Zpracování ve směrnici ŘSD, VaKKV, DTM PK</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php
$tplHeaders->getFooter();

?>
