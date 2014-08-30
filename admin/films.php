<?php
require_once("../comman/ClassAutoLoader.php");

$films = new DAL\DBSelect('select * from film');
?>
<html>
<head>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.2/css/jquery.dataTables.css">
<script>
$(document).ready(function() {
    $('#filmsTable').dataTable();
} );
</script>
</head>

<body>
<div class="pure-g">
	<div class="pure-u-1-8">
	 <?= admin\pageEntities::getSideMenu() ?>
	</div>
	
	<div class="pure-u-7-8">
	
	<table id="filmsTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>Decription</th>
                <th>Year</th>
                <th>Length</th>
                <th>Rating</th>
                <th>Specials</th>
            </tr>
        </thead>
			 <tbody>
	<?
		foreach($films->getRS() as $film)
		{
			echo '<tr>';
			echo '<td>'.$film["title"].'</td>';
			echo '<td>'.$film["description"].'</td>';
			echo '<td>'.$film["release_year"].'</td>';
			echo '<td>'.$film["length"].'</td>';
			echo '<td>'.$film["rating"].'</td>';
			echo '<td>'.$film["special_features"].'</td>';
			echo '</tr>';
		}
		
	?>
			</tbody>
    </table>
		
	</div>
</div>
</body>
</html>