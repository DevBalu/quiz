<?php
/*
* Including file gallery_logic 
* he contain main logic for functionality of gallery
*/
require 'php/gallery_logic.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gallery page</title>
	<!-- styles -->
	<?php require 'components/links.php'; ?>
	<!-- END styles -->
</head>
<body>
	<!-- header -->
	<?php require 'components/header.php'; ?>
	<!-- END header -->

	<!-- main content areas -->
	<main>
		<div class="container-fluid">
			<!-- title of page -->
			<div class="title-of-page center">
				<p class="flow-text">welcome to Gallery page</p>
			</div>
			<!-- END title of page -->

			<div class="row">
				<div class="col l1 offset-l1 s2">
					<p class="flow-text">MENU</p>
					<?php 
						foreach ($menu as $key => $value) {
							print '<a href=gallery.php?df='. $value .' class="btn waves-effect waves-light" name="action">'. $value .'</a><br><br>';
						}
					 ?>
					
				</div>

				<div class="col l9  offset-l1 s10">

					<ul id="lightgallery" class="list-unstyled">
						<?php

							foreach ($thumbs as $key => $value) {
								print '<li class="col l4 s4 thumbPhoto" 
									data-src="images/gallery/'. $_GET['df'] . '/' . $value .'">
									<a href="#">
										<img class="img-responsive" src="images/gallery/'. $_GET['df'] . '/' . 'thumbs/'. $value .'" />
									</a>
								</li>';
							}
						?>
						
					</ul>

				</div>
			</div>

		</div>
	</main>

	<!-- END main content areas -->

	<!-- footer -->
	<?php require 'components/footer.php'; ?>
	<!-- END footer -->

	<!-- scripts -->
	<?php require 'components/scripts.php'; ?>
	<!-- END scripts -->

</body>
</html>	