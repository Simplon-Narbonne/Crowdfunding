	<?php include("../includes/bdd.php");?>

<?php

$time = date("U");
echo "Seconde :" . $time . "<br/>";
$ip_user = $_SERVER["REMOTE_ADDR"];
echo "IP :" . $ip_user;

$req_ip_existe = $bdd->prepare('SELECT * FROM visites(WHERE ip = ?)');
$req_ip_existe->execute(array($ip_user));
$ip_existe = $req_ip_existe->rowCount();

if ($ip_existe == 0){
	$add_ip = $bdd->prepare('INSERT INTO visites(ip, time)
	VALUES (:ip, :time)');
	$add_ip->execute(array('time' => $time, 'ip' => $ip_user));
}else{
	$ip_existe = $bdd->prepare('UPDATE visite SET time = ? WHERE ip = ?');
	$ip_existe->execute(array($time, $ip_user));
}

$nb_user = $bdd->query('SELECT * FROM visites');
$show_nb_user = $nb_user->rowCount();
echo $show_nb_user;

 $time - $temps_session;
 ?>
