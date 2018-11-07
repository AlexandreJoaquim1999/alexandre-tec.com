<?php

    session_start();
     include("conexao.php");

     if(($_SESSION['privilegio'] != 2)&&($_SESSION['privilegio'] != 3)){
        echo("<script>");
        echo("alert('Você não tem permissão para acessar esta pagina')");
        echo("</script>"); 
        header('location:login_tecnico.php');    
    
    }
    $id_tecnico = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Visualisar Serviços</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css?version= 1">
        <!-- colocando o icone na barra de endereço do navegador -->
        <link rel="shortcut icon" href="img/icone.png" type="image/x-png"/>
    </head>
    <body>
      <header id="headerlogin">
            <h2><b>Adm / Visualizar Serviços</b></h2>
      </header>
      <div class="container"> 
        <nav class="navbar navbar-expand-md navbar-light">  
          <a href="admin.php" class="voltaresc"><button type="submit" class="btn voltar"><font color="black"><b>voltar</b></font></button></a>
        </nav>
      </div>

        <div class="container" >
            <div class="table-responsive table-bordered table-hover">
            <table class="table">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Data de Abertura</th>
                  <th>Data de Termino</th>
                  <th>Codigo do Técnico</th>
                  <th>Tipo de Serviço</th>
                  <th>Descrição do Serviço</th>
                  <th>Descrição do Problema</th>
                  <th>Nome do Cliente</th>
                  <th>Telefone</th>
                  <th>Email</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <?php 
                $result_usuario = "SELECT servicos.id AS idserv, servicos.data_abertura, servicos.data_termino, servicos.tipo, servicos.id_tecnico, servicos.descricao_servico, problema.descricao, cliente.nome, cliente.telefone, cliente.email FROM (servicos INNER JOIN problema ON problema.id = servicos.id_problema) INNER JOIN cliente ON problema.id_cliente = cliente.id";

                $resultado_usuario = mysqli_query($conexao, $result_usuario);

                while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
               ?>
              <tbody>
                <tr>
                  <td><?php  echo $row_usuario['idserv'];?></td>
                  <td><?php  echo $row_usuario['data_abertura'];?></td>
                  <td><?php  echo $row_usuario['data_termino'];?></td>
                  <td><?php  echo $row_usuario['id_tecnico'];?></td>
                  <td><?php  echo $row_usuario['tipo'];?></td>
                  <td><?php  echo $row_usuario['descricao_servico'];?></td>
                  <td><?php  echo $row_usuario['descricao'];?></td>
                  <td><?php  echo $row_usuario['nome'];?></td>
                  <td><?php  echo $row_usuario['telefone'];?></td>
                  <td><?php  echo $row_usuario['email'];?></td>
                  <td> <a href="atualizar_servico_tec.php?id=<?php  echo $row_usuario['idserv']; ?>" class="btn btn-primary">Atualizar Serviço</a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table> 
          </div>
        </div>

        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
        <br><br>
        <footer id="footerlogin">
            <div class="container">
                <div class="footerindex">
                    <br><h6 id="facefooter"><b>Facebook:</b> <a id="face" href ="https://www.facebook.com/Teccom-621638164884532/" target="blank">facebook.com/tec.com</a></h6>
                    <h6 id="emailfooter"><b>Email:</b> tec.com.oficial@gmail.com</h6>
                    <h6 id="turmafooter"><b>CEP- Centro de Educação Profissional "Tancredo Neves"<a id="aadmin" href="admin.php">-</a> IM3A - Alexandre, César, Jeferson</b></h6><br/>
                </div>
            </div>
        </footer>
    </body>
</html>