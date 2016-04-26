<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les projets à financer</title>
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/normalize.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
  </head>

​<?php include('php/includes/connexionApi.php');?>

<?php
/* OBJET QUI CONTIENT TOUTES LES DONNEES */
 $objResult = json_decode($connexion);
?>

<!-- FUNCTION POUR AFFICHER UNE DONNEE PRECISE -->
<?php include('php/includes/function/affichDataApi.php'); ?>
<!-- FUNCTION FIN -->

  <body>
    <header>
    <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <a target="_blank" href="http://legrandnarbonne.com/">
          <img id="logo-grand-narbonne" class="responsive" src="assets/images/logo/grand-narbonne.png"/>
        </a>
        <a href="index.php">
          <img id="eole-innoveum-nucleum" class="responsive" src="assets/images/logo/eole-innoveum-nucleum.png"/>
        </a>
      </div>
      <div class="col-lg-6">
        <div id="titre-header">
          <h1>CROWD-FUN-DING</h1>
        </div>
        <div class="clear"></div>
        <div id="slogan">
          <p>Ensemble, dévellopons et dynamisons les initiatives locales</p>
        </div>
      </div>
      <div class="col-lg-1">
        <div id="iness">
          <a target="_blank" href="http://entreprendre.legrandnarbonne.com/717-iness-des-hommes-des-projets.html">
            <img id="iness" class="responsive" src="assets/images/logo/iness.png">
          </a>
        </div>
      </div>
      <div class="clear"></div>

      <nav class="navbar navbar-inverse">
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
          </div>

      </nav>

    </div>
    </div>
    </header>

<!-- HEADER STATIQUE FIN -->
<div class='container'>
<div class='row' >
  <div class='col-lg-12 col-centered'>
    <div class="titre_page ">SOUTENEZ UN PROJET</div>
        <div class="row">

<!-- GENERATEUR DE PROJET  -->
<?php
$j=0;
for ($i=0; $i<13; $i++) {
echo "
          <div class='col-lg-4 '>

            <div class='row'>
              <div class='col-lg-12 background-projet'>

                <!-- NOM PROJET [DEBUT] -->
                <div class='row'>
                  <div class='col-lg-12 carrontop'>
                      <div class='vertical_center' style='padding-right:15px'>
                        <h4>";
                        infoProjet($i, "name_fr", "</h4>");
                echo "</div>
                  </div>
                </div>
                <!-- NOM PROJET [FIN] -->


                <!-- IMAGE PROJET [DEBUT] -->
                <div class='row'>
                  <div class='col-lg-12 contour-img-projet'>
                      <img src='";
                      infoProjet($i, "image", "'");
                      echo "class='img-responsive img-projet'>
                  </div>
                </div>
                <!-- IMAGE PROJET [FIN] -->


                <!-- DESCRIPTION - LIRE LA SUITE [DEBUT] -->
                <div class='row'>
                  <div class='col-lg-12 '>
                    <h5>"; infoProjet($i, "owner->first_name", "");
              echo "</h5>
                      <p class='description'>"; infoProjet($i, "description_fr", "[...]");
                        echo "
                      <a target='_blank' href ='"; infoProjet($i, "absolute_url", "'");
              echo ">Lire la suite</a>
                      </p>
                  </div>
                </div>
                <!-- DESCRIPTION - LIRE LA SUITE [FIN] -->


                <!-- MONTANT A ATTEINDRE - DUREE RESTANTE [DEBUT] -->
                <div class='row'>
                  <div class='col-lg-12 '>
                    <div class='row'>
                      <div class='col-lg-6'>
                        <span class='goal'>"; infoProjet($i, "goal", "€");

                echo "</span>
              </div>
                      <div class='col-lg-6'>
                        <img class='clock' src='assets/images/logo/clock.png'/>
                          <span class='time_left'>"; infoProjet($i, "time_left", "");
                   echo " </span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- MONTANT A ATTEINDRE - DUREE RESTANTE [DEBUT] -->


                ";


          echo "<!-- POURCENTAGE [DEBUT] -->
                <div class='row'>
                  <div class='col-lg-12'>
                    <div class='row'>
                      <div class='col-lg-6'>
                        <div class='progressBar'>
                          <div class='progress'>";
                            infoProjet($i, "percent", "%");
                    echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- POURCENTAGE [FIN] -->


                <!-- PARTICIPEZ [DEBUT] -->
                <div class='row'>
                  <div class='col-lg-12'>
                      <input type='button' class='btn btn-primary participez' onclick='location.href=\"";
                          infoProjet($i, "absolute_url", "\";'");
          echo " value='Participez'/>
                  </div>
                </div>
                <!-- PARTICIPEZ [FIN] -->


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
      <a target="_blank" href="http://www.legrandnarbonne.com/">
			   <img src='assets/images/logo/grand-narbonne.png' id='logoNarbonne' class='img-responsive'/>
      </a>
    </div>
		<div class='col-lg-4'>
			<p class='text-center'>
				<a href="php/pages/contact.php">Contact</a>
				 -
				<a href="php/pages/mentions-legales.php">Mentions légales</a>
				 -
				<a href="php/pages/a-propos.php">A propos</a>
			</p>
		</div>
		<div class='col-lg-4'>
      <a target="_blank" href="http://simplon.co/">
			  <img src='assets/images/logo/simplon.png' id='logoSimplon' class='img-responsive'/>
      </a>
    </div>
	</div>
	<div class='row'>
		<div class='col-lg-4'></div>
		<div class='col-lg-4 text-center'>
      <a target="_blank" href="http://tousnosprojets.bpifrance.fr/">
			   <img src='assets/images/logo/bpi-france.png' id='logoBPI' class='img-responsive'/>
      </a>
    </div>
		<div class='col-lg-4'>
			<a target="_blank" href="http://entreprendre.legrandnarbonne.com/717-iness-des-hommes-des-projets.html">
        <img src='assets/images/logo/iness.png' id='logoInessFooter' class='img-responsive'/>
      </a>
    </div>
	</div>
</footer>

<script src="assets/script/jquery-2.2.2.js"></script>
<script src="assets/css/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/script/script.js"></script>

</body>
</html>

<!-- FOOTER FIN -->
