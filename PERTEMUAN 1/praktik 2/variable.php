<?php
  /*  
    Variable sistem
    variable built in php (variable yang sudah ada di php)
  */
  echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
  echo "<br />";
  echo "<br />";
  echo "<br />";


  /*  
    Variable user
    variable yang dibuat user
  */
  $name = 'Alens';
  $age = 20;
  $weight = 75;

  $name = 'Alenino'; // Ubah variable $nama



  /*
    Variable konstan
    variable yang tidak bisa diubah nilainya
	  1. Menggunakan define | define('fruit', "Apel");
	  2. Menggunakan const  | const fruit = "Apel";
  */
  define ("SITE_NAME", "Elena");
  const BASE_URL = "https://elena.nurulfikri.ac.id/";

