<?php

$pages = list('Home', 'About', 'Latest', 'Archive');

?>

<nav class="navbar navbar-default">
<div class="container-fluid">
  <div class="navbar-header">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	  <span class="sr-only">Toggle navigation</span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="#">Project name</a>
  </div>
  <div id="navbar" class="navbar-collapse collapse">
	<ul class="nav navbar-nav">
		<?php
		foreach ($pages as $this_page) {
			echo "<li";
			if ($this_page == $current_page) {
				echo " class='active'>";
			} else {
				echo ">";
			}
			echo "<a href='".strtolower($this_page).".php'>".$this_page."</a></li>\n";
		}
		?>
	</ul>
	<ul class="nav navbar-nav navbar-right">
	</ul>
  </div><!--/.nav-collapse -->
</div><!--/.container-fluid -->
</nav>
