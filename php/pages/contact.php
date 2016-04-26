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
				<div class="contact">
					<form method="POST" action="contact.php">
						<input type="mail" name="mail" placeholder="contact@mail.fr"><br/>
						<input type="text" name="objet" placeholder="objet"><br/>
						<textarea name="contenu" rows="8" cols="40"></textarea><br/>
						<input type="submit" name="submit" value="Envoyer">
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
	$text = $_POST['objet'];
	$contenu = $_POST['contenu'];

	$prepare = $bdd->prepare('INSERT INTO contact(mail, objet ,contenu)
	VALUES (:mail, :objet, :contenu)');
	$prepare->execute(array('mail' => $mail,'objet' => $text,'contenu' => $contenu
));
	?>
