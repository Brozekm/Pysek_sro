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
                    <div class="card">
                        <div class="icon-wrap px-4 pt-4">
                            <div class="icon d-flex justify-content-center align-items-center bg-info rounded-circle">
                                <span class="ion-logo-ionic text-light"></span>
                            </div>
                        </div>
                        <div class="card-body pb-5 px-4">
                            <h5 class="card-title">Card title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <a href="#" class="btn btn-info">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="icon-wrap px-4 pt-4">
                            <div class="icon d-flex justify-content-center align-items-center bg-success rounded-circle">
                                <span class="ion-logo-ionic text-light"></span>
                            </div>
                        </div>
                        <div class="card-body pb-5 px-4">
                            <h5 class="card-title">Card title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <a href="#" class="btn btn-success">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="icon-wrap px-4 pt-4">
                            <div class="icon d-flex justify-content-center align-items-center bg-warning rounded-circle">
                                <span class="ion-logo-ionic text-light"></span>
                            </div>
                        </div>
                        <div class="card-body pb-5 px-4">
                            <h5 class="card-title">Card title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <a href="#" class="btn btn-warning">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
$tplHeaders->getFooter();

?>