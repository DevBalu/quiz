<?php 

/*
*	Parametres : 
*	1 - question
*	2 - variants_of_answers
*	3 - correct_answer
*	4 - points_correct_answer
*	5 - nearly_correct_answer
*	6 - points_nearly_correct_answer
*/

class Question{
	public $question;
	public $variants_of_answers;
	public $correct_answer;
	public $points_correct_answer;
	public $nearly_correct_answer;
	public $points_nearly_correct_answer;

	public function __construct($question, $variants_of_answers, $correct_answer, $points_correct_answer, $nearly_correct_answer, $points_nearly_correct_answer) {
		$this->question = $question;
		$this->variants_of_answers = $variants_of_answers;
		$this->correct_answer = $correct_answer;
		$this->points_correct_answer = $points_correct_answer;
		$this->nearly_correct_answer = $nearly_correct_answer;
		$this->points_nearly_correct_answer = $points_nearly_correct_answer;
	}
}