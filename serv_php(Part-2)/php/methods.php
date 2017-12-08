<?php 
/*-------------------------------------------------------METHODS---------------------------------------------------------------*/
/*
*	function lowTrim() make words lower and Strip whitespace (or other characters) from the beginning and end of a string
*		receives as an argument - unsorder string
*		return - sorted string
*/
function lowTrim($unsorted){
	return trim(strtolower($unsorted));
}

/*
*
* method countPoints($user_answer, $data_table) return arr
*
*/

function countPoints($user_answer, $data_table){
	// make words lower and Strip whitespace (or other characters) from the beginning and end of a string
	$user_answer_LowTrim = lowTrim($user_answer);
	// $result = [];
	$result = [
		'question' => $data_table->question,
		'you_answer' => $user_answer,
		'count_points' => ''
	];
	// check answers fro muser on matches with correct answers
	foreach ($data_table->correct_answer as $key_cor_answ => $cor_answ) { /*first foreach*/
		$cor_answ = lowTrim($cor_answ);
		if ($user_answer_LowTrim === $cor_answ) {
			$result['count_points'] = $data_table->points_correct_answer;
			return $result;
		}

		// Nearly correct answer
		// if no answer matches the correct one check with nearly_correct_answer
		if ($key_cor_answ+1 === sizeof($data_table->correct_answer)) {
			foreach ($data_table->nearly_correct_answer as $key_nearly_cor_answ => $nearly_cor_answ) {
				$nearly_cor_answ = lowTrim($nearly_cor_answ);
				if ($user_answer_LowTrim === $nearly_cor_answ) {
					$result['count_points'] = $data_table->points_nearly_correct_answer;
					return $result;
				}

				if ($key_nearly_cor_answ+1 === sizeof($data_table->nearly_correct_answer)) {
					$result['count_points'] = 0;
					return $result;
				}
			}
		}
	}/*END first foreach*/
}


function each_match_count_points($user_answer_arr, $data_table){
	$result = [
		'question' => $data_table->question,
		'you_answer' => $user_answer_arr,
		'count_points' => 0
	];

	foreach ($user_answer_arr as $key => $user_answer_arr_value) {
		if(in_array($user_answer_arr_value, $data_table->correct_answer)){
			$result['count_points'] += $data_table->points_correct_answer;
		}else{
			$result['count_points'] += $data_table->points_nearly_correct_answer;
		}
	}

	return $result;
}

/*
* check if colour is coincide, if no, compares to how much difference
* 	return count of poits acummulate with this field
*		// abs() make all negative numbers positive
*
*/
function colorValidate($user_color, $data_table){

	$result = [
		'question' => $data_table->question,
		'you_answer' => $user_color,
		'count_points' => 0
	];

	$user_color_to_rgb = hex2rgb($user_color);
	/*find out how many percent difference between values*/
	// $rest arr with difirence between value
	$rest = [];
	$correc_answer = hex2rgb($data_table->correct_answer);

	foreach ($user_color_to_rgb as $key => $user_color_value) {
		$rest[] = abs($user_color_value - $correc_answer[$key]);
	}

	/*check user_color match with correct_answer*/
	// if the match assignmen variable $result['count_points'] = 10points
	$tenPoints = 0;
	$fourPoints = 0;
	$zeroPoints = 0;
	foreach ($rest as $key => $value) {
		//if at least one does not match then the quantity of points decrease 4point
		if ($value !== 0) {
			if ($value > 10) {
				// if difference is more what 10 % $result['count_points'] = 0;
				$result['count_points'] = 0;
				$zeroPoints++;
			}else {
				$fourPoints++;
			}
		}else{
			$tenPoints++;
		}
	}

	
	if ($tenPoints == 3) {
		$result['count_points'] = $data_table->points_correct_answer;
	}else if ($tenPoints !== 3 && !($zeroPoints > 0)){
		$result['count_points'] = $data_table->points_nearly_correct_answer;
	}

	return $result;
}

/*-------------------------------------------------------METHODS---------------------------------------------------------------*/
