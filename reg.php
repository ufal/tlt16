<?php
include("parts/header.php");

$title = "Registration";

// CNB EUR rate
$cacheDir = "cache";
$rateFile = "$cacheDir/rateEUR.txt";
if (!file_exists($cacheDir)) {
    mkdir($cacheDir);
}

$cacheExists = file_exists($rateFile);
$rateOld = true;
$rate = 25.65; // fallback rate

if ($cacheExists) {
	$cachedRate = file_get_contents($rateFile);
	$cachedRate = explode(";", $cachedRate);
	if(((int)$cachedRate[0])+60*60*24 > time())
		$rateOld = false;
	else
		$rate = (float)$cachedRate[1];
}

if (!$cacheExists || $rateOld) {
	/* CNB daily rates file structure:
	03.11.2017 #213
	země|měna|množství|kód|kurz
	[...]
	EMU|euro|1|EUR|25,650
	[...]
	*/
	$cnbRates = file("http://www.cnb.cz/cs/financni_trhy/devizovy_trh/kurzy_devizoveho_trhu/denni_kurz.txt");
	foreach ($cnbRates as $eurRateLine)
		if(preg_match('/EUR/', $eurRateLine)) break; // get the EUR line

	$eurRateLine = explode("|", $eurRateLine);
	$eurRate = trim($eurRateLine[4]);
	$rate = floatval(str_replace(",",".",$eurRate)); // comma to dot

	file_put_contents($rateFile, time().";".$rate);
}
// /CNB EUR rate

function approx($czk){
	global $rate;
	return number_format($czk, 0, ",", " ")." CZK (approx ".number_format(ceil($czk/$rate), 0, ",", " ")." EUR)";
}

$lateDate = "27.12.2017 23:59";
$earlyDisabledClass = time() < strtotime($lateDate) ? "" : ' class="disabled"';
$lateDisabledClass = time() > strtotime($lateDate) ? "" : ' class="disabled"';

viewPageHeader($title);
?>
<article class="column">
<?php
viewArticleHeader($title);
?>

<h2>Prices</h2>
<table class="prices" style="margin-bottom: 1em;">
<thead>
	<tr>
		<th></th>
		<th>Early (until <?=date("F j", strtotime($lateDate))?>)</th>
		<th>Late and On-site</th>
	</tr>
</thead>
<tbody>
	<tr>
		<th>Regular</th>
		<td<?=$earlyDisabledClass?>><?=approx(149*25.65)?></td>
		<td<?=$lateDisabledClass?>><?=approx(180*25.65)?></td>
	</tr>
	<tr>
		<th>Student</th>
		<td<?=$earlyDisabledClass?>><?=approx(99*25.65)?></td>
		<td<?=$lateDisabledClass?>><?=approx(130*25.65)?></td>
	</tr>
</tbody>
</table>
<h3>Workshop</h3>
<p>Workshop on Data Provenance (Jan. 22, organized by Miriam Butt of Konstanz Univ., Germany) is free of charge.</p>

<h2>Registration</h2>
<p>An application for online registration for the event coming soon.</p>

</article>
<?php include("parts/footer.php"); ?>
