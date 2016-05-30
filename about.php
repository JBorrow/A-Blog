<?php

// This is the homepage. Simply presents the index.md page.
//
// Created 2016-05-29

global $current_page;
$current_page = 'About';
require_once("header.php");
require_once("navbar.php");
require_once("parsedown/Parsedown.php");

$md_content = file_get_contents("content/about.md");

$Parsedown = new Parsedown();
echo "<div class='container'>";
echo $Parsedown->text($md_content);
echo "</div>";

require_once("footer.php");
?>
