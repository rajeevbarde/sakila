<?php
class globalConfig
{
	public static function getAbsoluteServerPath()
	{
		return 'http://'.$_SERVER['HTTP_HOST']."/sakila/";
	}

}

?>


