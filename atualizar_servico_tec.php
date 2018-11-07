<?php
    session_start();
    include("conexao.php");
    $idserv = $_GET['id'];
    $id_tecnico = $_SESSION['id'];
    $privilegio = $_SESSION['privilegio'];
   // echo $idserv;

    $result_usuario = "SELECT servicos.id AS idserv, servicos.data_abertura, servicos.data_termino, servicos.tipo, servicos.descricao_servico, problema.descricao, cliente.nome, cliente.telefone, cliente.email FROM (servicos INNER JOIN problema ON problema.id = servicos.id_problema) INNER JOIN cliente ON problema.id_cliente = cliente.id WHERE servicos.id = '$idserv'";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);
    $_SESSION['idservico'] = $row_usuario['idserv'];
    $_SESSION['data_abertura'] = $row_usuario['data_abertura'];

?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>Atualizar Serviço</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css?version=165">
        <!-- colocando o icone na barra de endereço do navegador -->
        <link rel="shortcut icon" href="img/icone.png" type="image/x-png"/>
    </head>
    <div class="container"> 
        <nav class="navbar navbar-expand-md navbar-light">  
            <a href="direciona.php" class="voltaresc"><button type="submit" class="btn voltar"><font color="black"><b>voltar</b></font></button></a>
        </nav>
    </div>
    <body>
        <div class="formulario">
            <div class="container">
                <form method="POST" name="Form" action="servico.php">
                    <div class="form-row">
                        <label for="nome">Codigo:</label>
                        <input type="text" class="form-control" name="idserv"  value="<?php echo  $row_usuario['idserv'];?>" disabled>
                    </div>
                    <div class="form-row">
                        <label for="data_abertura">Data de Abertura:</label>
                        <input type="text" class="form-control" name="data_abertura" id="data_abertura" value="<?php echo $row_usuario['data_abertura'];?>" disabled >
                    </div>
                    <div class="">
                        <p>
                            Tipo de Serviço<br/><br/>
                            <input type="radio" name="tipo" value="Visita Técnica"/>Visita Técnica
                            <input type="radio" name="tipo" value="Acesso Remoto"/>Acesso Remoto
                        </p>
                    </div>
                    <div class="form-row">
                        <label for="descricao_servico">Descrição do Serviço:</label>
                        <textarea name="descricao_servico" rows="5" cols="500" placeholder=""><?php echo $row_usuario['descricao_servico'];?></textarea> 
                    </div>
                    <div class="form-row">
                        <label for="descricao_problema">Descrição do Problema:</label>
                        <textarea name="descricao_problema" rows="5" cols="500" value=""><?php echo $row_usuario['descricao'];?></textarea> 
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="alterar">Alterar Informações</button> 
                    <button type="submit" class="btn btn-primary" name="finalizar">Finalizar Serviço</button>                   
                </form> 
            </div>
        </div>    
    </body>
</html> 
