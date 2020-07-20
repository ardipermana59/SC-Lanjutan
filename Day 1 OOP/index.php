<?php

include_once 'app/init.php';

$elang1 = new Elang;
$harimau1 = new Harimau;

// Menampilkan Informasi Hewab
echo $elang1->getInfoHewan();
echo '</br> </br>';
echo $harimau1->getInfoHewan();

echo '</br> </br>';

// Menampilkan Atraksi Keahlian Hewan
echo $elang1->atraksi();
echo '</br>';
echo $harimau1->atraksi();

//Berantem
// Elang nyerang Harimau
echo '</br> </br>';
echo $elang1->serang($harimau1) . '</br>';
echo "Darah elang1 = {$elang1->darah} </br>";
echo "Darah harimau1 = {$harimau1->darah} </br>";

// Harimau nyerang balik ke Elang 

echo '</br>';
echo $harimau1->serang($elang1) . '</br>';
echo "Darah elang1 = {$elang1->darah} </br>";
echo "Darah harimau1 = {$harimau1->darah} </br>";
