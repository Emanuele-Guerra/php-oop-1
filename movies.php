<?php
require __DIR__ . "/index.php";

$theExorcist = new movie();
$theExorcist->nation = "usa";
$theExorcist->lang = "english";
$theExorcist->subEng = "true";


var_dump($theExorcist);
