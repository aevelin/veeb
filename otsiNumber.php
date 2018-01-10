<?php
/*
 * 2. Koostada funktsioon nimega otsiNumber,
 * mis võtab parameetrina suvalise arvu ja
 * kindlaks määratud arvu ja arvutab mitu korda määratud
 * arv esineb suvalises numbris, näiteks arv 5
 * esineb numbris 442158755745 neli korda.
 * Lahendamiseks ei tohi kasutada sõnetöötluse võimalused
 *
 * Funktsioon peab väljastama tulemus koos seletava tekstiga
*/
function otsiNumber($suvalineArv, $kindelArv){
    echo 'Arv '.$kindelArv.' esineb arvus '.$suvalineArv;
    $mituKorda = 0;
    while($suvalineArv != 0){
        $arv = $suvalineArv % 10;
        if($arv == $kindelArv){
            $mituKorda++;
        }
        $suvalineArv = $suvalineArv / 10;
        settype($suvalineArv, 'integer');
    }
    echo ' '.$mituKorda.' arv korda<br />';
}
otsiNumber(442158755745, 5);
otsiNumber(442158755745, 4);
otsiNumber(442158755745, 7);
otsiNumber(442158755745, 8);
?>