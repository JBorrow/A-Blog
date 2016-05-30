<?php

$fname = $_GET['fname'];

if (!$fname) {
	$list_of_files = scandir('content');
	$files_clean = array_values(array_diff($list_of_files, array('about.md', 'index.md', '.', '..')));
	$fname = $files_clean[0];
	$current_page = 'Latest';
} else {
	$current_page = 'Archive';
}
 
require_once("parsedown/Parsedown.php");
require_once("header.php");
require_once("navbar.php");

$md_content = file_get_contents("content/".$fname);

$Parsedown = new Parsedown();
echo "<div class='container'>";
echo $Parsedown->text($md_content);
echo "</div>";


require_once("footer.php");
