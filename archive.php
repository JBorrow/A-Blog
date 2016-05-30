<?php

$current_page = 'Archive';

require_once("header.php");
require_once("navbar.php");
?>

<div class='container'>
<h1>Archive</h1>

<ul class='archive_list'>
<?php

$list_of_files = scandir('content');

$files_clean = array_reverse(array_diff($list_of_files, array('about.md', 'index.md', '.', '..')));

foreach ($files_clean as $fname) {
	// files already in order, thanks ISO!

	echo "<li><a href='latest.php?fname=".urlencode($fname)."'>";
	$parts = explode("+", $fname);
	$nice_date = date_format(date_create($parts[0]), "d M Y");
	$nice_name = str_replace('_', ' ', $parts[1]);
	echo $nice_date." - ".substr($nice_name, 0, -3)."</a></li>\n";
}
?>
</ul>
</div>
<?php 
require_once("footer.php");
