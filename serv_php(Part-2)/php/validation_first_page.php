<?php 
/*Start session*/
session_start();

/*
* file have functio:
*	getAllQuestions():void " which return arr with all objects with data from table with instruction "
*/
require 'get_all_data_table.php';
// recieve all questions
$quetions = getAllQuestions();

/*-------------------------------------------------------METHODS---------------------------------------------------------------*/
/*
* file have function hex2rgb() which receive as a parameter color Hex and return arr[] with rgb color
*/
require 'hex2rgb.php';

/*
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

/* ------- THE FIRST STAGE OF EVALUTION ------ */
	// check if all fields is not empty
	if (!empty($_POST['first']) && !empty($_POST['second']) && !empty($_POST['third']) && !empty($_POST['fourth']) && !empty($_POST['fifth'])) {
		/*-------- answers of questions --------*/
		// (string) $first
		$first_user_answer = $_POST['first'];
		// (string) $second get Hex color 
		$second_user_answer = $_POST['second'];
		// $third get string
		$third_user_answer = $_POST['third'];
		// $fourth get arr
		$fourth_user_answer = $_POST['fourth'];
		// $fifth get arr
		$fifth_user_answer = $_POST['fifth'];


		/*-----------logic for first Count Points-----------------*/
		$first_user_answer_count_points = countPoints($first_user_answer, $quetions[0]);
		/*-----------END logic for first Count Points-----------------*/

		/*-----------logic for Second Count Points-----------------*/
		$second_user_answer_count_points = colorValidate($second_user_answer, $quetions[1]);
		/*-----------logic for Second Count Points-----------------*/


		/*-----------logic for third Count Points-----------------*/
		$third_user_answer_count_points = countPoints($third_user_answer, $quetions[2]);
		/*-----------END logic for third Count Points-----------------*/


		/*-----------logic for fourth Count Points-----------------*/
		$fourth_user_answer_count_points = each_match_count_points($fourth_user_answer, $quetions[3]);
		/*-----------END logic for fourth Second Count Points-----------------*/

		/*-----------logic for fifth Count Points-----------------*/
		$fifth_user_answer_count_points =  countPoints(implode(" ", $fifth_user_answer), $quetions[4]);
		/*-----------END logic for fifth Count Points-----------------*/

		// save data in session
		$_SESSION['quiz-first-page-result'] = [
			$first_user_answer_count_points,
			$second_user_answer_count_points,
			$third_user_answer_count_points,
			$fourth_user_answer_count_points,
			$fifth_user_answer_count_points
		];

		// if all is okey redirect to quiz second page
		header('Location: ../quiz-second-page.php');

	}/*END if for first page*/
	else {
		print "Not all fields have been filled outб please fill all fields";
	}
/* -------END  THE FIRST STAGE OF EVALUTION ------ */