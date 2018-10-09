<?php
$lineas = file('http://www.example.com');
foreach ($lineas as $num_lineas => $linea)
 {
 	echo 'Linea Numero-> {$num_lineas }: ' . htmlspecialchars($linea) . '<br>';
 }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

