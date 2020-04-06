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
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
        <body>

        <div class="main-section">

        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php?page=uvod"><img src="images/PIP_10.jpg" alt="Logo" style="width:40px; border-radius: 50%"> Pysek.cz</a>
                <button class="navbar-toggler fa fa-bars" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link"  href="index.php?page=uvod"><span class="fa fa-home" style="color: <?php if ($pageTitle == "Pyšek s.r.o."){echo "#1faae5";}?>"></span> Úvod</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=sluzby"><span class="fa fa-cog" style="color: <?php if ($pageTitle == "Služby"){echo "#1faae5";}?>"></span> Služby</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=reference"><span class="fa fa-history" style="color: <?php if ($pageTitle == "Reference"){echo "#1faae5";}?>"></span> Reference</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=kontakt"><span class="fa fa-phone" style="color: <?php if ($pageTitle == "Kontaktovat"){echo "#1faae5";}?>"></span> Kontaktovat</a>
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
                            <h2 class="mb-5" style="text-shadow: 2px 2px black">PYŠEK</h2>
                            <h3 class="mb-5" style="color: white; text-shadow: 2px 2px black">zeměměřické práce, s.r.o.</h3>
                            <div class="designed d-inline-block">
                                <d class="d-flex align-items-center">
                                    <a href="index.php?page=kontakt" class="btn btn-outline-white btn-md ">Kontaktovat</a>
                                </d>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <?php
    }
    public function getContactHeader(string $pageTitle){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title><?php echo $pageTitle ?></title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
        <body>

        <div class="main-section">

        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php?page=uvod"><img src="images/PIP_10.jpg" alt="Logo" style="width:40px; border-radius: 50%"> Pysek.cz</a>
                <button class="navbar-toggler fa fa-bars" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link"  href="index.php?page=uvod"><span class="fa fa-home" style="color: <?php if ($pageTitle == "Pyšek s.r.o."){echo "#1faae5";}?>"></span> Úvod</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=sluzby"><span class="fa fa-cog" style="color: <?php if ($pageTitle == "Služby"){echo "#1faae5";}?>"></span> Služby</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=reference"><span class="fa fa-history" style="color: <?php if ($pageTitle == "Reference"){echo "#1faae5";}?>"></span> Reference</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=kontakt"><span class="fa fa-phone" style="color: <?php if ($pageTitle == "Kontaktovat"){echo "#1faae5";}?>"></span> Kontaktovat</a>
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
                            <h2 class="mb-5" style="text-shadow: 2px 2px black">PYŠEK</h2>
                            <h3 class="mb-5" style="color: white; text-shadow: 2px 2px black">zeměměřické práce, s.r.o.</h3>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    public function getFooter(){
        ?>
        <section class="d-print-none">
        <div class="text-center" >
            <h3 style="background-color: #47B8E9;font-weight: bold; color: white; padding: 10px">Spolupracujeme:</h3>
        </div>
        <hr>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container d-none d-lg-block">
                    <div class="row justify-content-around text-center">
                        <div class="col-3">
                            <p>AVOS Plzeň, spol. s r.o.</p>
                            <p>AZ Prezip a.s.</p>
                            <p>BAGGER BS, s.r.o.</p>
                        </div>
                        <div class="col-4">
                            <h5 style="color: gray">BIGGEST construct s.r.o.</h5>
                            <h5 style="color: gray">ROADFIN STAVBY s.r.o.</h5>
                            <h5 style="color: gray">SWIETELSKY stavební s.r.o.</h5>
                        </div>
                        <div class="col-3">
                            <p>BIGGEST s.r.o.</p>
                            <p>BONA FIDE Plzeň, s.r.o.</p>
                            <p>D Beton</p>
                        </div>
                    </div>
                 </div>
                 <!-- smaller screen -->
                 <div class="container d-lg-none d-xl-none">
                    <div class="row justify-content-around text-center">
                        <div class="col-3">
                            <p style="font-size: 3vw">BIGGEST construct s.r.o.</p>
                        </div>
                        <div class="col-3">
                            <p style="font-size: 3vw">ROADFIN STAVBY s.r.o.</p>
                        </div>
                        <div class="col-3">
                            <p style="font-size: 3vw">SWIETELSKY stavební s.r.o.</p>
                        </div>
                    </div>
                 </div>

            </div>
            <div class="carousel-item">
              <div class="container d-none d-lg-block">
                    <div class="row justify-content-around text-center">
                        <div class="col-3">
                            <p>GREEN KAVO s.r.o.</p>
                            <p>HOCHTIEF CZ a.s.</p>
                            <p>HSF Systém a.s.</p>
                        </div>
                        <div class="col-4">
                            <h5 style="color: gray">BIGGEST construct s.r.o.</h5>
                            <h5 style="color: gray">ROADFIN STAVBY s.r.o.</h5>
                            <h5 style="color: gray">SWIETELSKY stavební s.r.o.</h5>
                        </div>
                        <div class="col-3">
                            <p>INVESTBAU CZ s.r.o.</p>
                            <p>Pflaument Investment s.r.o.</p>
                            <p>PRENTICE s.r.o.</p>
                        </div>
                    </div>
                 </div>
                 <div class="container d-lg-none d-xl-none">
                    <div class="row justify-content-around text-center">
                        <div class="col-3">
                            <p style="font-size: 3vw">BIGGEST construct s.r.o.</p>
                        </div>
                        <div class="col-3">
                            <p style="font-size: 3vw">ROADFIN STAVBY s.r.o.</p>
                        </div>
                        <div class="col-3">
                            <p style="font-size: 3vw">SWIETELSKY stavební s.r.o.</p>
                        </div>
                    </div>
                 </div>
            </div>
            <div class="carousel-item">
                <div class="container d-none d-lg-block">
                    <div class="row justify-content-around text-center">
                        <div class="col-3">
                            <p>PROMONASTA s.r.o.</p>
                            <p>PMK Drill s.r.o.</p>
                            <p>SPORTOVNÍ PODLAHY ZLÍN, s.r.o.</p>
                        </div>
                        <div class="col-4">
                            <h5 style="color: gray">BIGGEST construct s.r.o.</h5>
                            <h5 style="color: gray">ROADFIN STAVBY s.r.o.</h5>
                            <h5 style="color: gray">SWIETELSKY stavební s.r.o.</h5>
                        </div>
                        <div class="col-3">
                            <p>STAVBY TRNKA s.r.o.</p>
                            <p>Stavitelství Kamínek s.r.o.</p>
                            <p>STRABAG a.s.</p>
                        </div>
                    </div>
                 </div>
                 <!-- smaller screen -->
                 <div class="container d-lg-none d-xl-none">
                    <div class="row justify-content-around text-center">
                        <div class="col-3">
                            <p style="font-size: 3vw">BIGGEST construct s.r.o.</p>
                        </div>
                        <div class="col-3">
                            <p style="font-size: 3vw">ROADFIN STAVBY s.r.o.</p>
                        </div>
                        <div class="col-3">
                            <p style="font-size: 3vw">SWIETELSKY stavební s.r.o.</p>
                        </div>
                    </div>
                 </div>

            </div>
            <div class="carousel-item">
                <div class="container d-none d-lg-block">
                    <div class="row justify-content-around text-center">
                        <div class="col-3">
                            <p>STRABAG Asfalt s.r.o.</p>
                            <p>STRABAG Rail a.s.</p>
                            <p>TERRASYSTEM, s.r.o.</p>
                        </div>
                        <div class="col-4">
                            <h5 style="color: gray">BIGGEST construct s.r.o.</h5>
                            <h5 style="color: gray">ROADFIN STAVBY s.r.o.</h5>
                            <h5 style="color: gray">SWIETELSKY stavební s.r.o.</h5>
                        </div>
                        <div class="col-3">
                            <p>VIDA GROUP s.r.o.</p>
                            <p>Vodohospodářské stavby spol s.r.o.</p>
                            <p>Marek Bořík, inženýrská činnost</p>
                        </div>
                    </div>
                 </div>
                 <!-- smaller screen -->
                 <div class="container d-lg-none d-xl-none">
                    <div class="row justify-content-around text-center">
                        <div class="col-3">
                            <p style="font-size: 3vw">BIGGEST construct s.r.o.</p>
                        </div>
                        <div class="col-3">
                            <p style="font-size: 3vw">ROADFIN STAVBY s.r.o.</p>
                        </div>
                        <div class="col-3">
                            <p style="font-size: 3vw">SWIETELSKY stavební s.r.o.</p>
                        </div>
                    </div>
                 </div>

            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        </section>

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

    public function getGrayFooter(){
        ?>
        <section class="bg-light d-print-none">
        <div class="text-center" >
            <h3 style="background-color: #47B8E9;font-weight: bold; color: white; padding: 10px">Spolupracujeme:</h3>
        </div>
        <hr>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container d-none d-lg-block">
                    <div class="row justify-content-around text-center">
                        <div class="col-3">
                            <p>AVOS Plzeň, spol. s r.o.</p>
                            <p>AZ Prezip a.s.</p>
                            <p>BAGGER BS, s.r.o.</p>
                        </div>
                        <div class="col-4">
                            <h5 style="color: gray">BIGGEST construct s.r.o.</h5>
                            <h5 style="color: gray">ROADFIN STAVBY s.r.o.</h5>
                            <h5 style="color: gray">SWIETELSKY stavební s.r.o.</h5>
                        </div>
                        <div class="col-3">
                            <p>BIGGEST s.r.o.</p>
                            <p>BONA FIDE Plzeň, s.r.o.</p>
                            <p>D Beton</p>
                        </div>
                    </div>
                 </div>
                 <!-- smaller screen -->
                 <div class="container d-lg-none d-xl-none">
                    <div class="row justify-content-around text-center">
                        <div class="col-3">
                            <p style="font-size: 3vw">BIGGEST construct s.r.o.</p>
                        </div>
                        <div class="col-3">
                            <p style="font-size: 3vw">ROADFIN STAVBY s.r.o.</p>
                        </div>
                        <div class="col-3">
                            <p style="font-size: 3vw">SWIETELSKY stavební s.r.o.</p>
                        </div>
                    </div>
                 </div>

            </div>
            <div class="carousel-item">
              <div class="container d-none d-lg-block">
                    <div class="row justify-content-around text-center">
                        <div class="col-3">
                            <p>GREEN KAVO s.r.o.</p>
                            <p>HOCHTIEF CZ a.s.</p>
                            <p>HSF Systém a.s.</p>
                        </div>
                        <div class="col-4">
                            <h5 style="color: gray">BIGGEST construct s.r.o.</h5>
                            <h5 style="color: gray">ROADFIN STAVBY s.r.o.</h5>
                            <h5 style="color: gray">SWIETELSKY stavební s.r.o.</h5>
                        </div>
                        <div class="col-3">
                            <p>INVESTBAU CZ s.r.o.</p>
                            <p>Pflaument Investment s.r.o.</p>
                            <p>PRENTICE s.r.o.</p>
                        </div>
                    </div>
                 </div>
                 <div class="container d-lg-none d-xl-none">
                    <div class="row justify-content-around text-center">
                        <div class="col-3">
                            <p style="font-size: 3vw">BIGGEST construct s.r.o.</p>
                        </div>
                        <div class="col-3">
                            <p style="font-size: 3vw">ROADFIN STAVBY s.r.o.</p>
                        </div>
                        <div class="col-3">
                            <p style="font-size: 3vw">SWIETELSKY stavební s.r.o.</p>
                        </div>
                    </div>
                 </div>
            </div>
            <div class="carousel-item">
                <div class="container d-none d-lg-block">
                    <div class="row justify-content-around text-center">
                        <div class="col-3">
                            <p>PROMONASTA s.r.o.</p>
                            <p>PMK Drill s.r.o.</p>
                            <p>SPORTOVNÍ PODLAHY ZLÍN, s.r.o.</p>
                        </div>
                        <div class="col-4">
                            <h5 style="color: gray">BIGGEST construct s.r.o.</h5>
                            <h5 style="color: gray">ROADFIN STAVBY s.r.o.</h5>
                            <h5 style="color: gray">SWIETELSKY stavební s.r.o.</h5>
                        </div>
                        <div class="col-3">
                            <p>STAVBY TRNKA s.r.o.</p>
                            <p>Stavitelství Kamínek s.r.o.</p>
                            <p>STRABAG a.s.</p>
                        </div>
                    </div>
                 </div>
                 <!-- smaller screen -->
                 <div class="container d-lg-none d-xl-none">
                    <div class="row justify-content-around text-center">
                        <div class="col-3">
                            <p style="font-size: 3vw">BIGGEST construct s.r.o.</p>
                        </div>
                        <div class="col-3">
                            <p style="font-size: 3vw">ROADFIN STAVBY s.r.o.</p>
                        </div>
                        <div class="col-3">
                            <p style="font-size: 3vw">SWIETELSKY stavební s.r.o.</p>
                        </div>
                    </div>
                 </div>

            </div>
            <div class="carousel-item">
                <div class="container d-none d-lg-block">
                    <div class="row justify-content-around text-center">
                        <div class="col-3">
                            <p>STRABAG Asfalt s.r.o.</p>
                            <p>STRABAG Rail a.s.</p>
                            <p>TERRASYSTEM, s.r.o.</p>
                        </div>
                        <div class="col-4">
                            <h5 style="color: gray">BIGGEST construct s.r.o.</h5>
                            <h5 style="color: gray">ROADFIN STAVBY s.r.o.</h5>
                            <h5 style="color: gray">SWIETELSKY stavební s.r.o.</h5>
                        </div>
                        <div class="col-3">
                            <p>VIDA GROUP s.r.o.</p>
                            <p>Vodohospodářské stavby spol s.r.o.</p>
                            <p>Marek Bořík, inženýrská činnost</p>
                        </div>
                    </div>
                 </div>
                 <!-- smaller screen -->
                 <div class="container d-lg-none d-xl-none">
                    <div class="row justify-content-around text-center">
                        <div class="col-3">
                            <p style="font-size: 3vw">BIGGEST construct s.r.o.</p>
                        </div>
                        <div class="col-3">
                            <p style="font-size: 3vw">ROADFIN STAVBY s.r.o.</p>
                        </div>
                        <div class="col-3">
                            <p style="font-size: 3vw">SWIETELSKY stavební s.r.o.</p>
                        </div>
                    </div>
                 </div>

            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        </section>
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