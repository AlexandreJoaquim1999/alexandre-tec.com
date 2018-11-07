<?php

    session_start();
    

    include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Visualizar técnicos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css?version=1">
        <!-- colocando o icone na barra de endereço do navegador -->
        <link rel="shortcut icon" href="img/icone.png" type="image/x-png"/>
    </head>
    <body>
      <header id="headerlogin">
            <h2><b>Adm / Visualizar Técnicos</b></h2>
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
                  <th>Nome</th>
                  <th>Telefone</th>
                  <th>Email</th>
                  <th>CPF</th>
                  <th>Data de Nascimento</th>
                  <th>Rua</th>
                  <th>Numero</th>
                  <th>Complemento</th>
                  <th>Bairro</th>
                  <th>Cidade</th>
                  <th>Estado</th>
                  <th>Formação</th>
                  <th>Instituição</th>
                  <th>Login</th>
                  <th>Status</th>
                  <th>Avaliação</th>
                  <th>Serviços Prestados</th>
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
                  <td><?php  echo $row_usuario['cpf'];?></td>
                  <td><?php  echo $row_usuario['data_nasc'];?></td>
                  <td><?php  echo $row_usuario['rua'];?></td>
                  <td><?php  echo $row_usuario['numero'];?></td>
                  <td><?php  echo $row_usuario['complemento'];?></td>
                  <td><?php  echo $row_usuario['bairro'];?></td>
                  <td><?php  echo $row_usuario['cidade'];?></td>
                  <td><?php  echo $row_usuario['estado'];?></td>  
                  <td><?php  echo $row_usuario['formacao'];?></td>
                  <td><?php  echo $row_usuario['instituicao'];?></td>
                  <td><?php  echo $row_usuario['login'];?></td>
                  <td><?php  echo $row_usuario['status'];?></td>
                  <td><?php  echo $row_usuario['avaliacao'];?></td>    
                  <td><?php  echo $row_usuario['qtd_serv'];?></td>
                  <td> <a href="aceitartecnicos.php?id=<?php  echo $row_usuario['id']; ?>" class="btn btn-primary btadm">Aceitar Técnico</a><a href="tornaradm.php?id=<?php  echo $row_usuario['id']; ?>" class="btn btn-primary btadm">Tornar Administrador</a><a href="excluirtecnicos.php?id=<?php  echo $row_usuario['id']; ?>" class="btn btn-primary btadm">Excluir Técnico</a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table> 
          </div>
        </div>

        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
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
