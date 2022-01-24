<?php

/**
 * public = Anywhere: Inside other classes and object instances
 * private = Inside the current class only
 * protected = Inside the current class and any subclasses
 */
class Item {
  public $name;

  protected $code = 1234;
  public function getListingDescription() {
    return "Item: " . $this->name;
  }

//   public const MAX_LENGTH = 25;
//   public $name;
//   public $description;
//   // public static $count = 0;

// public function getName() {
//   return $this->name;
// }
// public function setName($name) {
//   $this->name = $name;
// }

  // function __construct($name, $description) {
  //   $this->name = $name;
  //   $this->description = $description;

  //  static::$count++ ;
  // }

  // public function sayHello() {
  //   echo "Hello!";
  // }

  // public function getName() {
  //   return $this->name;
  // }

  // public static function showCount() {
  //   echo static::$count;
  // }

  // public function getName(){
  //   return $this->name;
  // }

  // public function setName($name) {
  //   $this->name = $name;
  // }

  // public function getDescription() {
  //   return $this->description;
  // }
  
  // public function setDescription($description) {
  //   $this->description = $description;
  // }
}