<?php
// nactu rozhrani kontroleru
require_once(DIRECTORY_CONTROLLERS."/IController.interface.php");

/**
 * Ovladac zajistujici vypsani uvodni stranky.
 */
class ContactController implements IController {

    /**
     * Vrati obsah uvodni stranky.
     * @param string $pageTitle     Nazev stranky.
     * @return string               Vypis v sablone.
     */
    public function show(string $pageTitle):string {
        //// vsechna data sablony budou globalni
        global $tplData;
        $tplData = [];
        $tplData['podminka']=false;
        if(isset($_POST['Odeslat'])){
            if(isset($_POST['firstName'])){
                if(isset($_POST['lastName'])){
                    if(isset($_POST['email'])){
                        if (isset($_POST['subject'])){
                            if(isset($_POST['message'])){
                                $tplData['podminka'] = true;
                                $fname = htmlspecialchars($_POST['firstName']);
                                $lname = htmlspecialchars($_POST['lastName']);
                                $mailFrom = htmlspecialchars($_POST['email']);
                                $subject = htmlspecialchars($_POST['subject']);
                                $message = htmlspecialchars($_POST['message']);

                                $mailTo = "brozek.m99@gmail.com";
                                $headers = "From: ".$mailFrom;
                                $txt = "Příchozí email z webové stránky wwww.pysek.cz.\n"
                                        ."Jméno: ".$fname." ".$lname."\n\n".$message;

                                mail($mailTo,$subject,$txt,$headers);
                            }
                        }
                    }
                }
            }
        }
        // nazev
        $tplData['title'] = $pageTitle;
        ob_start();
        // pripojim sablonu, cimz ji i vykonam
        require(DIRECTORY_VIEWS ."/Contact.tpl.php");
        // ziskam obsah output bufferu, tj. vypsanou sablonu
        $obsah = ob_get_clean();

        // vratim sablonu naplnenou daty
        return $obsah;
    }

}

?>