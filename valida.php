<?php

	session_start();

	include("conexao.php");

	//login de clientes
	if(isset($_POST['salvar1'])){

		$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
		$senha = md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));

		$sql = "SELECT * FROM cliente WHERE cpf = '$cpf' && senha = '$senha' LIMIT 1";
		$result = mysqli_query($conexao, $sql);
		$resultado = mysqli_fetch_assoc($result);


		if(!empty($resultado)){					
			if($_SESSION['id']!=null)$_SESSION['id']=null;
			$_SESSION['id'] = $resultado['id'];		
			$_SESSION['nome'] = $resultado['nome'];
			$_SESSION['cpf'] = $resultado['cpf'];
			$_SESSION['telefone'] = $resultado['telefone'];
			$_SESSION['rua'] = $resultado['rua'];
			$_SESSION['num'] = $resultado['numero'];
			$_SESSION['complemento'] = $resultado['complemento'];
			$_SESSION['bairro'] = $resultado['bairro'];
			$_SESSION['cidade'] = $resultado['cidade'];
			$_SESSION['estado'] = $resultado['estado'];
			$_SESSION['email'] = $resultado['email'];
			$_SESSION['privilegio'] = 1;
			header('location:cliente.php');
		}
		else{
			unset($_SESSION['nome']);
			unset($_SESSION['senha']);
			header('location:login_cliente.php');
		}
	}

	//login de tecnicos
	if(isset($_POST['salvar2'])){

		$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
        $senha = md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));

		$sql = "SELECT * FROM tecnico WHERE login = '$login' && senha = '$senha' LIMIT 1";
		$result = mysqli_query($conexao, $sql);
		$resultado = mysqli_fetch_assoc($result);


		if(!empty($resultado)){
			if (($resultado['status'] == 1 )||($resultado['status'] == 2 )){
				$_SESSION['login'] = $login;
				$_SESSION['senha'] = $senha;
				if($_SESSION['id']!=null)$_SESSION['id']=null;
				$_SESSION['id'] = $resultado['id'];
				$_SESSION['nome'] = $resultado['nome'];
				$_SESSION['cpf'] = $resultado['cpf'];
				$_SESSION['telefone'] = $resultado['telefone'];
				$_SESSION['email'] = $resultado['email'];
				$_SESSION['data_nasc'] = $resultado['data_nasc'];
				$_SESSION['rua'] = $resultado['rua'];
				$_SESSION['num'] = $resultado['numero'];
				$_SESSION['complemento'] = $resultado['complemento'];
				$_SESSION['bairro'] = $resultado['bairro'];
				$_SESSION['cidade'] = $resultado['cidade'];
				$_SESSION['estado'] = $resultado['estado'];
				$_SESSION['formacao'] = $resultado['formacao'];
				$_SESSION['instituicao'] = $resultado['instituicao'];
				$_SESSION['avaliacao'] = $resultado['avaliacao'];
				if($resultado['status'] == 1){
					if($_SESSION['privilegio']!=null)$_SESSION['privilegio']=null;
					$_SESSION['privilegio'] = 2;
					header('location:tecnico.php');
				}
				elseif($resultado['status'] == 2){
					if($_SESSION['privilegio']!=null)$_SESSION['privilegio']=null;
					$_SESSION['privilegio'] = 3;
					header('location:admin.php');
				}
			}
			else{
				echo "voce não tem permissão para acessar esta pagina!!";
			}
		}
		else{
			unset($_SESSION['nome']);
			unset($_SESSION['senha']);
			header('location:login_tecnico.php');
		}
	}
	
?>