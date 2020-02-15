<?php
//////////////////////////////////////////////////////////////////
/////////////////  Globalni nastaveni aplikace ///////////////////
//////////////////////////////////////////////////////////////////

//// Dostupne stranky webu ////

/** Adresar kontroleru. */
const DIRECTORY_CONTROLLERS = "Controllers";
/** Adresar sablon */
const DIRECTORY_VIEWS = "Views";

/** Dostupne webove stranky. */
const WEB_PAGES = array(
    // uvodni stranka
    "uvod" => array("file_name" => "IntroductionController.class.php",
        "class_name" => "IntroductionController",
        "title" => "Pyšek s.r.o."),
    );

/** Klic defaultni webove stranky. */
const DEFAULT_WEB_PAGE_KEY = "uvod";

?>
