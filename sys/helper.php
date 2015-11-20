<?php

	spl_autoload_register(null,false); //vacia tablas de autoloads
	spl_autoload_register('Mautoload::SysLoader');

	class Mautoload{

		static function SysLoader($class){//torna la osició dintre delsfitxers

				$filename=strtolower($class).'.php';
				$file=ROOT.'sys'.DS.$filename;
				if(!file_exists($file)){ //si exite
					return false;
				}
				require $file;
		}

	}

	/**
	*coder
	*make var_dump easy
	*@author Elizabeth
	*
	*
	**/

	class Code{

		static function code($var){

			echo '<pre>'.$var.'</pre>';
		}

		static function codear($var){

			echo '<pre>'.var_dump($var).'</pre>';
		}

	}

}