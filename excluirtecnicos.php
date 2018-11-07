<?php


	session_start();

	include("conexao.php");


	$id = $_GET['id'];



	$sql = mysqli_query($conexao, "DELETE FROM tecnico WHERE id = '$id';");
	if ($sql=1){
	    ?>
                <script>
                alert('Dados Excluidos com Sucesso!!');
                window.location.replace ("visualisar_tecnicos.php");
                </script>

                <?php
	}
	else{
	    ?>
                <script>
                alert('Dados não Excluidos!!');
                window.location.replace ("visualisar_tecnicos.php");
                </script>

                <?php
	}
?>