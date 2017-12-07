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

/*
* file have function hex2rgb() which receive as a parameter color Hex and return arr[] with rgb color
*/
require 'hex2rgb.php';


/*
*
* The whole evaluation logic will be built in three stages
*
*/



/* answers of questions*/
// (text) $first
$first = $_POST['first'];
// (text) $second get Hex color 
$second = $_POST['second'];
// (text) $third get
$third = $_POST['third'];


// fourth
$fourth = [];
$fourthAnswersCount = sizeof($quetions[3]->variants_of_answers);

for($i = 1; $i < $fourthAnswersCount+1; $i++){
	$one_of_answers = $_POST['fourth-'. $i];
	$fourth[] = $one_of_answers;
}

print_r($fourth);
// END fourth

