<?php

$A = array(
  [1, 1, 1],
  [2, 2, 2],
  [3, 3, 3]
);

$B = array(
  [3, 3, 3],
  [2, 2, 2],
  [1, 1, 1]
);

for ($i = 0; $i < count($A); $i++) {

  for ($j = 0; $j < count($A); $j++) {
    echo $A[$i][$j] + $B[$i][$j] .  " ";
  }
  echo "<br>";
}
