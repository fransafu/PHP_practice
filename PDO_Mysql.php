<?php

	/*
		First Script for connect db with mysql PDO
	*/

	// data
	$host = 'localhost';
	$dbname = 'test';
	$username = '';
	$password = '';
	$dns = "mysql:host=$host;dbname=$dbname";

	// object instance 
	$cdb = new PDO($dns, $username, $password);

	// Query and print 
	foreach($cdb->query('SELECT * FROM users') as $fila){
		print_r($fila);
	}

	$cdb = null;