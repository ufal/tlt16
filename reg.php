<?php
include("parts/header.php");

$title = "Registration";

function approx($czk){
	echo number_format($czk, 0, ",", " ")." CZK (approx ".number_format(round($czk/27), 0, ",", " ")." EUR)";
}
// TODO: změnit datum
$lateDate = "2.5.2017 23:59";
$lateEndDate = "21.5.2017 23:59";
$earlyDisabled = time() < strtotime($lateDate) ? "" : ' class="disabled"';
$lateDisabled = time() < strtotime($lateEndDate) && time() > strtotime($lateDate) ? "" : ' class="disabled"';
$onsiteDisabled = time() > strtotime($lateEndDate) ? "" : ' class="disabled"';

viewPageHeader($title);
?>
<article class="column">
<?php
viewArticleHeader($title);
?>

<?php /*

<h2>Prices</h2>
<table class="prices">
<thead>
	<tr>
		<th></th>
		<th>Early (until May 2)</th>
		<th>Late (until May 21)</th>
		<th>On-site</th>
	</tr>
</thead>
<tbody>
	<tr class="member-price">
		<th>Regular *</th>
		<td<?=$earlyDisabled?>><?=approx(6210)?></td>
		<td<?=$lateDisabled?>><?=approx(8100)?></td>
		<td<?=$onsiteDisabled?>><?=approx(370*27)?></td>
	</tr>
	<tr class="member-price">
		<th>Student *</th>
		<td<?=$earlyDisabled?>><?=approx(4725)?></td>
		<td<?=$lateDisabled?>><?=approx(5940)?></td>
		<td<?=$onsiteDisabled?>><?=approx(265*27)?></td>
	</tr>
	<tr>
		<th>Regular</th>
		<td<?=$earlyDisabled?>><?=approx(7830)?></td>
		<td<?=$lateDisabled?>><?=approx(9720)?></td>
		<td<?=$onsiteDisabled?>><?=approx(430*27)?></td>
	</tr>
	<tr>
		<th>Student</th>
		<td<?=$earlyDisabled?>><?=approx(5670)?></td>
		<td<?=$lateDisabled?>><?=approx(6615)?></td>
		<td<?=$onsiteDisabled?>><?=approx(280*27)?></td>
	</tr>
</tbody>
</table>
<p><span class="member-price-note">* price for <a href="http://eamt.org/">EAMT</a> members</span></p>
<h3>Workshop price</h3>
<table class="prices">
<thead>
	<tr>
		<th></th>
		<th>Price</th>
	</tr>
</thead>
<tbody>
	<tr>
		<th>Regular</th>
		<td><?=approx(1080)?></td>
	</tr>
	<tr>
		<th>Student</th>
		<td><?=approx(540)?></td>
	</tr>
</tbody>
</table>

<h2>Registration</h2>
<p>Online registration is now closed but you can still register at the venue on the day of the event. Payment on site is possible in cash only, both currencies - CZK and EUR - are acceptable.</p>

*/ ?>

</article>
<?php include("parts/footer.php"); ?>
