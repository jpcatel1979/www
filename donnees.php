<?php
$loi = array("un robot ne peut porter atteinte à un être humain ni en restant passif permettre qu'un être humain soit exposé au danger", 
"un robot doit obéir aux ordres qui lui sont donnés par un être humain, sauf si de tels ordres entrent en conflit avec la première loi",
"un robot doit protéger son existence tant que cette protection n'entre pas en conflit avec la première ou la deuxième loi.");
$choix = "";
$choix=$_GET["choix"];
echo "<u>Loi de la robotique N° ".$choix."</u><br><br>";
echo "<b>".$loi[$choix-1]."</b>";
?>

