<?php

function Armstrong($num) {
  $sl = strlen($num);
  $sum = 0;
  $num = (string)$num;
  for ($i = 0; $i < $sl; $i++) {
    $sum = $sum + pow((string)$num{$i},$sl);
  }
  if ((string)$sum == (string)$num) {
    return "True";
  } else {
    return "False";
  }
}
echo "12 ? ".Armstrong(12);


