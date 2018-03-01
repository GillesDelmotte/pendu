<?php


$wordIndex = getRandomIndex($words);
$triedLetters = '';
$trials = 0;
$letters = getLettersArray();
$word = getWord($words, $wordIndex);
$wordLenth = strlen($word);
$replacementString = getReplacementString($wordLenth);
$remainingTrials = MAX_TRIALS;

$wordFound = false;


setcookie('gameData',encode(compact('wordIndex', 'triedLetters', 'trials', 'replacementString', 'letters')));