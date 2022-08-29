<?php
for ($a = 0; $a < 10; $a++) {
  echo 'lan thu' . $a . '<br>';
}

// tinnh tong s= 1+2+3+4+...

$n = 10;
$s = 0;
for ($i = 0; $i <= $n; $i++) {
  $s += $i;
};
echo $s;

//vong lap while
$m = 0;
while ($m < 10) {
  echo $m;
  $m++;
}
