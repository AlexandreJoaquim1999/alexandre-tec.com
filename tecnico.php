<?php
    session_start();
     include("conexao.php");

     if(($_SESSION['privilegio'] != 2)&&($_SESSION['privilegio'] != 3)){
        ?>
                <script>
                window.location.replace ("login_tecnico.php");
                </script>

                <?php
    }
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>Tec.com / Técnico</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css?version=3">
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
        
        <div class="jumbotron jumbotronTecnico" >
            <p>
                <h2><b>Bem Vindo!</b></h2>
                <h3><?php echo $_SESSION['nome']?></h3>   
            </p>
        </div>
         <div class="formulario">
            <div class="container">
                <form method="POST" action="visualisar_problemas_tec.php" name="form1">
                    <input type="submit" class="btn btn-primary btcli2" name="visualisar" value="Visualisar Problemas"><br/><br/>
                </form>
            </div>
        </div> 
         <div class="formulario">
            <div class="container">
                <form method="POST" action="altercadtec.php" name="form2">
                    <input type="submit" class="btn btn-primary btcli2" name="alterar" value="Alterar Cadastro"><br/><br/>
                </form>
            </div>
        </div> 
        <div class="formulario">
            <div class="container">
                <form method="POST" action="visualisar_servicos_tec.php" name="form1">
                    <input type="submit" class="btn btn-primary btcli2" name="visualisar" value="Visualisar Serviços"><br/><br/>

                </form>
            </div>
        </div><br><br><br><br>
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