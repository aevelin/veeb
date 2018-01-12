<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12.01.2018
 * Time: 8:55
 */

function vorm() {
    echo '
    <form action="mang.php" method="get">
    <input type="text" name="kasutajaArv"><br />
    <input type="submit" value="Kontrolli">
    </form>
    ';
}

function vormiAndmed() {
    echo '<pre>';
    print_r($_GET); /*jõuavad andmed, mis saadetud get-meetodiga*/
    echo '<pre>';
}
vorm();
vormiAndmed();
/* get meetod: http://evelinarust.ikt.khk.ee/veeb/mang.php?kasutajaArv=3*/

echo '<hr>';

function vormid() {
    $serveriArv = $_POST['serveriArv'];
    $serveriArv = isset($serveriArv) ? $_POST['serveriArv'] : rand(1,20);
    echo 'Suvaline arv ehk serveri arv:'.' '.$serveriArv;
    echo '<hr>';
    echo '
    <form action="mang.php" method="post">
    <input type="hidden" name="serveriArv" value ="'.$serveriArv.'"><br />
    <input type="text" name="kasutajaArv"><br />
    <input type="submit" value="Kontrolli">
    </form>
    ';
}

function vormiAndmeded() {
    echo '<pre>';
    print_r($_POST); /*jõuavad andmed, mis saadetud get-meetodiga*/
    echo '<pre>';
    $korras = false;
    if(empty($_POST)) {
        echo 'Vorm ei saatnud andmeid<br />';
    } else {
        echo 'Andmed on saadetud<br />';
        if(empty($_POST ['kasutajaArv'])) {
            echo 'Andmed peavad olema sisestatud<br />';
        } else {
            echo 'Andmed on sisestatud<br />';
            $korras = true;
        }
    }
    return $korras;
}

function arvuKontroll($kasutajaArv, $serveriArv){
    if ($kasutajaArv > $serveriArv) {
        echo 'Pakutud arv on suurem<br />';
    }
    if ($kasutajaArv < $serveriArv) {
        echo 'Pakutud väärtus on väiksem<br />';
    }
    if(abs($serveriArv - $kasutajaArv) <= 5) {
        if($kasutajaArv == $serveriArv) {
            echo 'Õnnitleme! Arvasid ära!<br />';
            exit;
        }
        echo 'Aga oled väga lähedal';
    }
}
vormid();
if (vormiAndmeded()) {
    arvuKontroll($_POST['kasutajaArv'], $_POST['serveriArv']);
} else {
    echo 'Andmed peavad olema sisestatud<br />';
}
/*post meetod: http://evelinarust.ikt.khk.ee/veeb/mang.php*/
/*andmed saadetakse peidetud vormis*/

echo '<hr>';
?>