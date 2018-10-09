<?php
echo '<br>';
 echo php_uname()."\n";
echo PHP_OS."\n";
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
echo 'This is a server using Windows!';
} else {
echo 'This is a server not using Windows!'."\n";
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

