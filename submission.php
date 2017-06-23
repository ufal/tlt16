<?php
include("parts/header.php");

$title = "Submission";
viewPageHeader($title);
?>

<article class="column">
<?php
viewArticleHeader($title);
?>
  
<p>Please upload your submissions via EasyChair: <a href="https://easychair.org/conferences/?conf=tlt16">https://easychair.org/conferences/?conf=tlt16</a></p>

<h2>Important dates</h2>
<?php include("parts/important-dates.php"); ?>
         
For details, please see <a href="http://ufal.mff.cuni.cz/tlt16/call-for-papers.php">http://ufal.mff.cuni.cz/tlt16/call-for-papers.php</a>.
  
</article>

<?php include("parts/footer.php"); ?>
