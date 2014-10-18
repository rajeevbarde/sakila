<?php
require_once($_SERVER['DOCUMENT_ROOT']."sakila/comman/ClassAutoLoader.php");
$rootPath = globalConfig::getAbsoluteServerPath();
$actors = new DAL\DBSelect('select * from actor');
?>
<html>
<head>
<?= comman\pageEntities::headerIncludes() ?>
<script>
$(document).ready(function() {
    $('#actorsTable').dataTable();
} );

  $(function() {
	$( "#actors-tab" ).tabs();
});

</script>
</head>

<body>


<div class="pure-g">
	<div class="pure-u-1-8">
	 <?= admin\pageEntities::getSideMenu() ?>
	</div>
	
	<div class="pure-u-7-8">
	
	
	<div id="actors-tab">
         <ul id="tab-list">
            <li><a href="#tabs-overview">Overview</a></li>
			<li><a href="#tabs-alphabetical">By Alphabet</a></li>
            <li><a href="#tabs-actor-films">Actor's Biography</a></li>
            <li><a href="#tabs-4">Actors by Category</a></li>
			<li><a href="#tabs-4">Actors by Rating</a></li>
			<li><a href="#tabs-4">Actors by language</a></li>
         </ul>
         <div id="tabs-overview">
			<table id="actorsTable" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>First name</th>
						<th>Last name</th>
					</tr>
				</thead>
				<tbody>
			<?
				foreach($actors->getRS() as $actor)
				{
					echo '<tr>';
					echo '<td>'.$actor["first_name"].'</td>';
					echo '<td>'.$actor["last_name"].'</td>';
					echo '</tr>';
				}
				
			?>
				</tbody>
			</table>
		 </div>
         <div id="tabs-3">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. </p>
         </div>
         <div id="tabs-4">
            <p>ed ut perspiciatis unde omnis iste natus error sit 
            voluptatem accusantium doloremque laudantium, totam rem aperiam, 
            eaque ipsa quae ab illo inventore veritatis et quasi architecto 
            beatae vitae dicta sunt explicabo.  </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. </p>
         </div>
      </div>
	</div>
</div>
</body>
</html>