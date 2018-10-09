<?php
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $var1 = $_SERVER['HTTP_CLIENT_IP'];
  }

elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $var1 = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }

else
  {
    $var1 = $_SERVER['REMOTE_ADDR'];
  }
echo $var1;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

