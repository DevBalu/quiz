<?php
/*
* file have functio:
*	getAllQuestions():void " which return arr with all objects with data from table with instruction "
*/
require 'php/get_all_data_table.php';

$quetions = getAllQuestions();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quiz second page</title>
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
				<p class="flow-text">welcome to quiz second page</p>
				<h4 class="flow-text">Answer all questions !!!</h4>
				<br>
			</div>
			<!-- END title of page -->

			<!-- FORM -->
			<form action="php/validation_second_page.php" method="post">
				<!-- sixth quetion -->
				<div class="row">
					<div class="col s12 l6">
						<div class="card-panel teal">
							<span class="white-text">
								6) <?php print $quetions[5]->question ;?>
							</span>
						</div>
					</div>

					<!-- answer -->
					<div class="col s12 l6">
						<h6>choose all correct answers</h6>
						<div class="col s12">
							<select name="sixth[]" multiple>
								<option value="" disabled selected>Choose your option</option>
								<?php
									foreach ($quetions[5]->variants_of_answers as $key => $value) {
										print '<option value="'. $value .'">'. $value .'</option>';
									}
								?>
							</select>
							<label>variants of answers</label>
						</div>
					</div>
					<!-- END answer -->
				</div>
				<div class="divider"></div>
				<!-- END sixth quetion -->

				<!-- seventh question -->
				<div class="row">
					<br>
					<div class="col s12 l6">
						<div class="card-panel teal">
							<span class="white-text">
								7) <?php print $quetions[6]->question ;?>
							</span>
						</div>
					</div>

					<!-- answer -->
					<div class="col s12 l6">
						<div class="input-field col s12">
							<select name="seventh">
								<option value="" disabled selected>Choose your option</option>
								<?php
									foreach ($quetions[6]->variants_of_answers as $key => $value) {
										print '<option value="'. $value .'">'. $value .'</option>';
									}
								?>
							</select>
							<label>variants of answers</label>
						</div>
					</div>
					<!-- END answer -->
				</div>
				<div class="divider"></div>
				<!-- END seventh question -->

				<!-- eight question -->
				<div class="row">
					<br>
					<div class="col s12 l6">
						<div class="card-panel teal">
							<span class="white-text">
								8) <?php print $quetions[7]->question ;?>
							</span>
						</div>
					</div>

					<!-- answer -->

					<div class="col s12 l6">
						<p>Tap bellow to choose color</p>
						<input type="color" name="eight">
					</div>
					<!-- END answer -->
				</div>
				<div class="divider"></div>
				<!-- END eight question -->

				<!-- ninth question -->
				<div class="row">
					<br>
					<div class="col s12 l6">
						<div class="card-panel teal">
							<span class="white-text">
								9) <?php print $quetions[8]->question ;?>
							</span>
						</div>
					</div>

					<!-- answer -->
					<div class="col s12 l6">
						<h6>enter the number below</h6>
						<div class="input-field col s12">
							<input id="ninth" type="number" class="validate" name="ninth">
							<label for="ninth" data-error="Number was entered" data-success="Number was entered">Number</label>
						</div>
					</div>
					<!-- END answer -->
				</div>
				<div class="divider"></div>
				<!-- END ninth question -->

				<!-- tenth question -->
				<div class="row">
					<br>
					<div class="col s12 l6">
						<div class="card-panel teal">
							<span class="white-text">
								10) <?php print $quetions[9]->question ;?>
							</span>
						</div>
					</div>

					<!-- answer -->
					<div class="col s12 l6">
						<div class="input-field col s12">
							<input id='tenth' type="text" class="validate" name="tenth">
							<label for="tenth" data-error="Answer was not entered" data-success="answer was entered">type your answer at question in the field</label>
						</div>
					</div>
					<!-- END answer -->
				</div>
				<div class="divider"></div>
				<br>
				<!-- END tenth question -->


				<div class="divider"></div>
				<h5 class="flow-text center">To get the result of the quiz click on the button "score of quiz"</h5>
				<div class="divider"></div>
				<br>

				<button class="btn waves-effect waves-light  blue-grey darken-2 right" type="submit" name="action">score of quiz
					<i class="material-icons right">send</i>
				</button>
			</form><!-- END FORM -->

			<br>
			<br>
			<br>

		</div><!-- END container -->
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