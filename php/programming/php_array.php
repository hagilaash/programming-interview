<?php

// PHP ARRAYS


// 1. Create Array

$arr = [10, 20, 30, 40];

$arra = array(10, 30, 70, 80);

print_r($arr);
print_r($arra);

?>


<?php

// 2. Print Array

$arr = [10, 20, 30, 40];

print_r($arr);

?>


<?php

// 3. Count Array Elements

$arr = [10, 20, 30, 40];

$count = count($arr);

echo "Total Array Elements: $count\n";

?>


<?php

// 4. Sum Array Elements

$arr = [10, 20, 30, 40];

$sum = 0;

// Method 1: Using Manual Logic

foreach ($arr as $values) {
    $sum = $sum + $values;
}

echo "Sum Using Manual Logic: $sum\n";


// Method 2: Using Built-in Function

echo "Sum Using array_sum(): " . array_sum($arr) . "\n";

?>


<?php

// 5. Find Array Average

$arr = [10, 20, 30, 40, 50];

$sum = array_sum($arr);
$count = count($arr);

$average = $sum / $count;

echo "Average: $average\n";

?>


<?php

// 6. Find Largest Array Number

$arr = [100, 20, 8, 40, 35, 60, 70];

$largest = $arr[0];

foreach ($arr as $values) {
    if ($values > $largest) {
        $largest = $values;
    }
}

echo "Largest Number: $largest\n";

?>


<?php

// 7. Find Smallest Array Number

$arr = [100, 20, 8, 40, 35, 60, 70];

$smallest = $arr[0];

foreach ($arr as $values) {
    if ($values < $smallest) {
        $smallest = $values;
    }
}

echo "Smallest Number: $smallest\n";

?>


<?php

// 8. Sort Array in Ascending Order

$arr = [100, 20, 8, 40, 35, 60, 70];

sort($arr);

print_r($arr);

?>


<?php

// 9. Sort Array in Descending Order

$arr = [100, 20, 8, 40, 35, 60, 70];

rsort($arr);

print_r($arr);

?>


<?php

// 10. Reverse Array

$arr = [100, 20, 8, 40, 35, 60, 70];


// Method 1: Using Built-in Function

$reverse = array_reverse($arr);

print_r($reverse);


// Method 2: Using Manual Logic

$reverse = [];

$length = count($arr);

for ($i = $length - 1; $i >= 0; $i--) {
    $reverse[] = $arr[$i];
}

print_r($reverse);

?>


<?php

// 11. Search Array Element / Check Element Exists

$arr = [100, 20, 8, 40, 35, 60, 70];

$element = in_array(40, $arr);

if ($element) {
    echo "Element Found\n";
} else {
    echo "Element Not Found\n";
}

?>


<?php

// 12. Add Element to Array

$arr = [100, 20, 8, 40, 35, 60, 70];


// Method 1: Using Array Append Syntax

$arr[] = 10;


// Method 2: Using Built-in Function

array_push($arr, 1, 2, 3);

print_r($arr);

?>


<?php

// 13. Remove Element from Array

$arr = [100, 20, 8, 40, 35, 60, 70];


// Method 1: Using unset()

unset($arr[2], $arr[3]);


// Method 2: Using array_splice()

// array_splice(array, offset, length, replacement);

// Remove 1 element starting from index 2

// array_splice($arr, 2, 1);

print_r($arr);

?>


<?php

// 14. Update Array Element

$arr = [100, 20, 8, 40, 35, 60, 70];


// Method 1: Update Using Array Index

$arr[2] = 1000;


// Method 2: Update Using array_splice()

// Replace 1 element at index 3 with 1000

// array_splice($arr, 3, 1, [1000]);

print_r($arr);

?>


<?php

// 15. Merge Arrays

$arr = [100, 20, 8, 40, 35, 60, 70];

$ar = [1, 2, 3, 4, 5];


// Method 1: Using Built-in Function

// $result = array_merge($arr, $ar);


// Method 2: Using Manual Logic

$result = [];

foreach ($arr as $value) {
    $result[] = $value;
}

foreach ($ar as $value) {
    $result[] = $value;
}

print_r($result);

?>


<?php

// 16. Find Array Unique Values / Remove Array Duplicates

$arr = [100, 20, 8, 40, 35, 60, 70, 20, 40];

$result = array_unique($arr);

print_r($result);

?>


<?php

// 17. Find Array Duplicates

$arr = [100, 20, 8, 40, 35, 60, 70, 20, 40];

$result = array_count_values($arr);

foreach ($result as $values => $count) {
    if ($count > 1) {
        echo $values . "\n";
    }
}

?>


<?php

// 18. Find Common Elements

$arr1 = [100, 20, 8, 40, 35, 60, 70, 20, 40];

$arr2 = [1, 2, 3, 4, 5, 33, 67, 8, 70];

$result = array_intersect($arr1, $arr2);

print_r($result);

?>


<?php

// 19. Find Difference Between Arrays

$arr1 = [100, 20, 8, 40, 35, 60, 70, 20, 40];

$arr2 = [1, 2, 3, 4, 5, 33, 67, 8, 70];


// Elements present in Array 1 but not in Array 2

$common1 = array_diff($arr1, $arr2);

print_r($common1);


// Elements present in Array 2 but not in Array 1

$common2 = array_diff($arr2, $arr1);

print_r($common2);

?>


<?php

// 20. Find Array Intersection

$arr1 = [100, 20, 8, 40, 35, 60, 70, 20, 40];

$arr2 = [1, 2, 3, 4, 5, 33, 67, 8, 70];

$result = array_intersect($arr1, $arr2);

print_r($result);

?>


<?php

// 21. Find Array Union

$arr1 = [100, 20, 8, 40, 35, 60, 70, 20, 40];

$arr2 = [1, 2, 3, 4, 5, 33, 67, 8, 70];

$result = array_unique(array_merge($arr1, $arr2));

$result = array_values($result);

print_r($result);

?>


<?php

// 22. Split Array

$arr = [100, 20, 8, 40, 35, 60, 70, 20, 40];

$result = array_chunk($arr, 3);

print_r($result);

?>


<?php

// 23. Convert Array to String

$arr = ["PHP", "Laravel", "Symfony", "PostgreSQL"];

$result = implode(", ", $arr);

echo $result . "\n";

?>


<?php

// 24. Convert String to Array

$str = "PHP,Laravel,Symfony,PostgreSQL";

$result = explode(",", $str);

print_r($result);

?>