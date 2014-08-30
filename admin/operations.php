<?php
require_once("../comman/ClassAutoLoader.php");
?>
<html>
<head>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
</head>

<body>
<div class="pure-g">
	<div class="pure-u-1-8">
		 <?= admin\pageEntities::getSideMenu() ?>
	</div>
	
	<div class="pure-u-7-8">
	operations
	</div>
</div>
</body>
</html>