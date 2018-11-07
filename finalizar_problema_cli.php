<?php


	session_start();

	include("conexao.php");


	$id = $_GET['id'];
	$id_cliente = $_SESSION['id'];

	//echo $id;

	$carregamento = mysqli_query($conexao, "UPDATE problema SET situacao = 'Finalizado' WHERE id = '$id';");


	if($carregamento == true){

		$catch = mysqli_query($conexao, "SELECT servicos.id  FROM servicos INNER JOIN problema ON problema.id = servicos.id_problema WHERE id_cliente = '$id_cliente'");
		$catch_id = mysqli_fetch_assoc($catch);
		$id_servico = $catch_id['id'];
		//echo $id_servico;

		$sql = mysqli_query($conexao, "UPDATE servicos SET data_termino = NOW() WHERE id = '$id_servico';");
		
		if ($sql==true){			
	        ?>
                <script>
                alert('Serviço Finalizado com Sucesso!!');
                window.location.replace ("finalizar_problema_cli.php");
                </script>

                <?php
	    }
	    else{
	        ?>
                <script>
                alert('Dados não Alterados!!');
                window.location.replace ("finalizar_problema_cli.php");
                </script>

                <?php
	    }
	}
	

?>