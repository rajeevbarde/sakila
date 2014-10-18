<?php
namespace comman;

class pageEntities
{
	
public static function headerIncludes()
{
	$includepath = \globalConfig::getAbsoluteServerPath()."includes/";

echo "<link rel='stylesheet' href='".$includepath."pure-min.css'>";
echo "<script src='".$includepath."jquery.min.js'></script>";
echo "<script src='".$includepath."jquery.dataTables.min.js'></script>";
echo "<link rel='stylesheet' href='".$includepath."jquery.dataTables.css'>";
echo "<script src='".$includepath."jquery-ui.js'></script>";
echo "<link rel='stylesheet' href='".$includepath."tab-list-horizontal.css'>";
}

}

?>


