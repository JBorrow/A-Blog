<?php

$current_page = 'archive';
?>

<h1>Archive</h1>

<ul class='archive_list'>
<?php

$list_of_files = scandir('content');

$files_clean = array_diff($array, array('index.md', '.', '..'));

foreach ($files_clean as $fname) {
	// files already in order, thanks ISO!

	echo "<li><a href='latest?fname='".$fname.">";
	$parts = explode("+", $fname);
	$nice_date = date_format(date_create($parts[0]), "d M Y");
	$nice_name = str_replace(' ', '_', $parts[1]);
	echo $nice_date." ".$nice_name."</a></li>\n";
}
?>
</ul>
