<?php


	session_start();

	include("conexao.php");


	$id = $_GET['id'];
	$idtec = $_SESSION['id'];
	$privilegio = $_SESSION['privilegio'];   

	echo $id;

	$carregamento = mysqli_query($conexao, "UPDATE problema SET situacao = 'Iniciado' WHERE id = '$id';");


	if($carregamento == true){

		$sql = mysqli_query($conexao, "INSERT INTO servicos (data_abertura, id_problema, id_tecnico) VALUES (NOW(), '$id', '$idtec')");
		
		if ($sql==true){			
	        
	        ?>
                <script>
                alert('Serviço Iniciado');
                window.location.replace ("direciona.php");
                </script>

                <?php
	        
	    }
	    else{
	        ?>
                <script>
                alert('Houve Algum Erro');
                window.location.replace ("direciona.php");
                </script>

                <?php
	    }
	}

?>