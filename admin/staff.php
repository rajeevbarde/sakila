<?php
require_once($_SERVER['DOCUMENT_ROOT']."sakila/comman/ClassAutoLoader.php");

$staffs = new DAL\DBSelect('select * from staff');
?>
<html>
<head>
<?= comman\pageEntities::headerIncludes() ?>
<script>
$(document).ready(function() {
    $('#staffsTable').dataTable();
} );
</script>
</head>

<body>
<div class="pure-g">
	<div class="pure-u-1-8">
	 <?= admin\pageEntities::getSideMenu() ?>
	</div>
	
	<div class="pure-u-7-8">
	
	<table id="staffsTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
			 <tbody>
	<?
		foreach($staffs->getRS() as $staff)
		{
			echo '<tr>';
			echo '<td>'.$staff["first_name"].'</td>';
			echo '<td>'.$staff["last_name"].'</td>';
			echo '<td>'.$staff["email"].'</td>';
			echo '</tr>';
		}
		
	?>
			</tbody>
    </table>
		
	</div>
</div>
</body>
</html>