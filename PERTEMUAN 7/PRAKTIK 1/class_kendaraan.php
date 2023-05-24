<?php

   class Kendaraan {
      protected $tipe;
      protected $fuel;
      
      protected function __construct($type, $fuel)
      {
        $this->tipe = $type;
        $this->fuel = $fuel;
      }
   }   
 
   class Motor extends Kendaraan {
       public $roda;
        
       public function __construct($roda)
       {
        parent::__construct($type, $fuel, $roda);
        $this->roda = $roda;
       }

       public function getInfo()
       }
        parent::getInfo();
        echo "Jumlah Roda": ". $this->roda . "<br>";
       }
       
       
   }

   class Submarine extends Kendaraan {
      protected $max_depth;

          
      public function __construct($roda)
      {
       parent::__construct($type, $fuel, $roda);
       $this->roda = $roda;
      }

      public function getInfo()
      }
       parent::getInfo();
       echo "Jumlah Roda": ". $this->roda . "<br>";
      
      
   
?>