<nav class="subnav">
	<ol class="nav nav-list container-fluid nav-collapse collapse in">
		<li<?php echo (isset($page) && $page=='home') ? ' class="active" ' :'' ?>><a href="<?php echo $path; ?>index.php" title="">Home</a></li>
		<li<?php echo (isset($page) && $page=='culture') ? ' class="active" ' :'' ?>><a href="<?php echo $path; ?>culture/culture.php" title="">Culture</a></li>
		<li<?php echo (isset($page) && $page=='history') ? ' class="active" ' :'' ?>><a href="<?php echo $path; ?>history/history.php" title="">History</a></li>
		<li<?php echo (isset($page) && $page=='food') ? ' class="active" ' :'' ?>><a href="<?php echo $path; ?>food/food.php" title="">Food</a></li>
		<li<?php echo (isset($page) && $page=='tour') ? ' class="active" ' :'' ?>><a href="<?php echo $path; ?>askaway/askaway.php" title="">Your Thoughts!</a></li>
		<li<?php echo (isset($page) && $page=='about') ? ' class="active" ' :'' ?>><a href="<?php echo $path; ?>grading/grading.php" title="">About/Grading</a></li>
		<li<?php echo (isset($page) && $page=='about') ? ' class="active" ' :'' ?>><a href="<?php echo $path; ?>references/references.php" title="">References</a></li>
	</ol>
</nav><!-- end subnav -->