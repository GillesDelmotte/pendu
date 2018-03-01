<?php


$wordIndex = getRandomIndex($words);
$triedLetters = '';
$trials = 0;
$letters = getLettersArray();
$word = getWord($words, $wordIndex);
$wordLenth = strlen($word);
$replacementString = getReplacementString($wordLenth);
$serializedLetters = getSerializedLetters($letters);
$remainingTrials = MAX_TRIALS;

$wordFound = false;
