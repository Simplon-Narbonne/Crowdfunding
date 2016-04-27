<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contact</title>

	<?php include("../includes/header.php");?>

<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-centered">
				<div class="titre_page">CONTACTEZ NOUS</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-centered">
				<div class="contact">
					<form method="POST" action="contact.php">
						<label for="mailLabel">Votre e-mail* :</label>
						<input type="email" name="mail" id="mail" placeholder="contact@mail.fr" required><br/>
						<label for="objetLabel">Objet* : </label>
						<input type="text" name="objet" id="objet" placeholder="objet" required><br/>
						<label for="contenuLabel">Votre message* : </label><br/>
						<textarea name="contenu" id="contenu" rows="8" cols="40" required></textarea><br/>
						<input type="submit" name="submit" id="submit" value="Envoyer">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

	<?php include("../includes/footer.php");?>

	<?php include("../includes/bdd.php");?>

	<?php
	$mail = $_POST['mail'];
	$objet = $_POST['objet'];
	$contenu = $_POST['contenu'];

	$prepare = $bdd->prepare('INSERT INTO contact(mail, objet ,contenu)
	VALUES (:mail, :objet, :contenu)');
	$prepare->execute(array('mail' => $mail,'objet' => $objet,'contenu' => $contenu
	));
	?>

	<?php
	$header	= "MIME-Version: 1.0 \r\n";
	$header .= 'From: "Grand Narbonne - Crowdfunding" <server@vps269009.ovh.net>' . "\n";
	$header .= 'Content-Type:text/html; charset="utf-8"' . "\n";
	$header .= 'Content-Transfer-Encoding: 8bit';

	$message ='
	<html>
		<body>
			<h3 style="text-align:left ; font-weight:bold">
			Résumé de votre e-mail :
			</h3>
			<p>
			Votre e-mail de contact (en cas de réponse) :
			<em>'.$mail.'</em>
			</p>
			<p style="text-align:left">
			Objet :
			<em>'.$objet.'</em>
			</p>
			<div style="text-align:center">
			<em>'.$contenu.'</em>
			</div>
		</body>
	</html>
	';
	$boite_de_recetion = $mail + "colas.p@hotmail.fr";
	mail($boite_de_recetion, utf8_encode("[Accusée Reception] " . $objet), $message, $header);
	?>
