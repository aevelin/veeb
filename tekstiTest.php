<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 25.01.2018
 * Time: 10:47
 */

require_once 'tekst.php';

//loome teksti objekti
//$minuTekst = new tekst();
//määrame tekstile konkreetse väärtuse
$minuTekst = new tekst('Tere maailm!');
//vaatame, mis on objekti sees
echo '<pre>';
print_r($minuTekst);
echo '<pre>';
//prindime välja
$minuTekst->prindiTekst();
//loome veel ühe objekti ja määrame sisu
$minuTekst = new tekst('Must tekst.');
echo '<pre>';
print_r($minuTekst);
echo '<pre>';
$minuTekst->prindiTekst();

//punase teksti väljastamine
//vaja kutsuda teine klass vtekst.php
require_once 'vtekst.php';
$punaneTekst = new vtekst('Punane tekst', '#F00');
echo '<pre>';
print_r($punaneTekst);
echo '<pre>';
$punaneTekst->prindiTekst();
?>