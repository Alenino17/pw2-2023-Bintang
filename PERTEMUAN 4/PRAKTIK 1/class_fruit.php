<?php

  class Fruit{
     // Property
     public $name = "Apple";
     public $color = "Red";

     //Method
     function getName() {
        return $this->name;
     }
  }

  $apple = new Fruit();
   $apple->name = "Apple";
   $apple->color = "Red";
 
  $banana = new Fruit();
   $banana->name = "Pisang";
   $banana->color = "Yellow";

   // Tampilkan
   echo $apple->getName();
   echo $apple->getColor();
   echo '<br><br>';
   echo $banana->getName();
   echo $banana->getColor();



?>