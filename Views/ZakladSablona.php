<?php


class ZakladSablona{

    public function getHeader(string $pageTitle){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title><?php echo $pageTitle ?></title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">

            <link rel="stylesheet" href="css/style.css">
        </head>
        <body>

        <div class="main-section">

        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php?page=uvod"><img src="images/PIP_10.jpg" alt="Logo" style="width:40px; border-radius: 50%"> Pyšek, s.r.o.</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span>
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?page=uvod">Úvod</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Služby</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Reference</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontaktovat</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

        <section class="hero-wrap" style="background-image: url(images/trimble.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row description align-items-center justify-content-center">
                    <div class="col-md-8 text-center">
                        <div class="text">
                            <h2 class="mb-5">PYŠEK</h2>
                            <h3 class="mb-5" style="color: white">zeměměřické práce, s.r.o.</h3>
                            <div class="designed d-inline-block">
                                <d class="d-flex align-items-center">

                                    <!--<div class="ml-3"><p class="mb-0">Kontaktovat</p></div>-->
                                    <a href="#" class="btn btn-outline-white btn-md ">Kontaktovat</a>
                                </d>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <?php
    }

    public function getFooter(){
        ?>
        <section class="ftco-section ftco-section-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 text-center">
                        <h2 class="heading-section mb-4 pb-md-3">
                            Spolupracujeme
                        </h2>
                        <div class="row">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-center">
                                <div class="bright">

                                </div>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
                                <div class="bright">
                                    <img src="images/berger.png" class="rounded" width="90%" >
                                </div>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
                                <div class="bright">
                                    <img src="images/swietelsky.jpg" class="rounded" width="90%" >
                                </div>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
                                <div class="bright">
                                    <img src="images/strabag.png" class="rounded" width="90%">
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-center">
                                <div class="bright">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        </div>

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/main.js"></script>
        </body>
        </html>


    <?php
    }
}
