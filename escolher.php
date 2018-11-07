<?php  
	session_start();

	include("conexao.php");

	$id_problema = $_SESSION['id_prob'];
	$id_tecnico = $_GET['id'];

	$carregamento = mysqli_query($conexao, "UPDATE problema SET situacao = 'Iniciado' WHERE id = '$id_problema';");

	if($carregamento == true){
		$sql = mysqli_query($conexao, "INSERT INTO servicos (data_abertura, id_problema, id_tecnico) VALUES (NOW(), '$id_problema', '$id_tecnico')");
		
		if ($sql==true){			
	        ?>
                <script>
                alert('Dados Alterados com Sucesso!!');
                window.location.replace ("visualisar_servicos_cli.php");
                </script>

                <?php
	    }
	    else{
	        ?>
                <script>
                alert('Dados não Alterados!!');
                window.location.replace ("visualisar_servicos_cli.php");
                </script>

                <?php
	    }

	}


?>