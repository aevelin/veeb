<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14.12.2017
 * Time: 14:31
 */
function tabel($str1, $str2, $str3, $str4) {
    echo '<table border="1">';
        for($rida = 1; $rida <= 4; $rida++) {
            echo '<tr>';
                echo '<td>';
                echo $rida;
                echo '</td>';
            echo '</tr>';
        }
    echo '</table>';
}
tabel ('1', '2', '3', '4');
?>