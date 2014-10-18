<?php
require_once($_SERVER['DOCUMENT_ROOT']."sakila/comman/ClassAutoLoader.php");
?>
<html>
<head>
<style>
.hidediv
{
	display:none;
}
</style>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<script>
function hideit(ds)
{
	ds.children[1].style.display = (ds.children[1].style.display == 'none')?'block':'none';
}
</script>
</head>

<body>
<div class="pure-g">
<div class="pure-u-1-8">
<div class="pure-menu">

 <?= admin\pageEntities::getSideMenu() ?>

</div>
</div>
<div class="pure-u-7-8">
<div onclick="hideit(this)"> <u>Films</u>
<div class= "hidediv">
<?
$films = new DAL\DBSelect('select * from film');
foreach($films->getRS() as $film)
{
	echo $film["title"]."<br>";
	echo $film["description"]."<br>";
	echo $film["release_year"]."<br>";
	echo $film["length"]."min<br>";
	echo $film["rating"]."<br>";
	echo $film["special_features"]."<br>";
	echo "<br>";
}
?>
</div>
</div>

<div onclick="hideit(this)"> <u>Actors</u>
<div class= "hidediv">
<?
$actors = new DAL\DBSelect('select * from actor');
foreach($actors->getRS() as $actor)
{
	echo $actor["first_name"]."<br>";
	echo $actor["last_name"]."<br>";
	echo "<br>";
}
?>
</div>
</div>





<p><b>Customer</b></p>

<p><b>Operations</b></p>

<?
echo "<pre>";
print_r($actors->getRS());
echo "</pre>";
?>
</div>
</div>
</body>
</html>