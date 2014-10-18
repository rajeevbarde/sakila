<?php
require_once($_SERVER['DOCUMENT_ROOT']."sakila/comman/ClassAutoLoader.php");

$categories = new DAL\DBSelect('select * from category');
?>
<html>
<head>
<?= comman\pageEntities::headerIncludes() ?>
<script>
$(document).ready(function() {
    $('#categoryTable').dataTable();
} );
</script>
</head>

<body>
<div class="pure-g">
	<div class="pure-u-1-8">
	 <?= admin\pageEntities::getSideMenu() ?>
	</div>
	
	<div class="pure-u-7-8">
	
	<table id="categoryTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
			 <tbody>
	<?
		foreach($categories->getRS() as $category)
		{
			echo '<tr>';
			echo '<td>'.$category["name"].'</td>';
			echo '</tr>';
		}
		
	?>
			</tbody>
    </table>
		
	</div>
</div>
</body>
</html>