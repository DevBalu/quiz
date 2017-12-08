<?php
//declaration active class in dependence of location
	$home = '';
	$quiz = '';
	$gallery = '';
	if (strpos($_SERVER['REQUEST_URI'], 'index.php')) {
		$home = 'active';
	}else if ( strpos($_SERVER['REQUEST_URI'], 'quiz-first-page.php') ){
		$quiz = 'active';
	}else if( strpos($_SERVER['REQUEST_URI'], 'gallery.php') ){
		$gallery = 'active';
	}
 ?>
<nav class="custom_bg">
	<div class="container">
	<div class="nav-wrapper">
		<a href="index.php" class="brand-logo flow-text">LOGO</a>
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
			<li class=" <?php print ($home == 'active' ? 'active' : '') ?> "><a href="index.php">HOME</a></li>
			<li class="<?php print ($quiz == 'active' ? 'active' : '') ?>"><a href="quiz-first-page.php">QUIZ</a></li>
			<li class="<?php print ($gallery == 'active' ? 'active' : '')?>"><a href="gallery.php">GALLERY</a></li>
		</ul>
		<ul class="side-nav" id="mobile-demo">
			<li class=" <?php print ($home == 'active' ? 'active' : '') ?> "><a href="index.php">HOME</a></li>
			<li class=" <?php print ($quiz == 'active' ? 'active' : '') ?> "><a href="quiz-first-page.php">QUIZ</a></li>
			<li class="<?php print ($gallery == 'active' ? 'active' : '')?>"><a href="gallery.php">GALLERY</a></li>
		</ul>
	</div>
	</div>
</nav>

