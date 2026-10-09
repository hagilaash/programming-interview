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

//Largest → if ($value > $largest)
//Smallest → if ($value < $smallest)

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


// 10. Find Second Largest Array Number

$largest = $numbers[0];
$secondLargest = null;

foreach ($numbers as $value) {
    if ($value > $largest) {
        $secondLargest = $largest;
        $largest = $value;
    } elseif ($value < $largest && ($secondLargest === null || $value > $secondLargest)) {
        $secondLargest = $value;
    }
}

echo "Second largest number: $secondLargest\n";


// 11. Find Second Smallest Array Number

$smallest = $numbers[0];
$secondSmallest = null;

foreach ($numbers as $value) {
    if ($value < $smallest) {
        $secondSmallest = $smallest;
        $smallest = $value;
    } elseif ($value > $smallest && ($secondSmallest === null || $value < $secondSmallest)) {
        $secondSmallest = $value;
    }
}

echo "Second smallest number: $secondSmallest\n";

// 12. Insert an Element into an Array

$numbers = [10, 20, 30, 40];

$newElement = 50;

$numbers[] = $newElement;

echo "Array after inserting element: \n";

print_r($numbers);


// 13. Insert an Element at a Specific Position

$numbers = [10, 20, 30, 40];

$newElement = 25;
$position = 2;

array_splice($numbers, $position, 0, $newElement);

echo "Array after inserting element at position $position: \n";

print_r($numbers);


// 14. Insert an Element at the Beginning of an Array

$numbers = [10, 20, 30, 40];

$newElement = 5;

array_unshift($numbers, $newElement);

echo "Array after inserting element at the beginning: \n";

print_r($numbers);

?>