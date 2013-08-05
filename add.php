<?php
  class addItUp {

    public $a;
    public $b;
    public $c;
    public $d;

    function __construct ($a, $b) {
     // $c = $a + $b;
       // echo $a . ' + ' . $b . ' = ' .$c . '<br>';
    }
  function setA($a) {
    $this->a = $a;
  }
  function setB($b) {
    $this->b = $b;
  } 
  function sum() {
    $this->c = $this->a + $this->b;
  } 
  function divide() {
    $this->d = $this->a / $this->b;
  }
  } 

 $obj = new addItUp();
 $obj->setA(4);
 $obj->setB(5);
 $obj->sum();
 $obj->divide();
 print_r($obj);
