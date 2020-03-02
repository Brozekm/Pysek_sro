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
    "reference" => array("file_name" => "ReferencesController.class.php",
        "class_name" => "ReferencesController",
        "title" => "Reference"),
    "kontakt" => array("file_name" => "ContactController.class.php",
        "class_name" => "ContactController",
        "title" => "Kontaktovat")
    );

/** Klic defaultni webove stranky. */
const DEFAULT_WEB_PAGE_KEY = "uvod";

?>
