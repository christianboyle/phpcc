<?php

$age = 38;
$salary = 300001;

// Sample if
if ($age == 38) {
    echo "1";
}

// Without circle braces
if ($age === 38)
    echo "1";

// Sample if-else
if ($age > 38) {
    echo "1";
} else {
    echo "2";
}

// Difference between == and ===
$age == 38; // true
$age == '38'; // true

$age === 38; // true
$age === '38'; // false

// if AND
if ($age > 38 && $salary === 300001) {

}
// if OR
if ($age > 38 OR $salary === 300001) {

}

// Ternary if
echo $age < 22 ? 'Young' : 'Old';
echo '<br>';

// Short ternary
$myAge = $age ?: 18; // Equivalent of "$age ? $age : 18"

// Null coalescing operator
$var = isset($name) ? $name : 'John';
$var = $name ?? 'John'; // Equivalent of above
echo $var.'<br>';

// switch
$userRole = 'admin'; // admin, editor, user

switch ($userRole) {
    case 'admin':
        echo 'You can do anything<br>';
        break;
    case 'editor';
        echo 'You can edit content<br>';
        break;
    case 'user':
        echo 'You can view posts and comment<br>';
        break;
    default:
        echo 'Unknown role<br>';
}
