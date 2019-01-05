<?php

//starting counters
$heads = 0;
$tails = 0;

//setting 2 random options to choose from for the game
for ($i = 1; $i <= 100; $i++){
    $number = rand(1, 2);
    if ($number == 1){
        echo "Heads, I win!<br>";
        $heads++;
    } else {
        echo "Tails, you win!<br>";
        $tails++;
    }
}