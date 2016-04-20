<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les projets à financer</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/normalize.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/stylealternatif.css" type="text/css"/>
  </head>

​<?php include('php/includes/connexionApi.php');?>

<?php
// OBJET QUI CONTIENT TOUTES LES DONNEES
 $objResult = json_decode($connexion);
?>

<!-- FUNCTION POUR AFFICHER UNE DONNEE PRECISE -->
<?php include('php/includes/function/affichDataApi.php'); ?>
<!-- FUNCTION FIN -->

  <body>
    <header>
      <img class='img-responsive' src='assets/images/logo/Visuel-principal-png.png'/>
       <nav class="navbar navbar-inverse">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">LES PROJETS A FINANCER</a></li>
                <li><a href="php/pages/comment-ca-marche.php">LE CROWDFUNDING : COMMENT CA MARCHE ?</a></li>
                <li><a href="php/pages/envie-entreprendre.php">ENVIE D'ENTREPRENDRE</a></li>
              </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
    </header>


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

<!-- FOOTER -->
  <footer class='row'>
    <div class ='col-md-9 col-centered'>
      <div id='copyright'>
        <p>©2016 propulsé par Zinzinprod</p>
      </div>
      <img src='assets/images/facebook.png' id= 'fb'/>
      <img src='assets/images/twitter.png' id= 'twitter'/>
    </div>
  </footer>
  <script src="assets/script/jquery/jquery-2-2-2.js"></script>
  <script src="assets/css/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<!-- FOOTER FIN -->
