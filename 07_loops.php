<?php

// Loop with $counter
$counter = 0; // When counter is 10??
while ($counter < 10) {
    echo $counter . '<br>';
    // if ($counter > 5) break;
    $counter++;
}

// do - while
$counter = 0; // When counter is 10?
do {
    // Do some code right here
    $counter++;
} while ($counter < 10);

// for
for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

// foreach
$bikes = ["Stranger", "Cult", "Kink"];
foreach ($bikes as $i => $bike) {
    echo $i . ' ' . $bike . '<br>';
}

// Iterate Over associative array.
$person = [
    'name' => 'Christian',
    'surname' => 'Boyle',
    'age' => 38,
    'hobbies' => ['Programming', 'Music'],
];
foreach ($person as $key => $value) {
    if (is_array($value)) {
        echo $key . ' ' . implode(",", $value) . '<br>';
    } else {
        echo $key . ' ' . $value . '<br>';
    }
}
