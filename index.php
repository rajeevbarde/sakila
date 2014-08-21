<?php
function MyAutoload($className){
include_once('DAL/'.$className . '.php');
}
spl_autoload_register('MyAutoload');

$test = new DBSelect('select * from actor');
$test1 = new DBSelect('select * from film');

echo "<pre>";
print_r($test->getRS());
echo "</pre>";

echo "<pre>";
print_r($test1->getRS());
echo "</pre>";
?>