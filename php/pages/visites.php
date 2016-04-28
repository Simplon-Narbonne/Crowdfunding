	<?php include("../includes/bdd.php");?>

<?php

$time = date("U");
echo "Seconde : " . $time . "<br>" ;
echo "IP :" . $_SERVER["REMOTE_ADDR"];

 ?>
