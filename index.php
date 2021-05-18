<?php

use App\Dancer;
use App\SquareDance;
require_once "vendor/autoload.php";


$square = new SquareDance();
$test = new Dancer("Hai", 'Male');
$test1 = new Dancer("Hai Khung", 'Male');
$test2 = new Dancer("Hai Dong", 'Female');
$test3 = new Dancer("Hai Bac si", 'Male');
$test4 = new Dancer("Hai Bede", 'Female');
$test5 = new Dancer("Hai Do", 'Male');
$test6 = new Dancer("Hai Can", 'Male');
$test7 = new Dancer("Hai Dog", 'Male');
$test8 = new Dancer("Hai Dong", 'Male');
$test9 = new Dancer("Hai Ngo", 'Female');
$test10 = new Dancer("Hai mat day", 'Male');
$test11 = new Dancer("Hai o", 'Female');
$test12 = new Dancer("Hai to", 'Male');
$test13 = new Dancer("Hai be", 'Male');
$square->addDancer($test);
$square->addDancer($test1);
$square->addDancer($test2);
$square->addDancer($test3);
$square->addDancer($test4);
$square->addDancer($test5);
$square->addDancer($test6);
$square->addDancer($test7);
$square->addDancer($test8);
$square->addDancer($test9);
$square->addDancer($test10);
$square->addDancer($test11);
$square->addDancer($test12);
$square->addDancer($test13);

//echo $square->getDancer();
echo $square->getDancer();
echo $square->getDancer();
echo $square->getDancer();
echo $square->getDancer();
echo $square->getDancer();
echo $square->getDancer();
echo $square->getDancer();
echo $square->getDancer();
echo $square->getDancer();
echo $square->getDancer();
echo $square->getDancer();
echo $square->getDancer();

//echo $square->isMaleEmpty();
//echo "<pre>";
//var_dump();