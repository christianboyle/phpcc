<?php

// Create array
$bikes = ["Stranger", "Cult", "Kink"];

// Print the whole array
echo '<pre>';
var_dump($bikes); // print_r
echo '</pre>';

// Get element by index
echo $bikes[1] . '<br>';

// Set element by index
$fruits[0] = "Fiend";

// Check if array has element at index 2
echo '<pre>';
var_dump(isset($bikes[2]));
echo '</pre>';

// Print the length of the array
echo count($bikes) . '<br>';

// Add element at the end of the array
$bikes[] = 'Fiend';
echo $bikes[3] . '<br>';
array_push($bikes, 'Hoffman');
// Remove element from the end of the array
array_pop($bikes);

echo '<pre>';
var_dump($bikes);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($bikes, 'Shadow');
// Remove element from the beginning of the array
array_shift($bikes);

// Split the string into an array
$string = "Stranger,Cult,Kink";
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';

print_r($bikes);

// Combine array elements into string
echo implode(",", $bikes) . '<br>';

// Check if element exist in the array
echo '<pre>';
var_dump(in_array('Shadow', $bikes));
echo '</pre>';

// Search element index in the array
echo '<pre>';
var_dump(array_search("Cult", $bikes));
echo '</pre>';

// Merge two arrays
$riders = ['Stevie', 'Brandon'];
echo '<pre>';
var_dump(array_merge($bikes, $riders));
var_dump([...$bikes, ...$riders]); // Since PHP 7.4
echo '</pre>';

// Sorting of array (Reverse order also)
sort($bikes); //sort, rsort
echo '<pre>';
var_dump($bikes);
echo '</pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Christian',
    'surname' => 'Boyle',
    'age' => 38,
    'hobbies' => ['Programming', 'Music'],
];
// Get element by key
echo $person['name'] . '<br>';

// Set element by key
$person['channel'] = 'None';

//Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['address'])) {
    $person['address'] = 'Unknown';
}
$person['address']??='Unknown';
echo $person['address'] . '<br>';

// Check if array has specific key
echo '<pre>';
var_dump(isset($person['age'])); // Change age into "location"
echo '</pre>';

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort($person); // ksort, krsort, asort, arsort
echo '<pre>';
var_dump($person);
echo '</pre>';
