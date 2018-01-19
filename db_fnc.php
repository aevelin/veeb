<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 19.01.2018
 * Time: 12:30
 */

require_once 'db_conf.php'; /*Sisu on võimalik kasutada. Konstandid on võimalik kasutada*/
/*Funktsioon, mis tekitab serveriga ühenduse ja valib andmebaasi*/
function yhendus() {
    $yhendus = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); /*mysqli on täiendatud variant*/
    if (!$yhendus) { /*kui ühendust pole*/
        echo 'Puudub ühendus andmebaasi serveriga <br />';
        echo 'mysqli_connect_error().<br />';
        echo 'mysqli_connect_errno().<br />'; /* arv, mis ütleb, mis veaga tegu*/
        return false;
    } else {
        echo 'Ühendus andmebaasi serveriga on loodud!<br />';
        return $yhendus;
    }
}

/*Funktsioon päringu saatmiseks*/
function saadaParing($yhendus, $sql) {
    $tulemus = mysqli_query($yhendus, $sql);
    if(!$tulemus) {
        echo 'Päringuga on probleem!'.$sql.'<br />';
        echo mysqli_error($yhendus).'<br />';
        echo mysqli_errno($yhendus).'<br />';
        return false;
    } else {
        echo 'Päring läks läbi!';
        return /*true*/ $tulemus;
    }
}

/*Andmete saatmise funktsioon*/
function annaAndmed($yhendus, $sql) {
    $tulemus = saadaParing($yhendus, $sql);/*järjekord on oluline!*/
    $andmed = array(); /*massiiv, kus päringu andmed*/
    if($tulemus != false) {
        while($rida = mysqli_fetch_assoc($tulemus)) {
            $andmed[] = $rida;
        }
    }
    if (count($andmed) == 0) {
        return false;
    } else {
        /*tagastame andmetega täidetud masiiivi*/
        return $andmed;
    }
}
?>