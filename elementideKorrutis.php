<?php
/*
 * 4.
 * Loo funktsioon nimega elementideKorrutis, mis
 * võtab parameetrina täisarvude massiivi ja leiab
 * korrutis nendest arvudest, mis on suurem kui 0
 * ja mille indeksid on paarisarvud.
 * Kontrollimiseks näiteks kasutada järgmine massiiv:
 * 1, 0, 6, 0, 0, 3, 5
 * Tulemus väljastatakse antud funktsiooni abil kujul:
 * Tulemus: 1 * 6 * 5 = 30
*/

function elementideKorrutis($array){
    $tulemus = 1;
    $korrutusMark = 0;
    echo 'Tulemus: ';
    for($i = 0; $i < count($array); $i++){
        if($array[$i] > 0 and $i % 2 == 0){
            $tulemus = $tulemus * $array[$i];
            if($korrutusMark != 0){
                echo ' * '.$array[$i];
            } else {
                echo $array[$i];
                $korrutusMark = 1;
            }
        }
    }
    echo ' = '.$tulemus;
}
elementideKorrutis(array(1, 0, 6, 0, 0, 3, 5, 0, 2));
?>