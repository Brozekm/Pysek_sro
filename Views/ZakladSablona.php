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
                <a class="navbar-brand" href="index.php?page=uvod"><img src="images/PIP_10.jpg" alt="Logo" style="width:40px; border-radius: 50%"> Pyšek, s.r.o.</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span>
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=uvod"><span class="fa fa-home" style="color: white"></span> Úvod</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="fa fa-cog" style="color: white"></span> Služby</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="fa fa-history" style="color: white"></span> Reference</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="fa fa-phone" style="color: white"></span> Kontaktovat</a>
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
        <!--
        <div class="text-center" >
            <h3 style="color: gray; font-family: Arial; padding: 10px">Spolupracujeme</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <img src="images/biggest1.png" class="rounded" width="90%" >
                </div>
                <div class="col-3">
                    <img src="images/swietelsky.jpg" class="rounded" width="90%" >
                </div>
                <div class="col-3">
                    <img src="images/strabag.png" class="rounded" width="90%">
                </div>
                <div class="col-3">
                    <img src="images/roadfin.jpg" class="rounded" width="90%">
                </div>
            </div>
             <div class="row">
                <div class="col-2">
                    </div>
                <div class="col-2">
                    <img src="images/vida.png" class="rounded" width="90%" >
                </div>
                <div class="col-2">
                    <img src="images/swietelsky.jpg" class="rounded" width="90%" >
                </div>
                <div class="col-2">
                    <img src="images/strabag.png" class="rounded" width="90%">
                </div>
                 <div class="col-2">
                    <img src="images/roadfin.jpg" class="rounded" width="90%">
                </div>
                <div class="col-2">
                    </div>

              </div>

        </div>
        -->
        <div class="text-center" >
            <h3 style="color: gray; font-family: Arial; padding: 10px">Spolupracujeme</h3>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <img src="images/vida.png" class="rounded" width="90%" >
                        </div>
                        <div class="col-3">
                            <img src="images/swietelsky.jpg" class="rounded" width="90%" >
                        </div>
                        <div class="col-3">
                            <img src="images/strabag.png" class="rounded" width="90%">
                        </div>
                        <div class="col-3">
                            <img src="images/roadfin.jpg" class="rounded" width="90%">
                        </div>
                    </div>
                 </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <img src="images/biggest1.png" class="rounded" width="90%" >
                        </div>
                        <div class="col-3">
                            <img src="images/swietelsky.jpg" class="rounded" width="90%" >
                        </div>
                        <div class="col-3">
                            <img src="images/strabag.png" class="rounded" width="90%">
                        </div>
                        <div class="col-3">
                            <img src="images/roadfin.jpg" class="rounded" width="90%">
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
