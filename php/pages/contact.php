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
						<input type="mail" name="mail" id="mail" placeholder="contact@mail.fr"><br/>
						<label for="objetLabel">Objet* : </label>
						<input type="text" name="objet" id="objet" placeholder="objet"><br/>
						<label for="contenuLabel">Votre message* : </label><br/>
						<textarea name="contenu" id="contenu" rows="8" cols="40"></textarea><br/>
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
