<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quiz first page</title>
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
				<p class="flow-text">welcome to quiz first page</p>
			</div>
			<!-- END title of page -->

			<form action="php/score.php">
				<!-- quetion -->
				<div class="row">
					<div class="col m6 quiz-img">
						<div class="card-panel teal">
							<span class="white-text">I am a very simple card. I am good at containing small bits of information.
							I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
							</span>
						</div>
					</div>

					<!-- answer -->
					<div class="col m6">
						
					</div>
					<!-- END answer -->
				</div>
				<!-- END quetion -->

				<br>
				<div class="divider"></div>
				<br>

				
  <!-- Element Showed -->
<a class="waves-effect waves-light btn" onclick="$('.tap-target').tapTarget('open')">Open tap target</a>
  <a id="menu" class="waves-effect waves-light btn btn-floating" ><i class="material-icons">menu</i></a>
  <!-- Tap Target Structure -->
  <div class="tap-target" data-activates="menu">
    <div class="tap-target-content">
      <h5>Title</h5>
      <p>A bunch of text</p>
    </div>
  </div>

				<button class="btn waves-effect waves-light  blue-grey darken-2 right" type="submit" name="action">more
					<i class="material-icons right">send</i>
				</button>
			</form>

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