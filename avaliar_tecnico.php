<?php

  session_start();
  include("conexao.php");

  $_SESSION['id_servico'] = $_GET['id'];
  //echo $_SESSION['id_servico'];
  ?>
  <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Visualisar Serviços</title>
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

    	<header id="header_cadastro">
            <h2><b>Avaliar Técnico</b></h2>
        </header>
        <div class="formulario">
            <div class="container">
                <form method="POST" name="Form1" action="avaliar.php"><br/>
                    <div class="form-row">
                    	<p>
	                        <label class="label1" for="avaliacao">Informe a Nota para Este Técnico:</label><br/>
							<input type="radio" name="avaliacao" value="5"/>5
	                        <input type="radio" name="avaliacao" value="6"/>6
	                        <input type="radio" name="avaliacao" value="7"/>7
	                        <input type="radio" name="avaliacao" value="8"/>8
	                        <input type="radio" name="avaliacao" value="9"/>9
	                        <input type="radio" name="avaliacao" value="10"/>10
	                    </p>
		            </div><br/>
		            <button type="submit" class="btn btn-primary" name="avaliar">Avaliar</button>
                </form>
            </div>
        </div>
        
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>