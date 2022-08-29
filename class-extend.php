<?php

class Database
{
  public $table ="db";
  public $age =1;
  public function fetch()
  {
    return 'lay du lieu';
  }
}

// lop con
class ChirlDB extends Database
{
  public $heiht = 10;
  public function getData()
  {
    echo $this->fetch();
  }
}

class ChirlDB1 extends ChirlDB
{
  public function getData1()
  {
    echo $this->getData();
  }
}

$chirlDB = new ChirlDB1();
echo '<br>';

echo $chirlDB->getData();
echo '<br>';
echo $chirlDB->heiht;
