<?php
function fun1($var1) {
  $var2 = array_values(array_unique($var1));
  return $var2 ;
}
$var3 = array(1,1,2,2);
print_r(fun1($var3));
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

