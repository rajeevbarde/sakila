<?php
require_once("../comman/ClassAutoLoader.php");

$languages = new DAL\DBSelect('select * from language');
?>
<html>
<head>
<?= comman\pageEntities::headerIncludes() ?>
<script>
$(document).ready(function() {
    $('#languageTable').dataTable();
} );
</script>
</head>

<body>
<div class="pure-g">
	<div class="pure-u-1-8">
	 <?= admin\pageEntities::getSideMenu() ?>
	</div>
	
	<div class="pure-u-7-8">
	
	<table id="languageTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
			 <tbody>
	<?
		foreach($languages->getRS() as $language)
		{
			echo '<tr>';
			echo '<td>'.$language["name"].'</td>';
			echo '</tr>';
		}
		
	?>
			</tbody>
    </table>
		
	</div>
</div>
</body>
</html>