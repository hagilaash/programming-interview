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

// 15. Delete an Array Element by Index

$numbers = [10, 20, 30, 40];

$indexToDelete = 2;

unset($numbers[$indexToDelete]);

echo "Array after deleting an element by index: \n";

print_r($numbers);


// 16. Delete an Array Element by Value

$numbers = [10, 20, 30, 40];

$valueToDelete = 30;

$key = array_search($valueToDelete, $numbers, true);

if ($key !== false) {
    unset($numbers[$key]);
}

echo "Array after deleting an element by value: \n";

print_r($numbers);


// 17. Remove an Array Element and Reindex the Array

$numbers = [10, 20, 30, 40];

unset($numbers[1]);

$numbers = array_values($numbers);

echo "Array after removing an element and reindexing: \n";

print_r($numbers);


// 18. Update an Array Element

$numbers = [10, 20, 30, 40];

$numbers[2] = 99;

echo "Array after updating an element: \n";

print_r($numbers);


// 19. Sort an Array in Ascending Order

$numbers = [40, 10, 30, 20];

sort($numbers);

echo "Array sorted in ascending order: \n";

print_r($numbers);


// 20. Sort an Array in Descending Order

$numbers = [40, 10, 30, 20];

rsort($numbers);

echo "Array sorted in descending order: \n";

print_r($numbers);


// 21. Reverse an Array

$numbers = [10, 20, 30, 40];

$reversed = array_reverse($numbers);

echo "Original array: \n";

print_r($numbers);

echo "Reversed array: \n";

print_r($reversed);


// 22. Search for an Array Element

$numbers = [10, 20, 30, 40];

$searchValue = 30;

$key = array_search($searchValue, $numbers, true);

if ($key !== false) {
    echo "Element $searchValue found at index $key.";
} else {
    echo "Element $searchValue not found.";
}


// 23. Check Whether an Element Exists in an Array

$fruits = ["Apple", "Banana", "Mango", "Orange"];

$searchFruit = "Mango";

if (in_array($searchFruit, $fruits, true)) {
    echo "$searchFruit exists in the array.";
} else {
    echo "$searchFruit does not exist in the array.";
}


?>