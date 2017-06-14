<?php
include("parts/header.php");

$title = "Program";
viewPageHeader($title);
?>

<article class="column">
<?php
viewArticleHeader($title);
?>

<?php
if(file_exists("program/program.html")):
	?>
		<p><strong>Schedule</strong><br>
	<?php
	include("program/program.html");
endif;
?>

</article>

<?php include("parts/footer.php"); ?>
