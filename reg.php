<?php
include("parts/header.php");

$title = "Registration";

function approx($czk){
	echo number_format($czk, 0, ",", " ")." CZK (approx ".number_format(round($czk/25.65), 0, ",", " ")." EUR)";
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
		<td<?=$earlyDisabledClass?>>149 EUR</td>
		<td<?=$lateDisabledClass?>>180 EUR</td>
	</tr>
	<tr>
		<th>Student</th>
		<td<?=$earlyDisabledClass?>>99 EUR</td>
		<td<?=$lateDisabledClass?>>130 EUR</td>
	</tr>
</tbody>
</table>
<h3>Workshop</h3>
<p>Workshop on Data Provenance (Jan. 22, organized by Miriam Butt of Konstanz Univ., Germany) is free of charge.</p>

<h2>Registration</h2>
<p>An application for online registration for the event coming soon.</p>

</article>
<?php include("parts/footer.php"); ?>
