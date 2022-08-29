<?php
class Person
{
  public static $fullName;
  public static $age;
  public static function getName() {
    return 'ten ban la ';
  }
}

echo Person::getName() . '<br>';