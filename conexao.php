<?php

	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'projeto';

	//mysqli_set_charset($conexao,"utf-8"); // aceita acentuação
	
	$conexao = mysqli_connect($host, $user, $password, $database)
	or die("falha na conexao");



?>