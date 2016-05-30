<?php

// This is the homepage. Simply presents the index.md page.
//
// Created 2016-05-29


require_once("header.php")
require_once("Parsedown.php")

$md_content = file_get_contents("content/index.md")

$Parsedown = new Parsedown();

echo $Parsedown->text($md_content)

require_once("footer.php")
?>
