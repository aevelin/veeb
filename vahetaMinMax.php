<?php
/*
 * 3.
 * Loo funktsioon nimega vahetaMinMax, mis võtab
 * parameetrina täisarvude massiivi (testimises
 * võib kasutada looMassiiv funktsiooniga
 * genereeritud massiiv)
 * ja leiab kõige väiksema ja kõige suurema
 * elemendi antud massiivis ning vahetab nende asukohad.
 *
 * Kontrolli kas kohad on vahetatud kasutades
 * valjastaMassiiv funktsiooni
*/

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

function valjastaMassiiv($array){
    echo '<table border="1">';
    echo '<tr>';
    foreach ($array as $arv){
        echo '<td>';
        echo $arv;
        echo '</td>';
    }
    echo '</tr>';
    echo '</table>';
}

function vahetaMinMax($array){
    $min = min($array);
    $max = max($array);
    echo 'Miinimum= '.$min.'<br/>';
    echo 'Maximum= '.$max.'<br/>';
    for ($i= 0; $i < count($array); $i++){
        if($array[$i] == $min){
            $array[$i] = $max;
        } else if ($array[$i] == $max){
            $array[$i] = $min;
        }
        echo $array[$i].'<br/>';
    }
}
valjastaMassiiv($arvudeMassiiv);
vahetaMinMax($arvudeMassiiv);
?>