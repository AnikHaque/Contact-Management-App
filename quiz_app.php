<?php

$score = 0;
$question = 1;

while (true) {
    if ($question === 1) {
        echo "\nQuestion 1: What is the capital of France?\n";
        echo "a) London\n";
        echo "b) Berlin\n";
        echo "c) Paris\n";
        echo "Your answer: ";
        $answer = trim(fgets(STDIN));
        if ($answer === "c") {
            echo "Correct!\n";
            $score = $score + 1;
        } else {
            echo "Incorrect. The correct answer is c) Paris.\n";
        }
        $question = $question + 1;
    }
}