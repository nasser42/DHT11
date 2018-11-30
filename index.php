<link rel="stylesheet" type="text/css" href="main.css"></link>

<h1>Température</h1>

<?php

$file = "data.txt";
$texte = file_get_contents($file);
$data = json_decode($texte);

?>
<p>il fait <?php echo $data->temperature; ?>° avec <?php echo $data->humidite ?>% d'humidité</p>

<div id="thermometer">
  <div id="bargraph"></div>
</div>




