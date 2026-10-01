<?php

$numbers = [10, 20, 30, 40];
$fruits = ["Apple", "Banana", "Mango", "Orange"];

// 1. Create Array
print_r($fruits);

// 2. Print Array
foreach ($fruits as $value) {
    echo $value . "\n";
}

// 3. Count Array Elements
$count = count($numbers);
echo "Number of elements: $count\n";

// 4. Sum Array Elements
$sum = array_sum($numbers);
echo "Sum: $sum\n";

// 5. Print Array Element by Position
echo "Element at position 1: ";
print_r($fruits[1]);
echo "\n";

// 6. Print Array Elements using foreach
foreach ($fruits as $value) {
    echo $value . "\n";
}

// 7. Find Array Average
$average = $sum / $count;
echo "Average: $average\n";

// 8. Find Largest Array Number max
$largest = $numbers[0];

foreach ($numbers as $value) {
    if ($value > $largest) {
        $largest = $value;
    }
}

echo "Largest number: $largest\n";

// 9. Find Smallest Array Number min
$smallest = $numbers[0];

foreach ($numbers as $value) {
    if ($value < $smallest) {
        $smallest = $value;
    }
}

echo "Smallest number: $smallest\n";

?>