<?php

	ini_set('display_errors','on');

	//informe d'errores
	error_reporting(E_ALL);

	include 'config.php';
	require 'sys/helper.php'

	require 'sys/core.php';
	Core::init();