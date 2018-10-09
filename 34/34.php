<?php
function multiply_two_lists($x, $y)
  {
    $a = explode(' ',trim($x));
    $b = explode(' ',trim($y));
    foreach($a as $key=>$value){
        $output[$key] = $a[$key]*$b[$key];
    }
    return implode(' ',$output);
}
echo multiply_two_lists(("10 12 3"), ("1 3 3"))."\n";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

