<?php
$movies = array(
"Drama" => array("The Shawshank Redemption", "The Green Mile",
"Requiem for a Dream"),
"Comedy" => array("The Hangover", "Knocked up", "Due Date"),
"Horror" => array("Halloween", "The Conjuring", "The Shining"),
);
$genre = $_GET["genre"];
$sk = $_GET['search_key'];
$target = $movies[$genre];
$output = ""; # initialize output
foreach($target as $element)
{
	# is the search key a substring of a movie?
	if(strpos($element, $sk) !== false)
	{
		$output = $output . $element . "<br />";
	}
}
if($output === "")
$output = "No match!";
echo $output;
?>
