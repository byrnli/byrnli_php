<html>
<head title="ABS Population Clock">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
#popNow {
font-size: 2em;
font-weight: bolder;
}
#demo{
	border-radius: 25px;
	border: 2px solid #349834;
	width: 235px;
	padding: 10px;
	text-align: center;
	font-family: sans-serif;
	}
#growth{
	font-size: 0.8em;
}
</style>

<body>
<div id="demo">Population clock<br>
<span id="popNow">

<?php

$url = 'http://www.abs.gov.au/api/demography/populationprojection'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$popdata = json_decode($data); // decode the JSON feed

echo $popdata->popNow; ?>

</span>
<div id="growth">This will increase by 1 person every 
<span id=growthRate>
<?php echo $popdata->growthRate; ?>
</span>
</div>
</div>
</body>