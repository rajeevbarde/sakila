<?php
//intialize
$db = new PDO('mysql:host=localhost;dbname=sakila;charset=utf8','root','');
$stmt = $db->query('SELECT * FROM film');

$row_count = $stmt->rowCount();
echo $row_count.' rows selected';

//update
//$affected_rows = $db->exec("UPDATE table SET field='value'");

//prepare statement
/*$id = 'aaa';$name = 'sfsdf';
$stmt = $db->prepare("SELECT * FROM table WHERE id=:id AND name=:name");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
*/

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($results);
echo "</pre>";
?>