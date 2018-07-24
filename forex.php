<html>
<head title="Exchange Rates">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
#popNow {
font-size: 1em;
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
<div id="demo">
<span id="popNow">
1 AUD is 
<?php
$url = 'https://openexchangerates.org/api/latest.json?app_id=013a14a8528e43259be556f393e6d5a3'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$forexdata = json_decode($data); // decode the JSON feed
echo $forexdata-> rates.MXN; ?>
 Mexican Pesos

</span>
<div id="growth"> 
<span id=growthRate>

</span>
</div>
</div>
</body>
