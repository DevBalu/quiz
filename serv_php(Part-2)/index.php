<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index page</title>
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
		<div class="container">
			<!-- title of page -->
			<div class="title-of-page center">
				<p class="flow-text">welcome to index page</p>
			</div>
			<!-- END title of page -->

			<!-- any information -->
			<section id="any_info">
				<div class="row">
					<div class="col m6 quiz-img">
						<h4 class=" flow-text title">Tite of column</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

					</div>

					<div class="col m6">
						<h4 class=" flow-text title">Tite of column</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

						<!-- any blackquote -->
						<blockquote>
							This is an example quotation that uses the blockquote tag.
						</blockquote>
						<!-- END any blackquote -->

					</div>
				</div>
			</section>
			<!-- END any information -->

			<div class="divider"></div>

			<!-- get started -->
			<section id="get-started">
				<!-- button stepper -->
				<div class="center">
					<a class="waves-effect waves-light btn-large pulse blue-grey darken-2 getstart" onclick="hint()">get start the quiz</a>
				</div>
				<!-- End button stepper -->

				<!-- Notification -->
				<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
					<a id="menu" class="btn btn-floating btn-large blue-grey darken-2"><i class="material-icons">notifications_none</i></a>
				</div>

				<!-- Tap Target Structure -->
				<div class="tap-target" data-activates="menu">
					<div class="tap-target-content">
						<h5>HINT</h5>
						<p>To start quiz tap in navbar button "QUIZ"</p>
					</div>
				</div>
				<!-- END Notification -->

			</section>
			<!-- END get started -->

			<div class="divider"></div>
			<br>

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