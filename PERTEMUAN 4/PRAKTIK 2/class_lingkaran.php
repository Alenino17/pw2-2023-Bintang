<?php

class Lingkaran {
    // Property
    private $jarijari;
    const PHI = 3.14;   

    // Method 
    function __construct($r) {
        $this->jarijari = $r;
        
    }
    
    function getLuas() {
        $luas = self::PHI * $this->jarijari;
        return $luas;
    }

    function getKel() {
        $kel = 2 * self::PHI * $this->jarijari;
        return $kel;
    }
}

?>