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
				<div class="col l1 offset-l1">
					<button class="btn waves-effect waves-light" type="submit" name="action">Nature</button>
					<br>
					<br>
					<button class="btn waves-effect waves-light" type="submit" name="action">Nature</button>
				</div>

				<div class="col l9  offset-l1">
					<div class="col l4">
						<a href="images/gallery/Nature/001.jpg">
							<img src="images/gallery/Nature/thumbs/001.jpg" />
						</a>
					</div>
					<div class="col l4">
						<a href="images/gallery/Nature/001.jpg">
							<img src="images/gallery/Nature/thumbs/001.jpg" />
						</a>
					</div>
					<div class="col l4">
						<a href="images/gallery/Nature/001.jpg">
							<img src="images/gallery/Nature/thumbs/001.jpg" />
						</a>
					</div>	
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