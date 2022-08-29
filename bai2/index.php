<?php
//  cau dieu kien 
$a = 2;

if ($a > 3) {
  echo $a . 'nhor hon 3';
} else {
  echo $a . 'nho lon hon 3';
};

$b = 3;
switch ($b) {
  case 1:
    echo 'hom nay la cn';
    break;
  case 2:
    echo 'hom nay la t2';
    break;
  case 3:
    echo 'hom nay la t3';
    break;
  case 4:
    echo 'hom nay la t4';
    break;
  case 5:
    echo 'hom nay la t5';
    break;
  case 6:
    echo 'hom nay la t6';
    break;
  case 6:
    echo 'hom nay la t7';
    break;
  default:
    echo 'nay ko hop le';
}
