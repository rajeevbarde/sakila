<?php
require_once($_SERVER['DOCUMENT_ROOT']."sakila/comman/ClassAutoLoader.php");
$films = new DAL\DBSelect('select * from film order by title asc');
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
				foreach($films->getRS() as $film)
				{
					$alpha = substr($film["title"],0,1);
					if($alpha != $temp)
						echo "<b>".$alpha."</b><br><br>";
					$title = $film["title"];
					echo '<a href=films.php?title='.urlencode($title).'>'.$title.'</a><br>';
					$temp = $alpha;
				}
			}
			
				if(isset($_GET["title"]))
			{
				$temp = "";
				$title = $_GET["title"];
				$query = sprintf('SELECT * FROM film WHERE title = "'.urldecode($title).'"');
				$films->executeQuery($query);
				$details = $films->getRS();
								
				echo "<b>".$details[0]['title']."</b><br>";
				echo "Description - ".$details[0]['description']."<br>";
				echo "Released - ".$details[0]['release_year']."<br>";
				echo "Language - ".$films->getLanguage($details[0]['language_id'])."<br>";
				echo "length - ".$details[0]['length']."min<br>";
				echo "Rating - ".$details[0]['rating']."<br>";
				echo "Special Features - ".$details[0]['special_features']."<br>";
				$actors = $films->getActorsByFilm($details[0]['film_id']);
				foreach($actors as $actor)
				{
					echo $actor['first_name']." ".$actor['last_name']."<br>";
				}
				
				
			}
	?>
			</div> <!-- actors-details -->
      </div><!-- actors-contentArea -->
	</div> <!-- pure 7-8 -->
</div><!-- pure-g -->
</body>
</html>
