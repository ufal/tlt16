<?php
function viewPageHeader($title, $titleSuffix = " | TLT16"){
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$title.$titleSuffix?></title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:700,400,100&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	<!-- <link rel="stylesheet/less" type="text/css" href="css/style.less"> -->
	<!-- <script src="js/less.min.js"></script> -->

	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta charset="utf-8">
</head>
<body>

<header class="main">
	<nav class="column no-gap">
		<ul>
			<li><a href="./">TLT16</a></li>
			<li><a href="call-for-papers.php">Call for papers</a></li>
			<li><a href="submission.php">Submission</a></li>
			<li><a href="program.php">Program</a></li>
			<li><a href="reg.php">Registration</a></li>
			<li><a href="visas.php">Visas</a></li>
			<li><a href="venue.php">Venue</a></li>
			<li><a href="https://typo.uni-konstanz.de/dataprovenance/">WPACL</a></li>
			<li><a href="https://www.oeaw.ac.at/ac/crh2/">CRH</a></li>
			<li><a href="people.php">People</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</nav>
	<div class="full-column cover-photo">
		<div class="matrjoska">
			<h1>TLT16</h1>
			<h2><span class="background">January 23-24</span></h2>
		</div>
	</div>
</header>
<?php
}

function viewArticleHeader($title){
?>
<header>
<h1><?=$title?></h1>
<h2>16th International Workshop on Treebanks and Linguistic Theories</h2>
<p>
	<a href="http://ufal.mff.cuni.cz/tlt16" title="TLT16 website">http://ufal.mff.cuni.cz/tlt16</a><br>
	Charles University, Prague, Czech Republic<br>
	January 23-24, 2018
</p>
</header>
<?php
}
