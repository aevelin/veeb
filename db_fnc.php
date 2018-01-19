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
        echo 'Ühendus andmebaasi serveriga on loodud<br />';
        return $yhendus;
    }
}
?>