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
    elseif ($question === 2) {
        echo "\nQuestion 2: What is 2 + 2?\n";
        echo "a) 3\n";
        echo "b) 4\n";
        echo "c) 5\n";
        echo "Your answer: ";
        $answer = trim(fgets(STDIN));
        if ($answer === "b") {
            echo "Correct!\n";
            $score = $score + 1;
        } else {
            echo " Incorrect. The correct answer is b) 4.\n";
        }
        $question = $question + 1;
    }
    elseif ($question === 3) {
        echo "\nQuestion 3: Which language is used for web development?\n";
        echo "a) PHP\n";
        echo "b) C\n";
        echo "c) Java\n";
        echo "Your answer: ";
        $answer = trim(fgets(STDIN));
        if ($answer === "a") {
            echo "Correct!\n";
            $score = $score + 1;
        } else {
            echo "Incorrect. The correct answer is a) PHP.\n";
        }
        $question = $question + 1;
    } 

}