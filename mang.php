<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12.01.2018
 * Time: 8:55
 */

function vormid() {
    echo '
    <form action="mang.php" method="get">
    <input type="text" name="kasutajaArv"><br /> <br />
    <input type="submit" value="Kontrolli">
    </form>
    ';
}

function vormideAndmed() {
    echo '<pre>';
    print_r($_GET); /*jõuavad andmed, mis saadetud post-meetodiga*/
    echo '<pre>';
}
vormid();
vormideAndmed();

/* get meetod: http://evelinarust.ikt.khk.ee/veeb/mang.php?kasutajaArv=3*/

echo '<hr>';

function vorm(){
    $serveriArv = $_POST['serveriArv'];
    $serveriArv = isset($serveriArv) ?  $serveriArv: rand(1,20);
    $katseteArv = $_POST['katseteArv'];
    $katseteArv = isset($katseteArv) ?  ++$katseteArv : 0;

    /*post meetod: http://evelinarust.ikt.khk.ee/veeb/mang.php*/
    /*andmed saadetakse peidetud vormis*/

    echo '
    <form action="mang.php" method="post">
    <input type="hidden" name="serveriArv" value="'.$serveriArv.'">
    <input type="hidden" name="katseteArv" value="'.$katseteArv.'">
    <input type="text" name="kasutajaArv"><br />
    <input type="submit" value="Kontrolli">
    </form>
    ';
}
function vormiAndmed(){
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    $korras = false;
    if(empty($_POST)){ 
//        echo 'Vorm ei saatnud andmed<br />';
    } else {
//        echo 'Andmed on saadetud<br />';
        if(empty($_POST['kasutajaArv'])){
//            echo 'Andmed peavad olema sisestatud<br />';
        } else {
//            echo 'Andmed on sisestatud<br />';
            $korras = true;
        }
    }
    return $korras;
}
function arvuKontroll($kasutajaArv, $serveriArv, $katseteArv){
    if($kasutajaArv > $serveriArv){
        echo 'Pakutud väärtus on suurem!<br />';
    }
    if($kasutajaArv < $serveriArv){
        echo 'Pakutud väärtus on väiksem!<br />';
    }
    if(abs($serveriArv - $kasutajaArv) <= 5){
        if($kasutajaArv == $serveriArv){
            echo 'Õnnitleme! Arvasid ära! ';
            echo 'Arvasid arvu '.++$katseteArv.' korraga!<br />';
            exit;
        }
        echo 'Aga oled juba väga lähedal!<br />';
    }
}
vorm();
//vormiAndmed();
if(vormiAndmed()){
    arvuKontroll($_POST['kasutajaArv'], $_POST['serveriArv'], $_POST['katseteArv']);
} else {
    echo 'Andmed peavad olema sisestatud<br />';
}
?>