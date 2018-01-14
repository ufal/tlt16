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

	<h1>Latest News</h1>
	<p>Proceedings have been published in the ACL Anthology (<a href="http://aclweb.org/anthology/W/W17/#7600">W76</a>, year is 2017). All papers have been linked from the
		<a href="https://ufal.mff.cuni.cz/tlt16/program.php">Program page</a> as well; you can also download the
		<a href="http://aclweb.org/anthology/W/W17/W17-76.pdf">full proceedings book</a>. 
	</p>
	<p>Registration for the conference is now open (<a href="http://ufal.mff.cuni.cz/tlt16/reg.php">Prices</a>, 
		shortcut to <a href="https://ufal.mff.cuni.cz/tlt16/registration">Registration Form</a>)! 
		At least one author of an accepted paper must register before Dec. 27, 2017.
	</p>
	
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

<div class="column">
	<h2 id="invited">Invited talks</h2>
	<p>&nbsp;</p>
	<h3>Marie Candito, Université Paris Diderot, France:</h3>
	
	<h3>Annotating and parsing to semantic frames: feedback from the French FrameNet project</h3>

	<p>
Building systems able to provide a semantic representation of texts has long been an objective, both in linguistics and in applied NLP. Although advances in machine learning sometimes seem to diminish the need to use as input sophisticated structured representations of sentences, the enthusiasm for interpreting trained neural networks somewhat seems to reaffirm that need.
Because they represent schematic situations, semantic frames (Fillmore, 82), as intantiated into FrameNet (Baker, Fillmore and Petruck, 83) are an appealing level of generalization over the eventualities described in texts.

In this talk, I will present some feedback from the development of a French FrameNet, including analysis of the main difficulties we faced during annotation. I will describe how linking generalizations can be extracted from the frame-annotated data, using deep syntactic annotations.
I will then investigate what kind of input is most effective for FrameNet parsing, from no syntax at all to deep syntactic representations.
	</p>
	<p>
The work I'll present is a joint work with 
Marianne Djemaa, Philippe Muller, Laure Vieu,
G. de Chalendar, B. Sagot, P. Amsili (for the French FrameNet), 
C. Ribeyre, D. Seddah, G. Perrier, B. Guillaume (deep syntax), and 
Olivier Michalon, Alexis Nasr (semantic parsing).
	</p>
	
        <h3>Lilja Øvrelid, University of Oslo, Norway:</h3>
	<h3>Downstream use of syntactic analysis: does representation matter?</h3>
	<p>
	
Research in syntactic parsing is largely driven by progress in
intrinsic evaluation and there have been impressive developments in
recent years in terms of evaluation measures, such as
F-score or labeled accuracy. At the same time, a range of different
syntactic representations have been put to use in treebank annotation
projects and there have been studies measuring various aspects of the
"learnability" of these representations and their suitability for
automatic parsing, mostly also evaluated in terms of intrinsic
measures.

In this talk I will provide a different perspective on these
developments and give an overview of research that examines the
usefulness of syntactic analysis in downstream applications. The talk will
discuss both constituency-based and dependency-based representations,
with a focus on various flavours of dependency-based representations,
ranging from purely syntactic representations to more semantically
oriented representations. The recently completed shared task on
Extrinsic Parser Evaluation was aimed at assessing the utility of
different types of dependency representations for downstream
applications and I will discuss some of our findings based on the
results from this task as well as follow-up experiments and analysis.
	</p>
</div>

<div class="column">
	<h2>Co-located workshop: Workshop on Provenance and Annotation</h2>
	<p>This year, the TLT is co-located with the <a href="https://typo.uni-konstanz.de/dataprovenance">Workshop 
		on Provenance and Annotation in Computational Linguistics 2018</a>, 
		taking place also in Prague (same venue as TLT), on January 22nd, 2018,
		organized by Miriam Butt of University of Konstanz, Germany. 
		The workshop is free of charge (please use the TLT registration form to register for the Workshop).
			</p>
</div>


<div class="column">
	<h2>Co-located workshop: CRH</h2>
	<p>Since TLT in Warsaw, the <a href="https://www.oeaw.ac.at/ac/crh2/">CRH ("Corpus-based Research in the Humanities") workshop</a> has been collocated with TLT. 
		This year, it takes place just a couple hours away - in Vienna, Austria, immediately following the TLT. 
	</p>

<?php include("parts/footer.php"); ?>
