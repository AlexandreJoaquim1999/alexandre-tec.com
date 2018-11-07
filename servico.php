<?php
	session_start();

	include("conexao.php"); 
	if(isset($_POST['alterar'])){

		$idserv = $_SESSION['idservico'];
		$data_abertura =$_SESSION['data_abertura'];
		$tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
		$descricao_servico = filter_input(INPUT_POST, 'descricao_servico', FILTER_SANITIZE_STRING);
		$descricao_problema = filter_input(INPUT_POST, 'descricao_problema', FILTER_SANITIZE_STRING);

		$sql = mysqli_query($conexao, "UPDATE servicos SET tipo = '$tipo', descricao_servico = '$descricao_servico' WHERE id = '$idserv';");

		$catch_res_id_problema = mysqli_query($conexao, "SELECT id_problema FROM servicos WHERE id = '$idserv'");
		$res_id_problema = mysqli_fetch_assoc($catch_res_id_problema);
		$id_problema = $res_id_problema['id_problema'];
		echo $tipo;

		$sql2 = mysqli_query($conexao, "UPDATE problema SET descricao = '$descricao_problema' WHERE id = '$id_problema';");

		if((sql == true)&&(sql2 == true)){
			?>
                <script>
                alert('Dados Alterados com Sucesso!!');
                window.location.replace ("direciona.php");
                </script>

                <?php
		}
		else{
			?>
                <script>
                alert('Dados não Alterados!!');
                window.location.replace ("direciona.php");
                </script>

                <?php
		}
	}
	if(isset($_POST['finalizar'])){

		$idserv = $_SESSION['idservico'];
		

		$sql = mysqli_query($conexao, "UPDATE servicos SET data_termino = NOW() WHERE id = '$idserv';");

		

		if(sql == true){
			?>
                <script>
                alert('Serviço Finalizado com Sucesso!!');
                window.location.replace ("direciona.php");
                </script>

                <?php
		}
		else{
			?>
                <script>
                alert('Serviço não Finalizado!!');
                window.location.replace ("direciona.php");
                </script>

                <?php
		}
	}



?>