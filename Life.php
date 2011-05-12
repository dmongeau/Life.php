<?php

set_time_limit(0);

/*
 * Okay, the project is LIFE.php so we want to skip all the boring pre-life part.
 * Thanks to php, we can just do a 5 billion years sleep.
 *
 */
define('YEAR',3600*24*365);
sleep(5000000000*YEAR);


/*
 *
 * Life Class
 *
 *
 */
class Life {

	protected $theAnswer = 42;
	
	public function __construct() {
		
	}

	public function getTheAnswerToTheUltimateQuestionOfLifeTheUniverseAndEverything() {
		return $this->theAnswer;
	}
}


/*
 *
 * Atom Class
 *
 *
 */
class Atom {

	public function __construct() {
		
	}

}
