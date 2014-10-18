  <?php
            spl_autoload_register(function($class){
						$class = str_replace('\\', DIRECTORY_SEPARATOR,$class);
						require_once($_SERVER['DOCUMENT_ROOT'].'/sakila/'.$class.'.php');
				});
	?>