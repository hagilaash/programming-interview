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

$a = $a + $b;  //10+20=30
$b = $a - $b;  //30-20=10
$a = $a - $b;  //30-10=20

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
19.CheckPrimeNumber.php

<?php

$n = 7;
$isPrime = true;

if ($n <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "$n is a prime number";
} else {
    echo "$n is not a prime number";
}

?>


20.PrintPrimeNumbers.php

<?php

$count = 0;
$n = 2;

while ($count < 10) {

    $isPrime = true;

    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo $n . " ";
        $count++;
    }

    $n++;
}

?>


21.CountDigits.php

<?php

$n = 12345;
$count = 0;

while ($n > 0) {
    $n = intdiv($n, 10);
    $count++;
}

echo "Number of digits: $count";

?>

22.ReverseNumber.php

<?php

$n = 12345;
$reverse = 0;

while ($n > 0) {

    $digit = $n % 10;

    $reverse = ($reverse * 10) + $digit;

    $n = intdiv($n, 10);
}

echo "Reverse number: $reverse";

?>


23.FindSumOfDigits.php

<?php

$n = 12345;
$sum = 0;

while ($n > 0) {

    $digit = $n % 10;

    $sum = $sum + $digit;

    $n = intdiv($n, 10);
}

echo "Sum of digits: $sum";

?>


24.FindProductOfDigits.php

<?php

$n = 12345;
$product = 1;

while ($n > 0) {

    $digit = $n % 10;

    $product = $product * $digit;

    $n = intdiv($n, 10);
}

echo "Product of digits: $product";

?>

25.CheckArmstrongNumber.php

<?php

$n = 153;
$original = $n;
$digits = 0;
$sum = 0;

// Count number of digits
$temp = $n;

while ($temp > 0) {
    $temp = intdiv($temp, 10);
    $digits++;
}

// Calculate Armstrong sum
$temp = $n;

while ($temp > 0) {

    $digit = $temp % 10;

    $sum = $sum + ($digit ** $digits);

    $temp = intdiv($temp, 10);
}

if ($sum == $original) {
    echo "$original is an Armstrong number";
} else {
    echo "$original is not an Armstrong number";
}

?>

26.CheckPalindromeNumber.php

<?php

$n = 121;
$original = $n;
$reverse = 0;

while ($n > 0) {

    $digit = $n % 10;

    $reverse = ($reverse * 10) + $digit;

    $n = intdiv($n, 10);
}

if ($original == $reverse) {
    echo "$original is a palindrome number";
} else {
    echo "$original is not a palindrome number";
}

?>

27.CheckPerfectNumber.php

<?php

$n = 6;
$sum = 0;

for ($i = 1; $i < $n; $i++) {

    if ($n % $i == 0) {
        $sum = $sum + $i;
    }
}

if ($sum == $n) {
    echo "$n is a perfect number";
} else {
    echo "$n is not a perfect number";
}

?>

28.CheckStrongNumber.php

<?php

$n = 145;
$original = $n;
$sum = 0;

while ($n > 0) {

    $digit = $n % 10;

    $factorial = 1;

    for ($i = 1; $i <= $digit; $i++) {
        $factorial = $factorial * $i;
    }

    $sum = $sum + $factorial;

    $n = intdiv($n, 10);
}

if ($sum == $original) {
    echo "$original is a strong number";
} else {
    echo "$original is not a strong number";
}

?>

29.FindGCD.php

<?php

$a = 12;
$b = 18;

$gcd = 1;

for ($i = 1; $i <= $a && $i <= $b; $i++) {

    if ($a % $i == 0 && $b % $i == 0) {
        $gcd = $i;
    }
}

echo "GCD = $gcd";

?>

30.FindLCM.php

<?php

$a = 12;
$b = 18;

$max = ($a > $b) ? $a : $b;

for ($lcm = $max; ; $lcm++) {

    if ($lcm % $a == 0 && $lcm % $b == 0) {
        break;
    }
}

echo "LCM = $lcm";

?>