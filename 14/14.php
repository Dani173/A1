<?php
echo '<br>';
$var1 = basename($_SERVER['PHP_SELF']); 
$var2 = count(file($var1)); 
echo "Hay $var2 lineas ";

