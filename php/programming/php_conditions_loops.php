<?php

// 1. Print Numbers Using For Loop
for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
}


// 2. Print Numbers Using While Loop
$i = 1;

while ($i <= 10) {
    echo $i . "\n";
    $i++;
}


// 3. Print Numbers Using Do While Loop
$i = 1;

do {
    echo $i . "\n";
    $i++;
} while ($i <= 10);


// 4. Print Numbers Using Foreach Loop
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numbers as $number) {
    echo $number . "\n";
}


// 5. Calculate Sum of Numbers (1 to 10)
$sum = 0;

for ($i = 1; $i <= 10; $i++) {
    $sum += $i;
}

echo "Sum of numbers: " . $sum . "\n";


// 6. Calculate Sum of Even Numbers (1 to 20)
$sum = 0;

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        $sum += $i;
    }
}

echo "Sum of even numbers: " . $sum . "\n";


// 7. Calculate Sum of Odd Numbers (1 to 20)
$sum = 0;

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        $sum += $i;
    }
}

echo "Sum of odd numbers: " . $sum . "\n";


// 8. Count Numbers (1 to 20)
$count = 0;

for ($i = 1; $i <= 20; $i++) {
    $count++;
}

echo "Total count: " . $count . "\n";


// 9. Print Numbers Divisible by 5 (1 to 100)
for ($i = 1; $i <= 100; $i++) {
    if ($i % 5 == 0) {
        echo $i . "\n";
    }
}


// 10. Print Numbers Divisible by 3 and 5 (1 to 100)
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $i . "\n";
    }
}


// 11. Print Multiplication Table
$number = 5;

for ($i = 1; $i <= 10; $i++) {
    echo $number . " x " . $i . " = " . ($number * $i) . "\n";
}


// 12. Print Reverse Multiplication Table
$number = 5;

for ($i = 10; $i >= 1; $i--) {
    echo $number . " x " . $i . " = " . ($number * $i) . "\n";
}


// 13. Calculate Factorial
$number = 5;
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

echo "Factorial: " . $factorial . "\n";


// 14. Print Fibonacci Series (10 Terms)
$first = 0;
$second = 1;

for ($i = 1; $i <= 10; $i++) {
    echo $first . " ";

    $next = $first + $second;
    $first = $second;
    $second = $next;
}

echo "\n";


// 15. Check Prime Number
$number = 17;
$isPrime = true;

if ($number < 2) {
    $isPrime = false;
} else {
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo $number . " is a prime number\n";
} else {
    echo $number . " is not a prime number\n";
}


// 16. Print Prime Numbers (1 to 100)
for ($number = 2; $number <= 100; $number++) {
    $isPrime = true;

    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo $number . " ";
    }
}

echo "\n";


// 17. Count Digits in a Number
$number = 12345;
$temp = abs($number);
$count = 0;

if ($temp == 0) {
    $count = 1;
} else {
    while ($temp > 0) {
        $temp = intdiv($temp, 10);
        $count++;
    }
}

echo "Total digits: " . $count . "\n";


// 18. Reverse a Number
$number = 12345;
$temp = abs($number);
$reverse = 0;

while ($temp > 0) {
    $digit = $temp % 10;
    $reverse = ($reverse * 10) + $digit;
    $temp = intdiv($temp, 10);
}

if ($number < 0) {
    $reverse = -$reverse;
}

echo "Reverse number: " . $reverse . "\n";


// 19. Check Palindrome Number
$number = 121;
$temp = $number;
$reverse = 0;

if ($number < 0) {
    $isPalindrome = false;
} else {
    while ($temp > 0) {
        $digit = $temp % 10;
        $reverse = ($reverse * 10) + $digit;
        $temp = intdiv($temp, 10);
    }

    $isPalindrome = ($number == $reverse);
}

if ($isPalindrome) {
    echo $number . " is a palindrome number\n";
} else {
    echo $number . " is not a palindrome number\n";
}


// 20. Find Sum of Digits
$number = 12345;
$temp = abs($number);
$sum = 0;

while ($temp > 0) {
    $digit = $temp % 10;
    $sum += $digit;
    $temp = intdiv($temp, 10);
}

echo "Sum of digits: " . $sum . "\n";


// 21. Find Product of Digits
$number = 1234;
$temp = abs($number);
$product = 1;

if ($temp == 0) {
    $product = 0;
} else {
    while ($temp > 0) {
        $digit = $temp % 10;
        $product *= $digit;
        $temp = intdiv($temp, 10);
    }
}

echo "Product of digits: " . $product . "\n";

?>