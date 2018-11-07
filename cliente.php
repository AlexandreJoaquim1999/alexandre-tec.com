<?php
    session_start();
     include("conexao.php");

     if(($_SESSION['privilegio'] != 1)&&($_SESSION['privilegio'] != 3)){
        echo("<script>");
        echo("alert('Você não tem permissão para acessar esta pagina')");
        echo("</script>"); 
        header('location:login_cliente.php');    
    }
    
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>Tec.com / Cliente</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css?version=25">
        <!-- colocando o icone na barra de endereço do navegador -->
        <link rel="shortcut icon" href="img/icone.png" type="image/x-png"/>
    </head>
    <body>
        <header>
            <a href="index.php"><img src="img/banner1.png" title="Tec.com" alt="s1(image)" class="img-responsive"></a>
            <div class="volta">
                <a href="direciona.php"><button type="button" class="btn btn-primary btvolta">Voltar
                </button></a>
            </div>
            <div class="sair">
                <a href="sair.php"><button type="button" class="btn btn-primary btvolta">Sair
                </button></a>
            </div>

            <div class="container-fluid imagem"></div>
        </header>
        <div class="jumbotron jumbotronCliente">
            <p>
                <h2><b>Bem vindo!</b></h2>
                <h3><?php echo $_SESSION['nome'];?></h3>
            </p>
        </div>
        
        <div class="formulario">
            <div class="container">
                <form method="POST" name="Form1" action="problema.php">
                    <div class="form-row"> 
                        <label for="nome">Informar Problema:</label>
                        <textarea name="descricao" rows="5" cols="500" placeholder="Informe Seu Problema" required></textarea>
                        <div class="container">
                        <p></p>
                        </div> 
                        <button type="submit" class="btn btn-primary btcli" name="informarproblema" action="">Informar Problema</button>   
                    </div>    
                </form> 
            </div>
            <br>
            <div class="container">
                <form method="POST" name="Form2" action="altercadcli.php">
                    <div class="form-row"> 
                        <input type="submit" class="btn btn-primary btcli" name="alterar" value="Alterar Cadastro">
                    </div> <br>
                </form> 
                <form method="POST" name="Form2" action="visualisar_servicos_cli.php">
                    <div class="form-row"> 
                        <input type="submit" class="btn btn-primary btcli" name="alterar" value="Visualisar Serviços">
                    </div>  <br>   
                </form> 
                <form method="POST" name="Form2" action="visualisar_problemas_cli.php">
                    <div class="form-row"> 
                        <input type="submit" class="btn btn-primary btcli" name="alterar" value="Meus Problemas">
                    </div> 
                </form> 
            </div>
            <br>
        </div>
    </body>
    <footer id="footerlogin">
            <div class="container">
                <div class="footerindex">
                    <br><h6 id="facefooter"><b>Facebook:</b> <a id="face" href ="https://www.facebook.com/Teccom-621638164884532/" target="blank">facebook.com/tec.com</a></h6>
                    <h6 id="emailfooter"><b>Email:</b> tec.com.oficial@gmail.com</h6>
                    <h6 id="turmafooter"><b>CEP- Centro de Educação Profissional "Tancredo Neves"<a id="aadmin" href="admin.php">-</a> IM3A - Alexandre, César, Jeferson</b></h6><br/>
                </div>
            </div>
        </footer>    
</html>