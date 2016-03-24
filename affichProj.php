<?php
include('includes/head.php');
include('includes/connexionApi.php')
?>

<?php
// OBJET AVEC TOUTES LES DONNEES RELATIVES AUX PROJETS SUIVIS
$objResult = json_decode($connexion);

  function infoProjet($nProjet, $properName, $chaine){
    $objProj = $GLOBALS['objResult']->projects[$nProjet];

    /*if ($properName == "description_fr"){
      $transPhp = substr($objProj->$properName, 0, 300);
      $retraitBalise = strip_tags($transPhp).$chaine;
      echo $retraitBalise;
    }
    elseif (($objProj->owner->first_name == "") && ($objProj->owner->last_name == "")) {
     echo $objProj->owner->name;
   }
    else {
      $transPhp = "echo strip_tags(\$objProj->".$properName.").\$chaine;";
      eval($transPhp);
    }*/
    switch ($objProj) {
      case $properName == 'description_fr':
        $transPhp = substr($objProj->$properName, 0, 300);
        $retraitBalise = strip_tags($transPhp).$chaine;
        echo $retraitBalise;
          break;
      case $properName == 'owner->first_name':
        if (($objProj->owner->first_name == "") && ($objProj->owner->last_name == "")){
          echo ucfirst($objProj->owner->name).$chaine;
        }
        else {
          $concatNomPrenom = ucfirst($objProj->owner->first_name). " " .ucfirst($objProj->owner->last_name);
          echo $concatNomPrenom;
        }
          break;
      case $properName == 'time_left':
        if ($objProj->time_left == ""){
          echo "Récolte terminée !";
        }
      default:
        $transPhp = "echo strip_tags(\$objProj->".$properName.").\$chaine;";
      eval($transPhp);
      break;
    }
  }

for ($i=0; $i<13; $i++) {
// NOM PROJET
  echo "<div class='nom_projet'>";
    infoProjet($i, "name_fr", "");

// IMAGE PROJET
  echo "</div><br/>
    <div class='img_projet'>
      <img src='";
        infoProjet($i, "image", "");

// NOM ET PRENOM DU CREATEUR
  echo "'/></div><br/>
  <div class='createur_projet'>
    <p>Proposé par <span style='font-weight:bold'>";
      infoProjet($i, "owner->first_name", "</span></p>");

// MONTANT ACTUEL
  echo "</div><br/>
    <div class='montantActuel_projet'>";
      infoProjet($i, "amount_raised", "€");

// % ATTEINT DU MONTANT TOTAL
  echo " </div><br/>
    <div class='pourcentMontant_projet'>";
      infoProjet($i, "percent", "%");

// MONTANT A ATTEINDRE
  echo "</div><br/>
    <div class='butMontant_projet'>Objectif: ";
      infoProjet($i, "goal", "€");

// DESCRIPTION
  echo "</div><br/>
    <div class='description_projet'>";
      infoProjet($i, "description_fr", "[...]");
// LIEN REDIRECTION
  echo "<br/>
  <a href='";
    infoProjet($i, "absolute_url", "'>Lire la suite</a></div>");

// TEMPS RESTANT
  echo "</div><br/>
    <div class='tempsRestant_projet'>";
      infoProjet($i, "time_left", "");
  echo "</div><br/>";
}

  // FIN

  include ('includes/footer.php');
  ?>
