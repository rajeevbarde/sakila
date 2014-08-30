<?php
require_once("comman/ClassAutoLoader.php");

$test = new DAL\DBSelect('select * from actor');
$test1 = new DAL\DBSelect('select * from film');

echo "<pre>";
print_r($test->getRS());
echo "</pre>";

echo "<pre>";
print_r($test1->getRS());
echo "</pre>";
?>