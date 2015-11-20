<?php

	require 'sys/request.php';
	class Core{
		static function init(){
			echo $_SERVER['REQUEST_URI'];
			Request::retrieve();
			$controller=Request::getCont();
			Coder::code($controller);
			//echo $controller."<br>";
			$action=Request::getAct();
			Coder::code($action);
			$params=Request::getparams();
			Coder::code($params);
		}
	}