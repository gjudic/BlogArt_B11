<?
/////////////////////////////////////////
//
//  Script : ctrlSaisies.php
//
/////////////////////////////////////////

function ctrlSaisies($saisie){

  // Convertion caractères spéciaux en entités HTML => peu performant
  // Préférer htmlentities()
  $saisie = htmlspecialchars($saisie);
  // del espaces (ou d'autres caractères) en début et fin de chaîne
  $saisie = trim($saisie);
  // del antislashs d'une chaîne
  $saisie = stripslashes($saisie);
  // Conversion caractères spéciaux en entités HTML
  $saisie = htmlentities($saisie);

  return $saisie;
}
