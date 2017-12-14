<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14.12.2017
 * Time: 13:26
 */
for($arv = 1; $arv <= 10; $arv++) {
    if($arv % 2 == 0) {
        $varv = 'blue';
    }
    else {
        $varv = 'red';
    }
    echo '<font color="'.$varv.'">'.$arv.'</font><br/>';
}
//
$a = 5; $b = 2;
$c = $a++;
$d = $b--;
echo 'a = '.$a.'<br />';
echo 'b = '.$b.'<br />';
echo 'c = '.$c.'<br />';
echo 'd = '.$d.'<br />';
//
$a = 5; $b = 2;
$c = ++$a;
$d = --$b;
echo 'a = '.$a.'<br />';
echo 'b = '.$b.'<br />';
echo 'c = '.$c.'<br />';
echo 'd = '.$d.'<br />';
//
$kord = 1;
while ($kord <= 5) {
    echo '<i>'.$kord++.'</i><br />';
    /*if($kord == 3) {
        break;
    }*/
}
//
$kord = 11;
do {
echo '<i>'.$kord++.'</i><br />';
} while ($kord <= 5);
?>