<?php
function infoProjet($nProjet, $properName, $chaine){
  $objProj = $GLOBALS['objResult']->projects[$nProjet];
  switch ($properName) {
    case 'name_fr':
      echo ucfirst($objProj->name_fr);
      break;
    case 'description_fr':
      if (($objProj>description_fr == "") || ($objProj->description_fr == " ")){
        echo "Pas de description";
      }
      else{
      $transPhp = substr($objProj->description_fr, 0, 200);
      $retraitBalise = strip_tags($transPhp).$chaine;
      echo $retraitBalise;
      }
        break;
    case 'owner->first_name':
      if (($objProj->owner->first_name == "") && ($objProj->owner->last_name == "")){
        echo ucfirst($objProj->owner->name).$chaine;
      }
      else {
        $concatNomPrenom = ucfirst($objProj->owner->first_name). " " .ucfirst($objProj->owner->last_name);
        echo $concatNomPrenom;
      }
        break;
    case 'time_left':
      if ($objProj->time_left == "" || $objProj->time_left == " "){
        echo "Récolte terminée !";
      }
      else {
        echo $objProj->time_left_short;
      }
        break;
  default:
    $transPhp = "echo strip_tags(\$objProj->".$properName.").\$chaine;";
    eval($transPhp);
    break;
  }
}

?>
