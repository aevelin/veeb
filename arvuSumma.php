<?php
/*
 * 1. Koostada funktsioon nimega arvuSumma, mis võtab
 * parameetrina suvalise numbri ja arvutab numbri
 * arvude summat - juhul, kui on argumendina
 * funktsioonile antud number 123, siis programm
 * peab leidma 1+2+3 summa, ehk 6.
 * Lahendamiseks ei tohi kasutada sõnetöötluse võimalused.
 * Funktsioon peab tagastama leitud summa põhiprogrammile.
 * Põhiprogrammis kasutada väljatrükis tagastatud väärtus koos
 * selgitava tekstiga
 * */
function arvuSumma($number){
    $summa = 0;
    while($number != 0){
        $arv = $number % 10;
        echo 'arv = '.$arv.'<br />';
        $number = $number / 10;
        settype($number, 'integer');
        echo 'number = '.$number.'<br />';
    }
}
arvuSumma(1234);
?>