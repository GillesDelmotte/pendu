<?php

if(!isset($_COOKIE['gameData'])){
	die('veuillez activer vos cookies !!!!!!');
}else{


	extract(decode($_COOKIE['gameData']));

	$word = getWord($words, $wordIndex);
	$wordLenth = strlen($word);
	$triedLetter = $_POST['triedLetter'];


	$wordFound = false;




	$triedLetters .= $triedLetter;
	$letters[$triedLetter] = false;
	$letterFound = false;
	for($i = 0;$i < $wordLenth; $i++){
		$l = substr($word, $i, 1);
		if($triedLetter === $l){
			$letterFound = true;
			$replacementString = substr_replace($replacementString, $l, $i, 1);
		}
	}

	if(!$letterFound){
		$trials++;
	} else {
		if($word === $replacementString){
		$wordFound = true;
		}
	}




	$remainingTrials = MAX_TRIALS - $trials;


	setcookie('gameData',encode(compact('wordIndex', 'triedLetters', 'trials', 'replacementString', 'letters')));

}
