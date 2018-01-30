<?php

$url = 'http://www.abs.gov.au/api/demography/populationprojection'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$popdata = json_decode($data); // decode the JSON feed

echo $popdata->popNow;

?>