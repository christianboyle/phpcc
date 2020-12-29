<?php

require_once './Person.php';
require_once './Student.php';

$p = new Person('Christian', 38, null);
echo $p->name . '<br>';
echo $p->age . '<br>';
echo $p->getSalary() . '<br>';
$p->setSalary(100);
echo $p->getSalary() . '<br>';

$s = new Student('Christian', '38', 1234);
echo $s->name . '<br>';
