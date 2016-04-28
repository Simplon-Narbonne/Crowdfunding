	<?php include("../includes/bdd-visites.php");?>

<?php

$time = date("U");
echo "Seconde : " . $time . "<br>" ;
echo "IP :" . $_SERVER["REMOTE_ADDR"];

 ?>
