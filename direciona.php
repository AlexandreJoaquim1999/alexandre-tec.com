<?php


	session_start();

	include("conexao.php");




	$privilegio = $_SESSION['privilegio'];
	if($privilegio == 2)header("location:login_tecnico.php");
    elseif($privilegio == 3) header("location:admin.php");
    elseif($privilegio == 1) header("location:login_cliente.php");
    else header("location:index.php");
?>	        