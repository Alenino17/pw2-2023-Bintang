<?php
   require_once 'class_Lingkaran.php';
 
   $lingkar1 = new  lingkaran(7);
   $lingkar2 = new  Lingkaran(15);
   
   echo "Nilai PHI = ". Lingkaran::PHI;
   echo "<br>Luas Lingkaran = ". $lingkar1->getLuas(); 
   echo "<br>Kel Lingkaran 2 = ". $lingkar1->getKel();
?>