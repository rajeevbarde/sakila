<?php
require_once($_SERVER['DOCUMENT_ROOT']."sakila/comman/ClassAutoLoader.php");

$customers = new DAL\DBSelect('select * from customer_list');
?>
<html>
<head>
<?= comman\pageEntities::headerIncludes() ?>
<script>
$(document).ready(function() {
    $('#customersTable').dataTable();
} );
</script>
</head>

<body>
<div class="pure-g">
	<div class="pure-u-1-8">
	 <?= admin\pageEntities::getSideMenu() ?>
	</div>
	
	<div class="pure-u-7-8">
	
	<table id="customersTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Zipcode</th>
				<th>phone</th>
				<th>city</th>
				<th>Countries</th>
            </tr>
        </thead>
			 <tbody>
	<?
		foreach($customers->getRS() as $customer)
		{
			echo '<tr>';
			echo '<td>'.$customer["name"].'</td>';
			echo '<td>'.$customer["address"].'</td>';
			echo '<td>'.$customer["zip code"].'</td>';
			echo '<td>'.$customer["phone"].'</td>';
			echo '<td>'.$customer["city"].'</td>';
			echo '<td>'.$customer["country"].'</td>';
			echo '</tr>';
		}
		
	?>
			</tbody>
    </table>
		
	</div>
</div>
</body>
</html>