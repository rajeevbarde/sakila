<?php
require_once($_SERVER['DOCUMENT_ROOT']."sakila/comman/ClassAutoLoader.php");
$actors = new DAL\DBSelect('select * from actor order by first_name asc');
?>

<html>
<head>
<?= comman\pageEntities::headerIncludes() ?>
</head>

<body>
<div class="pure-g">
	<div class="pure-u-1-8">
	 <?= admin\pageEntities::getSideMenu() ?>
	</div>
	
	<div class="pure-u-7-8">
		<div id="actors-contentArea">
			<div id="actors-menu">
				menu empty
			</div>
			<div id="actors-details">
				<?php
					if($_SERVER["QUERY_STRING"] == null)
					{
						$temp = "";
						foreach($actors->getRS() as $actor)
						{
							$alpha = substr($actor["first_name"],0,1);
							if($alpha != $temp)
								echo "<b>".$alpha."</b><br><br>";
							$fname = $actor["first_name"];
							$lname = $actor["last_name"];
							echo '<a href=actors.php?bio='.$fname.'.'.$lname.'>'.$fname.' '.$lname.'</a><br>';
							$temp = $alpha;
						}
					}
				?>
				
				<?php
					if(isset($_GET["bio"]))
					{
						$actorName = explode(".",$_GET["bio"]);
						$query = sprintf('SELECT * FROM actor_info WHERE first_name = "'.$actorName[0].'" AND last_name = "'.$actorName[1].'"');
						$actors_info = new DAL\DBSelect($query);
						
						if($actors_info->getRS() == null)
							echo "not found";
						else
							foreach($actors_info->getRS() as $info)
							{
								echo $info['first_name']." ".$info['last_name']."<br>";
								
								$movieCat = explode(";",$info['film_info']);
								foreach($movieCat as $categories)
								{
									$category = explode(":",$categories);
									echo "<br><b>".$category[0]."</b><br>";
									
									$movies = explode(",",$category[1]);
									foreach($movies as $movie)
										echo $movie."<br>";
								}
							}
					}
				?>
				
			</div> <!-- actors-details -->
      </div><!-- actors-contentArea -->
	</div> <!-- pure 7-8 -->
</div><!-- pure-g -->
</body>
</html>