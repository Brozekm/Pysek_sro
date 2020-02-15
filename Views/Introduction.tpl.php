<?php

global $tplData;
require(DIRECTORY_VIEWS ."/ZakladSablona.php");
$tplHeaders = new ZakladSablona();


$tplHeaders->getHeader($tplData['title']);
?>

    <section class="ftco-section bg-light" id="cards">
        <div class="container jumbotron bg-white card-styles">
            <div>
                <h1 class="">O nás</h1>
                <hr>
                <figure>
                    <img src="images/PIP_10.jpg" style="width: 250px; float: right">
                </figure>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Arcu non odio euismod lacinia at quis risus sed. Diam donec adipiscing tristique risus nec. Pellentesque sit amet porttitor eget. Viverra suspendisse potenti nullam ac. Malesuada fames ac turpis egestas maecenas pharetra convallis posuere morbi. Semper quis lectus nulla at volutpat diam ut venenatis. Aliquam sem fringilla ut morbi tincidunt augue. Viverra nam libero justo laoreet sit amet cursus. Urna porttitor rhoncus dolor purus non enim praesent elementum facilisis. Et malesuada fames ac turpis egestas sed tempus urna. Nisl suscipit adipiscing bibendum est ultricies integer quis. Sed risus ultricies tristique nulla aliquet enim tortor at. Ac turpis egestas integer eget aliquet nibh praesent tristique magna. Facilisis volutpat est velit egestas dui. Pellentesque habitant morbi tristique senectus et netus.</p>
            </div>
        </div>
    </section>
<?php
$tplHeaders->getFooter();

?>