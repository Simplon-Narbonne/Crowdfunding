<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Projets Narbonnais</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="css/style.css"/>
  </head>

​<?php
include('includes/connexionApi.php');
?>

<?php
// OBJET QUI CONTIENT TOUTES LES DONNES
 $objResult = json_decode($connexion);
?>

<!-- FUNCTION POUR AFFICHER UNE DONNEE PRECISE -->
<?php include('function/affichDataApi.php'); ?>
<!-- FUNCTION FIN -->

<!-- HEADER STATIQUE -->
<?php
// BANNIERE
  echo "
  <body>
    <header>
          <img src= 'images/soleil1.jpg' id ='ciel'/>
          <img src='images/logo-grand-narbonne.png' id='logo'/>
          <div id ='titre'>
            <h1>Crowd-<span id='F'>F</span><span id= 'U'>U</span><span id='N'>N</span>-Ding</h1>
          </div>
    </header>";
// BANNIERE FIN

// NAVBAR
echo "
    <div id='menu' class='row'>
      <nav>
          <ul class='nav nav-pills nav-justified'>
              <li ><a href='index.html' id = 'accueil'>ACCUEIL</a></li>
              <li><a href='#' id = 'projet'>PROJET D'ICI</a></li>
              <li><a href='apropos.html' id = 'apropos'>A PROPOS</a></li>
          </ul>
      </nav>
    </div>";
// NAVBAR FIN
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
<?php include('includes/partenaires.php'); ?>
<!-- PARTENAIRES FIN -->


<!-- FOOTER -->
<?php include('includes/footer.php'); ?>
<!-- FOOTER FIN -->

  </body>
</html>
