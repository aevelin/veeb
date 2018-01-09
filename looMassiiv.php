<?php
/*
 * 1.
 * Koosta funktsioon nimega looMassiiv,
 * mis võtab parameetrina massiivi elementide
 * arvu ja loob juhuarvudest (täisarvud)
 * vahemikust 100-999 koosneva massiivi.
 * Loodud massiiv tuleb tagastada
 * põhiprogrammile ja kontrollida sisu
 * testväljastuse abil - näiteks print_r
 * */


function looMassiiv($elementideArv){
    $array = array();
    for($i = 0; $i < $elementideArv; $i++){
        $randomNumber = rand(100, 999);
        $array[] = $randomNumber;
        }
return $array;
}
$elementideArv = 15;
$arvudeMassiiv = looMassiiv($elementideArv);

print_r($arvudeMassiiv);
?>