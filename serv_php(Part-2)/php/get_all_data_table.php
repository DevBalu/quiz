<?php
/* entity of question */
require 'questionEntity.php';

// arr with all question
$allQuestions = [];

function getAllQuestions(){
	/*first question*/
	$firstQ = new Question(
		// question
		'Who wrote “The Martian Chronicles” ?',
		// variants_of_answers
		[],
		// correct_answer
		['Ray Bradbury', 'Any capitalization acceptable'],
		// points_correct_answer
		10,
		// nearly_correct_answer
		['Bradbury', 'Ron Bradbury', 'Any capitalization acceptable'],
		// points_nearly_correct_answer
		4
	);

	/*second question*/
	$secondQ = new Question(
		// question
		'What colour is the great spot on the surface of Jupiter ?',
		// variants_of_answers
		[],
		// correct_answer
		[255, 0, 0], //#ff0000 
		// points_correct_answer
		10,
		// nearly_correct_answer
		[],
		// points_nearly_correct_answer
		4 /*10% error on red, green and blue components.*/
	);

	/*third question*/
	$thirdQ = new Question(
		// question
		'Venus is most commonly known as the Roman goddess of what?',
		// variants_of_answers
		['Love', 'Beauty', 'War'],
		// correct_answer
		['Love'],
		// points_correct_answer
		10,
		// nearly_correct_answer
		['Beauty'],
		// points_nearly_correct_answer
		2
	);

	/*fourth question*/
	$fourthQ = new Question(
		// question
		'Which are the three innermost planets in the solar system?',
		// variants_of_answers
		['Jupiter', 'Neptune', 'Earth', 'Mars', 'Venus', 'Mercury'],
		// correct_answer
		['Mercury', 'Venus', 'Mars'],
		// points_correct_answer
		4, /*4 points for each correct answer, max points 12 points*/
		// nearly_correct_answer
		['Jupiter', 'Neptune', 'Earth'],
		// points_nearly_correct_answer
		-2 /*Deduct two points for each incorrect answer*/
	);

	/*Fifth question*/
	$fifthQ = new Question(
		// question
		'Which planet is named after the Ancient Roman king of the gods?',
		// variants_of_answers
		['Neptune', 'Jupiter', 'Mars', 'Mercury'],
		// correct_answer
		['Jupiter'],
		// points_correct_answer
		8,
		// nearly_correct_answer
		['Jupiter', 'Neptune', 'Earth'],
		// points_nearly_correct_answer
		0 /* Zero points for an incorrect answer */
	);

	/*six question*/
	$sixQ = new Question(
		// question
		'Which two of the following is NOT a planet ?',
		// variants_of_answers
		['Mars', 'Pluto', 'Titan', 'Mercury', 'Earth'],
		// correct_answer
		['Pluto', 'Titan'],
		// points_correct_answer
		5, /*5 points for each correct answer (max 10 points)*/
		// nearly_correct_answer
		['Mars', 'Mercury', 'Earth'],
		// points_nearly_correct_answer
		-2 /* Minus 2 points for each incorrect answer */
	);

	/*seven question*/
	$sevenQ = new Question(
		// question
		'What is the popular name of Pluto’s largest moon ?',
		// variants_of_answers
		['Charon', 'Sharon', 'Karen', 'Darren'],
		// correct_answer
		['Charon'],
		// points_correct_answer
		10,
		// nearly_correct_answer
		['Sharon'],
		// points_nearly_correct_answer
		4
	);

	/*$eight question*/
	$eightQ = new Question(
		// question
		'What colour is Titan ?',
		// variants_of_answers
		[],
		// correct_answer
		[255, 255, 0], //#ffff00
		// points_correct_answer
		10,
		// nearly_correct_answer
		[],
		// points_nearly_correct_answer
		2 /*10% error on red, green and blue components.*/
	);

	/* the ninth question */
	$ninthQ = new Question(
		// question
		'What is the highest measured wind speed on Neptune in MPH ?',
		// variants_of_answers
		[],
		// correct_answer
		[1500],
		// points_correct_answer
		10,
		// nearly_correct_answer
		[], /*Up to 20% error*/
		// points_nearly_correct_answer
		3
	);

	/* tenth question */
	$tenthQ = new Question(
		// question
		'What is the name of the Earth’s largest satellite ?',
		// variants_of_answers
		[],
		// correct_answer
		['Moon', 'Any capitalisation'],
		// points_correct_answer
		10,
		// nearly_correct_answer
		['The Moon', 'Any capitalisation'], /*Up to 20% error*/
		// points_nearly_correct_answer
		4
	);

	// we collect all data in one array
	$allQuestions = [$firstQ, $secondQ, $thirdQ, $fourthQ, $fifthQ, $sixQ, $sevenQ, $eightQ, $ninthQ, $tenthQ];

	return $allQuestions;
}