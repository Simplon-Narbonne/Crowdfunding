<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Projets Narbonnais</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../assets/css/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../../assets/css/normalize.css" type="text/css"/>
    <link rel="stylesheet" href="../../assets/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="../../assets/css/stylealternatif.css" type="text/css"/>
  </head>

​<?php
include('../includes/connexionApi.php');
?>

<?php
// OBJET QUI CONTIENT TOUTES LES DONNEES
 $objResult = json_decode($connexion);
?>

<!-- FUNCTION POUR AFFICHER UNE DONNEE PRECISE -->
<?php include('../includes/function/affichDataApi.php'); ?>
<!-- FUNCTION FIN -->

<!-- HEADER STATIQUE -->
<?php
// BANNIERE
  echo "
  <body>
  <header>
    <nav>
      <div class='elementposition'>
        <img src='../../assets/images/logo-grand-narbonne.png' alt='Logo Le Grand Narbonne'/>
        <h1>Crowd-<span class='F'>F</span><span class='U'>U</span><span class='N'>N</span>-Ding</h1>
      </div>
      <div class='elementposition'>
          <a href='#' class='navlink'>ACCUEIL</a>
          <a href='projet.php' class='navlink'>PROJET D ICI</a>
          <a href='aPropos.php' class='navlink'>A PROPOS</a>
      </div>
    </nav>
  </header>";
// BANNIERE FIN

// NAVBAR
// echo
//     <div id='menu' class='row'>
//       <nav>
//           <ul class='nav nav-pills nav-justified'>
//               <li ><a href='index.html' id = 'accueil'>ACCUEIL</a></li>
//               <li><a href='#' id = 'projet'>PROJET D'ICI</a></li>
//               <li><a href='apropos.html' id = 'apropos'>A PROPOS</a></li>
//           </ul>
//       </nav>
//     </div>";
// // NAVBAR FIN
?>
<!-- HEADER STATIQUE FIN -->

<!-- GENERATEUR DE PROJET  -->
<?php
for ($i=0; $i<13; $i++) {
echo "
<div class='row classeprojet'>
  <div class='col-md-9 col-centered'>

    <div class='row'>
        <div class='col-md-6'>
            <div class='carrontop'>
              <h4>";
              infoProjet($i, "name_fr", "</h4>");
              echo "
            </div>
        </div>
    </div>

    <div class='row'>
      <div class='col-md-6 colonneprojet' >
        <div class='jaune'>
          <img src='";
          infoProjet($i, "image", "'");
          echo "class='img-responsive'>
            <div class='row'>
              <div class='col-md-9 '>
                <h5>"; infoProjet($i, "owner->first_name", "");
                echo "</h5>
                  <p>"; infoProjet($i, "description_fr", "[...]");
                  echo "
                  <a href ='"; infoProjet($i, "absolute_url", "");
                  echo "'>Lire la suite</a></p>
                  <p>"; infoProjet($i, "time_left", "");
                  echo "</p>
              </div>
            <div class='col-md-3 chiffres'>
              <p>"; infoProjet($i, "amount_raised", "€");
              echo "</p>
              <p>"; infoProjet($i, "goal", "€");
              echo "</p>
              <p>"; infoProjet($i, "percent", "%");
              echo "</p>
              <div>
                <a href ='"; infoProjet($i, "absolute_url", "'>");
                echo"
                  <button type='button' class='btn btn-primary participez'>Participez</button></a>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>";
  }
?>
<!-- GENERATEUR DE PROJET FIN -->


<!-- PARTENAIRES -->
<?php include('../includes/partenaires.php'); ?>
<!-- PARTENAIRES FIN -->


<!-- FOOTER -->
<?php include('../includes/footer.php'); ?>
<!-- FOOTER FIN -->

  </body>
</html>
