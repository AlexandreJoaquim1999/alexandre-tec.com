<?php


	session_start();

	include("conexao.php");


	$id = $_GET['id'];

	$result_status = "SELECT status FROM tecnico WHERE id = '$id'";

	$resultado_status = mysqli_query($conexao, $result_status);

	$status = mysqli_fetch_assoc($resultado_status);

	echo $status['status'];

	if($status['status'] == 1){
		$sql = mysqli_query($conexao, "UPDATE tecnico SET status = '2' WHERE id = '$id';");
		if ($sql==1){
	        ?>
                <script>
                alert('Dados Alterados com Sucesso!!');
                window.location.replace ("visualisar_tecnicos.php");
                </script>

                <?php
	    }
	    else{
	       ?>
                <script>
                alert('Dados Não Alterados!!');
                window.location.replace ("visualisar_tecnicos.php");
                </script>

                <?php
	    }
	}
	elseif($status['status'] == 2){
		?>
                <script>
                alert('Este Técnico ja é um Administrador!!');
                window.location.replace ("visualisar_tecnicos.php");
                </script>

                <?php
	}
	elseif($status['status'] == 0){
		?>
                <script>
                alert('Este Tecnico Ainda Não Foi Aceito!!');
                window.location.replace ("visualisar_tecnicos.php");
                </script>

                <?php
	}

?>