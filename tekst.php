<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 25.01.2018
 * Time: 10:32
 */

class tekst
{ //klassi algus
//klassi omadused/väljad (fields)

//klassi muutuja
    var $sone = ''; //teksti kirjeldamine, alguses jääb tühjaks
    //klassi tegevused, pannakse kirja meetoditega
    function maaraTekst($sone) { //I sone on klassi muutuja, II parameeter
        $this->sone = $sone;
    }
    //teksti väljastamine
    function prindiTekst() {
        echo $this->sone.'<br />';
    }
} //klassi lõpp