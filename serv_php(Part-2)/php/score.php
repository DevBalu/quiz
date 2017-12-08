<?php 
/*Start session*/
session_start();
/*
* file have functio:
*	getAllQuestions():void " which return arr with all objects with data from table with instruction "
*/
require 'php/get_all_data_table.php';

$quetions = getAllQuestions();


$final_result = [];
// push data from first page in arr
foreach ($_SESSION['quiz-first-page-result'] as $key => $value) {
	$final_result[] = $value;
}
// push data from second page in arr
foreach ($_SESSION['quiz-second-page-result'] as $key => $value) {
	$final_result[] = $value;
}


$complete_assembly = [];
$final_score = 0;
foreach ($final_result as $key => $value) {
	$assembly = $value;
	if (!is_int($quetions[$key]->correct_answer) ) {
		$assembly['correct_answer'] = implode(", ",$quetions[$key]->correct_answer);
	}else {
		$assembly['correct_answer'] = $quetions[$key]->correct_answer;
	}

	if ( is_array($assembly['you_answer']) ) {
		$assembly['you_answer'] = implode(", ", $assembly['you_answer']);
	}

	$complete_assembly[] = $assembly;
	$final_score += $assembly['count_points'];

}