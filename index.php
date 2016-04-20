<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les projets à financer</title>
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
<div class='container'>
<div class='row'>
  <div class='col-lg-12 col-centered classeprojet'>
    <div class="titre_page ">SOUTENEZ UN PROJET</div>
        <div class="row">

<!-- GENERATEUR DE PROJET  -->
<?php
$j=0;
for ($i=0; $i<13; $i++) {
echo "
          <div class='col-lg-4'>

            <div class='row'>
              <div class='col-lg-12 background-projet'>

                <div class='row'>
                  <div class='col-lg-12 carrontop'>
                      <h4>";
                        infoProjet($i, "name_fr", "</h4>");
                    echo "
                  </div>
                </div>

                <div class='row'>
                  <div class='col-lg-12'>
                      <img src='";
                      infoProjet($i, "image", "'");
                      echo "class='img-responsive img-projet'>
                  </div>
                </div>

                <div class='row'>
                  <div class='col-lg-12 '>
                    <h5>"; infoProjet($i, "owner->first_name", "");
              echo "</h5>
                      <p class='description'>"; infoProjet($i, "description_fr", "[...]");
                        echo "
                      <a href ='"; infoProjet($i, "absolute_url", "");
              echo "'>Lire la suite
                      </a>
                      </p>
                  </div>
                </div>

                <!-- MONTANT A ATTEINDRE - DUREE RESTANTE -->
                <div class='row'>
                  <div class='col-lg-12 '>
                    <div class='row'>
                      <div class='col-lg-6'> "; infoProjet($i, "goal", "€");
                echo "</div>
                      <div class='col-lg-6'>"; infoProjet($i, "time_left", "");
                echo "</div>
                    </div>
                  </div>
                </div>";

              /* POURCENTAGE [DEBUT] */
          echo "<div class='row'>
                  <div class='col-lg-12'>
                    <div class='row'>
                      <div class='col-lg-6'>
                "; infoProjet($i, "percent", "%");
                echo "</div>
                    </div>
                  </div>
                </div>
                <!-- POURCENTAGE [FIN] -->

                <div class='row'>
                  <div class='col-lg-12'>
                    <a href ='"; infoProjet($i, "absolute_url", "'>");
              echo "<button type='button' class='btn btn-primary'>Participez
                    </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>";
    $j++;
    if ($j%3 ==0){
      echo "</div>
      <div class='row'>";
    }
  }

?>
<!-- GENERATEUR DE PROJET FIN -->
    </div>
  </div>
</div>
</div>

<!-- FOOTER -->
<footer>
<div class='row'>
	<div class='col-lg-4'>
  		<img src='assets/images/logo/Visuel-principal-element-logo-grand-narbonne.png' id='logoNarbonne' class='img-responsive'/>
	</div>
	<div class='col-lg-4'>
		<p class='text-center'><a href="php/pages/contact.php">Contact</a> - <a href="php/pages/mentions-legales.php">Mentions légales</a> - <a href="php/pages/a-propos.php">A propos</a></p>
	</div>
	<div class='col-lg-4'>
	 	<img src='assets/images/logo/Footer-logo-simplon.png' id='logoSimplon' class='img-responsive'/>
	</div>
</div>


<div class='row'>
	<div class='col-lg-4'>

	</div>
	<div class='col-lg-4 text-center'>
  		<img src='assets/images/logo/logo_tousNosProjet.PNG' id='logoBPI' class='img-responsive'/>
	</div>
	<div class='col-lg-4'>
  		<img src='assets/images/logo/iness.png' id='logoIness' class='img-responsive'/>
	</div>
</div>
</footer>

<script src="assets/script/jquery-2.2.2.js"></script>
<script src="assets/css/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>

<!-- FOOTER FIN -->
