<?php
   session_start();
     include("conexao.php");
     if($_SESSION['privilegio'] != 3){
        echo("<script>");
        echo("alert('Você não tem permissão para acessar esta pagina')");
        echo("</script>"); 
        header('location:login_tecnico.php');
    }
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>Tec.com / Administrador</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css?version=167">
        <!-- colocando o icone na barra de endereço do navegador -->
        <link rel="shortcut icon" href="img/icone.png" type="image/x-png"/>
    </head>
    <body>
        <header>
            <a href="index.php"><img src="img/banner1.png" title="Tec.com" alt="s1(image)" class="img-responsive"></a>
            <div class="volta">
                <a href="login_tecnico.php"><button type="button" class="btn btn-primary btvolta">Voltar
                </button></a>
            </div>
            <div class="sair">
                <a href="sair.php"><button type="button" class="btn btn-primary btvolta">Sair
                </button></a>
            </div>

            <div class="container-fluid imagem"></div>
        </header>
        
        <div class="jumbotron jumbotronAdmin">
            <p>
                <h2><b>Bem Vindo!</b></h2>
                <h3><?php echo $_SESSION['login']?></h3>
            </p>
        </div>
        <div class="container">
            <form method="POST" action="visualisar_tecnicos.php" name="form1">
                <input type="submit" class="btn btn-primary btcli2" name="visualisar1" value="Visualisar Técnicos"><br/><br/>
            </form>
        </div>
        <div class="container">
            <form method="POST" action="visualisar_clientes.php" name="form1">
                <input type="submit" class="btn btn-primary btcli2" name="visualisar2" value="Visualisar Clientes"><br/><br/>
            </form>
        </div> 
        <div class="container">
            <form method="POST" action="visualisar_problemas_adm.php" name="form1">
                <input type="submit" class="btn btn-primary btcli2" name="visualisar3" value="Visualisar Problemas"><br/><br/>
            </form>
        </div>
        <div class="container">
            <form method="POST" action="visualisar_servicos_adm.php" name="form1">
                <input type="submit" class="btn btn-primary btcli2" name="visualisar4" value="Visualisar Serviços"><br/><br/>
            </form>
        </div>
        <div class="container">
            <form method="POST" action="tecnico.php" name="form1">
                <input type="submit" class="btn btn-primary btcli2" name="visualisar4" value="Área dos Técnicos"><br/><br/>
            </form>
        </div> 
        <div class="container">
            <form method="POST" action="cliente.php" name="form1">
                <input type="submit" class="btn btn-primary btcli2" name="visualisar4" value="Área dos Clientes"><br/><br/>
            </form>
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