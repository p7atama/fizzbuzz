<?php

function fizzBuzz($n) {
    $result = [];

    for ($i = 1; $i <= $n; $i++) {
        $isDivisibleBy3 = $i % 3 === 0;
        $isDivisibleBy5 = $i % 5 === 0;

        if ($isDivisibleBy3 && $isDivisibleBy5) {
            $result[] = "FizzBuzz";
        } elseif ($isDivisibleBy3) {
            $result[] = "Fizz";
        } elseif ($isDivisibleBy5) {
            $result[] = "Buzz";
        } else {
            $result[] = (string) $i;
        }
    }

    return $result;
}
?>
