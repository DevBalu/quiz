<?php
//including final score
require 'php/score.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quiz third page</title>
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
				<p class="flow-text">congratulations</p>
				<h3 class="flow-text seeRes">you have successfully answered all questions</h3>
				<h3 class="flow-text seeRes">below can see your results</h3>
				<br>
			</div>
			<!-- END title of page -->

			<table class="responsive-table">
				<thead>
					<tr>
						<th>NR.</th>
						<th>Question</th>
						<th>You answer</th>
						<th>Correct answer</th>
						<th>Points</th>
					</tr>
				</thead>

				<tbody>

				<?php 
					foreach ($complete_assembly as $key => $value) {
						$nr = $key +1;
						print '<tr>
								<td>'.$nr . '</td>
								<td>'. $value['question'] .'</td>
								<td>'. $value['you_answer'] .'</td>
								<td>'. $value['correct_answer'] .'</td>
								<td>'. $value['count_points'] .'</td>
							</tr>';
					}
				?>
				</tbody>
			</table>

			<br>
			<a class="waves-effect waves-light btn-large pulse blue-grey darken-2 right" class="getstart">final score : <?php print $final_score . " Points"; ?></a>

		</div><!-- END container -->
		<br>
		<br>
		<br>
		<br>

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