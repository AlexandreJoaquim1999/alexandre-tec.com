<?php

    session_start();
    

    include("conexao.php");
    $_SESSION['id_prob'] = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Escolher técnico</title>
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
        <a href="cliente.php" class="voltaresc"><button type="submit" class="btn voltar"><font color="black"><b>voltar</b></font></button></a>
      </nav>
    </div>
    <body>

        <div class="container" >
            <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Nome</th>
                  <th>Telefone</th>
                  <th>Email</th>
                  <th>Data de Nascimento</th>
                  <th>Cidade</th>
                  <th>Estado</th>
                  <th>Formação</th>
                  <th>Instituição</th>
                  <th>Avaliação</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <?php 
                $result_usuario = "SELECT * FROM tecnico";
                $resultado_usuario = mysqli_query($conexao, $result_usuario);
                

                 while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
               ?>
              <tbody>
                <tr>
                  <td><?php  echo $row_usuario['id'];?></td>
                  <td><?php  echo $row_usuario['nome'];?></td>
                  <td><?php  echo $row_usuario['telefone'];?></td>
                  <td><?php  echo $row_usuario['email'];?></td>
                  <td><?php  echo $row_usuario['data_nasc'];?></td>
                  <td><?php  echo $row_usuario['cidade'];?></td>
                  <td><?php  echo $row_usuario['estado'];?></td>  
                  <td><?php  echo $row_usuario['formacao'];?></td>
                  <td><?php  echo $row_usuario['instituicao'];?></td>
                  <td><?php  echo $row_usuario['avaliacao'];?></td>
                  <td> <a href="escolher.php?id=<?php  echo $row_usuario['id']; ?>" class="btn btn-primary">Escolher Técnico</a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table> 
          </div>
        </div>
        
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>
