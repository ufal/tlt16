<?php
#require("secret.php");
$document = "1T4FmudjitXJxkERDtmFJ6RA80LSsjXM60Ek4o89uGYg";
$key = "AIzaSyDJOjkBsJe5A3VHPHtAW0N66xfhAcHivL8";
$range = "Sheet1!A:B";
echo "requesting google sheet<br>";
$program = file_get_contents("https://sheets.googleapis.com/v4/spreadsheets/$document/values/$range?key=$key");

$sheetjson = json_decode($program);
$table = $sheetjson->values;

if($table)
	echo "generating program<br>";

$generated = "<!-- program generated: ".date("r")." -->\n";
$generated .= '<table class="program-table">';
foreach ($table as $row) {
	$generated .= "<tr>";
	foreach ($row as $cell) {
		$onlyTime = preg_match('/^\d?\d:\d\d/', $cell) === 1;

		$colspan = "";
		if(count($row) == 1 && !$onlyTime)
			$colspan = " colspan='2' class='date'";

		$class = "";
		if($onlyTime)
			$class = " class='time'";
			
		$cell = nl2br($cell);
		$generated .= "<td$colspan$class>$cell</td>";

		// fix pro prázdné řádky :(
		if(count($row) == 1 && $onlyTime)
			$generated .= "<td></td>";
	}
	$generated .= "</tr>";
}
$generated .= '</table>';

file_put_contents("program.html", $generated);

echo "program complete:<br><br>";
echo $generated;
