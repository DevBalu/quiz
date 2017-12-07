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
				<h4 class="flow-text">Answer all questions !!!</h4>
			</div>
			<!-- END title of page -->

			<!-- FORM -->
			<form action="php/score.php?page=1" method="post">
				<!-- first quetion -->
				<div class="row">
					<div class="col s12 l6">
						<div class="card-panel teal">
							<span class="white-text">
								1) <?php print $quetions[0]->question ;?>
							</span>
						</div>
					</div>

					<!-- answer -->
					<div class="col s12 l6">
						<div class="input-field col s12">
							<input id='firts' type="text" class="validate" name="first">
							<label for="firts" data-error="answer was not entered" data-success="answer was entered">Type your answer at question in the field</label>
						</div>
					</div>
					<!-- END answer -->
				</div>
				<div class="divider"></div>
				<!-- END first quetion -->

				<!-- second question -->
				<div class="row">
					<br>
					<div class="col s12 l6">
						<div class="card-panel teal">
							<span class="white-text">
								2) <?php print $quetions[1]->question ;?>
							</span>
						</div>
					</div>

					<!-- answer -->
					<div class="col s12 l6">
						<p>Tap bellow to choose color</p>
						<input type="color" name="second">
					</div>
					<!-- END answer -->
				</div>
				<div class="divider"></div>
				<!-- END second question -->

				<!-- third question -->
				<div class="row">
					<br>
					<div class="col s12 l6">
						<div class="card-panel teal">
							<span class="white-text">
								3) <?php print $quetions[2]->question ;?>
							</span>
						</div>
					</div>

					<!-- answer -->

					<div class="col s12 l6">
						<div class="input-field col s12">
							<select name="third">
								<option value="" disabled selected>Choose your option</option>
								<?php
									foreach ($quetions[2]->variants_of_answers as $key => $value) {
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
				<!-- END third question -->

				<!-- fourth question -->
				<div class="row">
					<br>
					<div class="col s12 l6">
						<div class="card-panel teal">
							<span class="white-text">
								4) <?php print $quetions[3]->question ;?>
							</span>
						</div>
					</div>

					<!-- answer -->
					<div class="col s12 l6">
						<h6>Choose all correct answers</h6>
						<div class="fourthQ">
							<?php
								foreach ($quetions[3]->variants_of_answers as $key => $value) {
									$count = $key + 1;
									print '
										<p>
											<input type="checkbox" class="filled-in" id="fourth-'. $value .'" name="fourth-'. $count .'"/>
											<label for="fourth-'. $value .'">'. $value .'</label>
										</p>
									';
								}
							?>
						</div>
					</div>
					<!-- END answer -->
				</div>
				<div class="divider"></div>
				<!-- END fourth question -->

				<!-- Fifth question -->
				<div class="row">
					<br>
					<div class="col s12 l6">
						<div class="card-panel teal">
							<span class="white-text">
								5) <?php print $quetions[4]->question ;?>
							</span>
						</div>
					</div>

					<!-- answer -->
					<div class="col s12 l6">
						<h6>Choose all correct answers</h6>
						<div class="fourthQ">
							<?php
								foreach ($quetions[5]->variants_of_answers as $key => $value) {
									$count = $key + 1;
									print '
										<p>
											<input type="checkbox" class="filled-in" id="fifth-'. $value .'" name="fifth-'. $count .'"/>
											<label for="fifth-'. $value .'">'. $value .'</label>
										</p>
									';
								}
							?>
						</div>
					</div>
					<!-- END answer -->
				</div>
				<div class="divider"></div>
				<br>
				<!-- END Fifth question -->


				<div class="divider"></div>
				<h5 class="flow-text center">After you answer the questions, click the "MORE" button</h5>
				<div class="divider"></div>
				<br>

				<button class="btn waves-effect waves-light  blue-grey darken-2 right" type="submit" name="action">more
					<i class="material-icons right">keyboard_arrow_right</i>
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