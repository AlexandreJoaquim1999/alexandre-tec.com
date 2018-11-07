<?php

    session_start();
    

    include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Visualisar Problemas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css">
        <!-- colocando o icone na barra de endereço do navegador -->
        <link rel="shortcut icon" href="img/icone.png" type="image/x-png"/>
    </head> 
    <body>
      <header id="headerlogin">
            <h2><b>Adm / Visualizar Problemas</b></h2>
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
                  <th>Id Cliente</th>
                  <th>Descrição</th>
                  <th>Status</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <?php 
                $result_usuario = "SELECT * FROM problema ";

                $resultado_usuario = mysqli_query($conexao, $result_usuario);

                 while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
               ?>
              <tbody>
                <tr>
                  <td><?php  echo $row_usuario['id'];?></td>
                  <td><?php  echo $row_usuario['id_cliente'];?></td>
                  <td><?php  echo $row_usuario['descricao'];?></td>
                  <td><?php  echo $row_usuario['situacao'];?></td>
                  <td> <a href="aceitar_servico.php?id=<?php  echo $row_usuario['id']; ?>" class="btn btn-primary btadmprob">Aceitar Serviço</a><a href="visualizar_cliente.php?id=<?php  echo $row_usuario['id_cliente']; ?>" class="btn btn-primary btadmprob">Ver Cliente</a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table> 
          </div>
        </div>
        
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
        <br><br><br><br><br>
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