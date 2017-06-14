<?php
include("parts/header.php");

$title = "16th International Workshop on Treebanks and Linguistic Theories";
viewPageHeader($title, ""); // title bez suffixu
?>
<div class="column">
	<h1>16th International Workshop on Treebanks and Linguistic Theories</h1>
	<p>will be held in<br>
	Prague, Czech Republic<br>
	January 23-24, 2018</p>

	<p>at the <a href="http://www.mff.cuni.cz/" target="_blank">Faculty of Mathematics and Physics, Charles University</a>,<br>
	Malostranské náměstí 25, 11800 Prague 1, Czech Republic</p>
</div>

<div class="column infobox" id="templates">
	<div class="half-column left">
		<div class="matrjoska">
			<h2>Important dates</h2>
			<?php include("parts/important-dates.php"); ?>
		</div>
	</div><div class="half-column right">
		<div class="matrjoska">
			<h2>Local chair</h2>
			<p><a href="http://ufal.mff.cuni.cz/jan-hajic" target="_blank">Jan Hajic</a></p>
		</div>
	</div>
	<div class="clear"></div>
</div>

<div class="column">
	<h2>Overview</h2>
	<p>TLT serves as a venue for new and ongoing research on the topic of linguistics and treebanks. The 16th edition of TLT will return to the heart of Europe, at Charles University, Prague, in January 2018.</p>
	<p>For 16 years now, TLT has served as a venue for new and ongoing high-quality work related to syntactically-annotated corpora, i.e., treebanks; with a focus on all the aspects of treebanking – descriptive, theoretical, formal and computational – but also going beyond treebanks, including other levels of annotation such as frame semantics, coreference or events, to name only a few.</p>
</div>
<?php include("parts/footer.php"); ?>
