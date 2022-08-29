<?php
class Persion
{
  public $age = 10;
  private $name;

  public function __construct()
  {
    echo 'start class';
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
};

$chung = new Persion();
$chung->setName('chung');
echo '<br>';
echo $chung->getName();
