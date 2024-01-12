

<?php
require __DIR__ . "/movies.php";

$theExorcist = new movie("The exorcist", "stati uniti", "inglese", "sub-eng");
$laVitaèBella = new movie("La vita è bella", "italia", "italiano", "sub-eng");

echo $theExorcist->getFullInfos() . "<br>";

echo $laVitaèBella->getFullInfos();
