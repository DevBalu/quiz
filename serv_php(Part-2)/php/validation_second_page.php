<?php 
/*Start session*/
session_start();

/*
* file have function:
*	getAllQuestions():void " which return arr with all objects with data from table with instruction "
*/
require 'get_all_data_table.php';
// recieve all questions
$quetions = getAllQuestions();

/*
* file have function hex2rgb() which receive as a parameter color Hex and return arr[] with rgb color
*/
require 'hex2rgb.php';

/*-------------------------------------------------------METHODS---------------------------------------------------------------
*					MORE DESCRIPTIONS ARE IN THE FILE "php/methods.php"
*	methods in file:
*		lowTrim() make words lower and Strip whitespace (or other characters) from the beginning and end of a string
*			receives as an argument - unsorder string
*			return - sorted string
*
*		countPoints($user_answer, $data_table) return arr
*
*		each_match_count_points()
*
*		colorValidate()
*/
require 'methods.php';
/*-------------------------------------------------------END METHODS---------------------------------------------------------------*/

/*
*
* The whole evaluation logic will be built in three stages
*
*/

/* ------- THE SECOND STAGE OF EVALUTION ------ */
// check if all fields is not empty
if (!empty($_POST['sixth']) && !empty($_POST['seventh']) && !empty($_POST['eight']) && !empty($_POST['ninth']) && !empty($_POST['tenth'])) {
	// $sixth get arr
	$sixth = $_POST['sixth'];
	// $seventh get string
	$seventh = $_POST['seventh'];
	// $eight get string
	$eight = $_POST['eight'];
	// $ninth get (int)number
	$ninth = $_POST['ninth'];
	// $tenth get string
	$tenth = $_POST['tenth'];


	/*-----------logic for sixth Count Points-----------------*/
	$sixth_user_answer_count_points = each_match_count_points($sixth, $quetions[5]);
	/*-----------END logic for sixth Second Count Points-----------------*/

	/*-----------logic for seventh Count Points-----------------*/
	$seventh_user_answer_count_points = countPoints($seventh, $quetions[6]);
	/*-----------END logic for seventh Second Count Points-----------------*/

	/*-----------logic for eight Count Points-----------------*/
	$eight_user_answer_count_points = colorValidate($eight, $quetions[7]);
	/*-----------END logic for eight Second Count Points-----------------*/

	/*-----------logic for ninth Count Points-----------------*/
	function ninthCP($user_answer, $data_table){
		$result = [
			'question' => $data_table->question,
			'you_answer' => $user_answer,
			'count_points' => ''
		];
		// twenty percent of nr 1500
		$twenty_percent = $data_table->correct_answer * 20 / 100;
		$difference = abs((int)$user_answer - $data_table->correct_answer);

		if ($difference === 0) {
			$result['count_points'] = $data_table->points_correct_answer;
		}else if($difference !== 0 && !($difference > $twenty_percent)) {
			$result['count_points'] = $data_table->points_nearly_correct_answer;
		}else {
			$result['count_points'] = 0;
		}

		return $result;
	}

	$ninth_user_answer_count_points = ninthCP($ninth, $quetions[8]);
	/*-----------END logic for ninth Second Count Points-----------------*/

	/*-----------logic for tenth Count Points-----------------*/
	$tenth_user_answer_count_points = countPoints($tenth, $quetions[9]);
	/*-----------END logic for tenth Count Points-----------------*/

	// save data in session
	$_SESSION['quiz-second-page-result'] = [
		$sixth_user_answer_count_points,
		$seventh_user_answer_count_points,
		$eight_user_answer_count_points,
		$ninth_user_answer_count_points,
		$tenth_user_answer_count_points
	];

	header("Location: ../quiz-third-page.php");
} else {
		print "Not all fields have been filled outб please fill all fields";
}

print '<pre>';
print_r(

);
print '<pre>';