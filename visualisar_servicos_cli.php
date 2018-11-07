<?php

  session_start();
  include("conexao.php");

  if(($_SESSION['privilegio'] != 1)&&($_SESSION['privilegio'] != 3)){
    echo("<script>");
    echo("alert('Você não tem permissão para acessar esta pagina')");
    echo("</script>"); 
    header('location:login_cliente.php');    
    
  }
  $id_cliente = $_SESSION['id'];
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
            <h2><b>Cliente / Serviços</b></h2>
      </header>
      <div class="container"> 
        <nav class="navbar navbar-expand-md navbar-light">  
         <a href="cliente.php" class="voltaresc"><button type="submit" class="btn voltar"><font color="black"><b>voltar</b></font></button></a>
        </nav>
      </div><br>
      <div class="formulario">
            <div class="container bloco">
                <form method="POST" name="Form2" action="cliente.php">
                    <div class="bloco1"> 
                        <input type="submit" class="btn btn-primary" name="informar" value="Informar Problema">
                    </div>
                </form> 
                <form method="POST" name="Form2" action="visualisar_problemas_cli.php">
                    <div class="bloco2"> 
                        <input type="submit" class="btn btn-primary " name="visualizar" value="Visualizar problemas">
                    </div>  
                </form> 
            </div>
            <br>
        </div>

        <div class="container" >
            <div class="table-responsive table-bordered table-hover">
            <table class="table">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Data de Abertura</th>
                  <th>Data de Termino</th>
                  <th>Descrição do Serviço</th>
                  <th>Tipo de Problema</th>
                  <th>Descrição do Problema</th>
                  <th>Nome do Tecnico</th>
                  <th>Telefone</th>
                  <th>Email</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <?php 
                $result_usuario = "SELECT servicos.id AS idserv, servicos.data_abertura, servicos.data_termino, servicos.tipo, servicos.descricao_servico, problema.descricao, tecnico.nome, tecnico.telefone, tecnico.email FROM (servicos INNER JOIN problema ON problema.id = servicos.id_problema) INNER JOIN tecnico ON servicos.id_tecnico = tecnico.id WHERE id_cliente = $id_cliente";
                

                $resultado_usuario = mysqli_query($conexao, $result_usuario);

                while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
               ?>
              <tbody>
                <tr>
                  <td><?php  echo $row_usuario['idserv'];?></td>
                  <td><?php  echo $row_usuario['data_abertura'];?></td>
                  <td><?php  echo $row_usuario['data_termino'];?></td>
                  <td><?php  echo $row_usuario['tipo'];?></td>
                  <td><?php  echo $row_usuario['descricao_servico'];?></td>
                  <td><?php  echo $row_usuario['descricao'];?></td>
                  <td><?php  echo $row_usuario['nome'];?></td>
                  <td><?php  echo $row_usuario['telefone'];?></td>
                  <td><?php  echo $row_usuario['email'];?></td>
                  <td> <a href="avaliar_tecnico.php?id=<?php  echo $row_usuario['idserv']; ?>" class="btn btn-primary">Avaliar Técnico</a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table> 
          </div>
        </div>

        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
        <br><br><br><br><br><br><br><br><br><br>
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