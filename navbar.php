<?php

$pages = array('Home', 'About', 'Latest', 'Archive');
global $current_page;

?>


<div class="container">
	<ul class="nav nav-pills">
		<?php
		foreach ($pages as $this_page) {
			echo "<li";
			if ($this_page == $current_page) {
				echo " class='active'>";
			} else {
				echo ">";
			}
			if ($this_page == 'Home') {
				echo "<a href='index.php'>".$this_page."</a></li>\n";
			} else {
				echo "<a href='".strtolower($this_page).".php'>".$this_page."</a></li>\n";
			}
		}
		?>
	</ul>
</div><!--/.nav-collapse -->
