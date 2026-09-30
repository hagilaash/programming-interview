```php
<?php

// PHP BASICS

// 1.Print Hello World

echo "Hello World";

?>

<?php

// 2. Print Numbers From 1 to 20

for ($i = 1; $i <= 20; $i++) {
    echo $i . "\n";
}

?>

<?php

// 3. Print Numbers From 20 to 1

for ($i = 20; $i >= 1; $i--) {
    echo $i . "\n";
}

?>

<?php

// 4. Print Even Numbers

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
}

?>

<?php

// 5. Print Odd Numbers

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 1) {
        echo $i . "\n";
    }
}

?>

<?php

// 6. Perform Arithmetic Operations

$a = 6;
$b = 25;

$addition = $a + $b;
$subtraction = $a - $b;
$multiplication = $a * $b;
$remainder = $a % $b;
$division = $a / $b;

echo "Addition: $addition\n";
echo "Subtraction: $subtraction\n";
echo "Multiplication: $multiplication\n";
echo "Remainder: $remainder\n";
echo "Division: $division\n";

?>

<?php

// 7. Swap Two Numbers

$a = 10;
$b = 20;

$temp = $a;
$a = $b;
$b = $temp;

echo "$a\n";
echo "$b\n";

?>

<?php

// 8. Swap Two Numbers Without Third Variable

// Method 1: Using Addition and Subtraction

$a = 10;
$b = 20;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "$a\n";
echo "$b\n";


// Method 2: Using Multiple Assignment

$a = 10;
$b = 20;

[$a, $b] = [$b, $a];

echo "$a\n";
echo "$b\n";

?>

<?php

// 9. Check Positive, Negative or Zero

$a = -20;

if ($a > 0) {
    echo "The given number is positive\n";
} elseif ($a < 0) {
    echo "The given number is negative\n";
} else {
    echo "The given number is zero\n";
}

?>

<?php

// 10. Check Even or Odd

$a = 23;

if ($a % 2 == 0) {
    echo "The given number is even: $a\n";
} else {
    echo "The given number is odd: $a\n";
}

?>

<?php

// 11. Find Largest of Two Numbers

$a = 222;
$b = 20;

if ($a > $b) {
    echo "$a is larger\n";
} else {
    echo "$b is larger\n";
}

?>

<?php

// 12. Find Largest of Three Numbers

$a = 222;
$b = 299;
$c = 298;

if ($a > $b && $a > $c) {
    echo "$a is largest\n";
} elseif ($b > $a && $b > $c) {
    echo "$b is largest\n";
} else {
    echo "$c is largest\n";
}

?>

<?php

// 13. Find Smallest of Three Numbers

$a = 222;
$b = 2;
$c = 1;

if ($a < $b && $a < $c) {
    echo "$a is smallest\n";
} elseif ($b < $a && $b < $c) {
    echo "$b is smallest\n";
} else {
    echo "$c is smallest\n";
}

?>

<?php

// 14. Check Leap Year

// Rule 1: Divisible by 400
// OR
// Rule 2: Divisible by 4 but not divisible by 100

$year = 2000;

if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo "$year is a leap year\n";
} else {
    echo "$year is not a leap year\n";
}

?>

<?php

// 15. Check Vowel or Consonant

$char = "a";

if (
    $char == "a" ||
    $char == "e" ||
    $char == "i" ||
    $char == "o" ||
    $char == "u"
) {
    echo "It is a vowel\n";
} else {
    echo "It is a consonant\n";
}

?>

<?php

// 16. Check Alphabet or Number
// ctype_alpha (inbuilt function)
// ctype_digit (inbuilt function)
$char = "@";

if (ctype_alpha($char)) {
    echo "It is an alphabet\n";
} elseif (ctype_digit($char)) {
    echo "It is a number\n";
} else {
    echo "It is neither an alphabet nor a number\n";
}

?>

<?php

// 17. Calculate Factorial

$n = 5;
$result = 1;

for ($i = 1; $i <= $n; $i++) {
    $result = $result * $i;
}

echo "Factorial of $n is $result\n";

?>

<?php

// 18. Print Fibonacci Series

$n = 15;
$a = 0;
$b = 1;

for ($i = 1; $i <= $n; $i++) {
    echo $a . " ";

    $next = $a + $b;
    $a = $b;
    $b = $next;
}

?>
```
