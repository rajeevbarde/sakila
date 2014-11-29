<?php
namespace admin;

class pageEntities
{
	
public static function getSideMenu()
{
	$includepath = \globalConfig::getAbsoluteServerPath();
	echo "<div class='pure-menu'>";
	echo "<a href='".$includepath."index.php'><b>Home</b></a>";
	echo "<a href='".$includepath."admin/movies.php'><b>Movies</b></a>";
	echo "<a href='".$includepath."admin/films.php'>Films</a>";
	echo "<a href='".$includepath."admin/actors.php'>Actors</a>";
	echo "<a href='".$includepath."admin/categories.php'>Categories</a>";
	echo "<a href='".$includepath."admin/language.php'>Language</a>";
	echo "<br>";
	
	echo "<a href='".$includepath."admin/users.php'><b>Users</b></a>";
	echo "<a href='".$includepath."admin/customers.php'>Customers</a>";
	echo "<br>";
	
	echo "<a href='".$includepath."admin/operations.php'><b>Operations</b></a>";
	echo "<a href='".$includepath."admin/inventory.php'>Inventory</a>";
	echo "<a href='".$includepath."admin/payment.php'>Payment</a>";
	echo "<a href='".$includepath."admin/rental.php'>Rental</a>";
	echo "<a href='".$includepath."admin/staff.php'>Staff</a>";
	echo "<a href='".$includepath."admin/store.php'>Store</a>";
	
	echo "</div>";
}

}

?>


