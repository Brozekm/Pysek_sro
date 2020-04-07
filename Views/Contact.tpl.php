<?php

global $tplData;
require(DIRECTORY_VIEWS ."/ZakladSablona.php");
$tplHeaders = new ZakladSablona();


$tplHeaders->getContactHeader($tplData['title']);
?>
    <section class="ftco-section bg-light" id="cards">
        <div class="container card-styles">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow mb-1">
                        <div class="card-body text-center">
                            <!--<img src="images/trimble.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">-->
                            <h5 class="card-title">Martin Brožek</h5>
                            <h5 class="card-title" style="color: gray; font-size: 16px">Geodet</h5>
                            <hr>
                            <span class="fa fa-phone"></span> +420 605 732 874
                            <hr>
                            <span class="fa fa-envelope"></span> mbrozek@volny.cz
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card shadow mb-1" >
                        <div class="card-body text-center">
                            <!--<img src="images/trimble.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">-->
                            <h5 class="card-title">Ing. Ivan Pyšek</h5>
                            <h5 class="card-title" style="color: gray; font-size: 16px">Geodet</h5>
                            <hr>
                            <span class="fa fa-phone"></span> +420 603 106 529
                            <hr>
                            <span class="fa fa-envelope"></span> pysek@volny.cz
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card shadow mb-1">
                        <div class="card-body text-center">
                            <!--<img src="images/trimble.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">-->
                            <h5 class="card-title">Ing. Martin Grotz</h5>
                            <h5 class="card-title" style="color: gray; font-size: 16px">Geodet</h5>
                            <hr>
                            <span class="fa fa-phone"></span> +420 737 747 422
                            <hr>
                            <span class="fa fa-envelope"></span> grotz1965@gmail.com
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <section class="ftco-section bg-white d-print-none" id="cards">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 style="background-color: #47B8E9;width: 100%; color: white; padding: 10px"><img src="images/PIP_10.jpg" alt="Logo" style="width:40px; border-radius: 50%">  Email byl úspěšně odeslán.</h3>
                                </div>
                                <div class="modal-body">
                                    <h4>Děkujeme za Váš zájem. </h4>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" value="Zavřít" class="btn btn-primary btn-md text-white" data-dismiss="modal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="" method="POST">


                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Jméno</label>
                                <input type="text" id="fname" name="firstName" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="lname">Příjmení</label>
                                <input type="text" id="lname" name="lastName" class="form-control" required>
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="subject">Předmět</label>
                                <input type="subject" id="subject" name="subject" class="form-control" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="message">Zpráva</label>
                                <textarea name="message" id="message" rows="15" cols="30" class="form-control" placeholder="Zde pište zprávu..." style="height: 150px !important; resize: none" required></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" name="Odeslat" class="btn btn-primary btn-md text-white">

                            </div>
                        </div>


                    </form>
                </div>
                <div class="col-lg-5 ml-auto">
                    <div class="p-4 mb-3 bg-white">
                        <p class="mb-0 font-weight-bold">Fakturační adresa</p>
                        <p class="mb-4">Bezinková 36, 312 00 Plzeň</p>

                        <p class="mb-0 font-weight-bold">IČO</p>
                        <p class="mb-4">279 69 541</p>

                        <p class="mb-0 font-weight-bold">DIČ</p>
                        <p class="mb-4">CZ27969541</p>

                        <p class="mb-0 font-weight-bold">Číslo účtu</p>
                        <p class="mb-4">MONETA Money Bank: 181039050/0600</p>



                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
$tplHeaders->getGrayFooter();

if($tplData['podminka']==true){
?>
<script type="text/javascript">
    $(document).ready(function () {
        setTimeout(function () {
            $("#myModal").modal('show');
            setTimeout(function () {
                $("#myModal").modal('hide');
            },4000)
        },0)
    });
</script>
    <?php
}
?>
</body>
</html>
