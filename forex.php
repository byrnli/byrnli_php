<html>
<head title="Exchange Rates">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
#load{
font-size: 0.8em;
}
#demo{
	border-radius: 25px;
	border: 2px solid #349834;
	width: 235px;
	padding: 10px;
	text-align: center;
	font-family: sans-serif;
	}
#display{
	font-size: 0.8em;
}
</style>

<body>
<div id="demo">
<span id="load">
1 AUD is 
<?php
$url = 'https://openexchangerates.org/api/latest.json?app_id=013a14a8528e43259be556f393e6d5a3'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$forexdata = json_decode($data); // decode the JSON feed
$rates = $forexdata->rates;
$audmxn = round( ($rates->MXN / $rates->AUD), 2);
echo $audmxn; ?>
 Mexican Pesos
</span>
<br>
<span id="display">
1 AUD is
<?php
$audpen = round( ($rates->PEN / $rates->AUD), 2);
echo $audpen; ?>
Peruvian Sol
</span>
<br>
<span id="display">
1 AUD is
<?php
$audcop = round( ($rates->COP / $rates->AUD), 2);
echo $audcop; ?>
Colombian Sol
</span>
<br>
<span id="display">
1 AUD is
<?php
$audusd = round( ($rates->USD / $rates->AUD), 2);
echo $audusd; ?>
USD
</span>
</div>
</body>
