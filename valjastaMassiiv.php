<?php
/*
 * 2.
 * Loo funktsioon nimega valjastaMassiiv,
 * mis võtab parameetrina massiivi ja
 * väljastab tema elemendid
 * üheveerulise tabeli kujul
 * Väljundi loomisel kasutada foreach
 * tsükkel
 * */

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function valjastaMassiiv($tabel){
    echo '<table border="1">';
    echo '<tr>';
    foreach ($tabel as $arv){
        echo '<td>';
        echo $arv;
        echo '</td>';
    }
    echo '</tr>';
    echo '</table>';
}
valjastaMassiiv($array);

?>