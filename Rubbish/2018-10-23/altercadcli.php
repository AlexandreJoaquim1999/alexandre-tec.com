<?php
    session_start();
    include("conexao.php");
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>Cliente/Alterar cadastro</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="http://localhost/projeto/css/estilo.css">
        <link rel="stylesheet" href="css/estilo.css?version=2">
    </head>
    <body>
        <header id="headeraltercadcli">
            <h2><b>Alterar cadastro</b></h2>
        </header>
        <div class="container"> 
                <nav class="navbar navbar-expand-md navbar-light">  
                    <a href="cliente.php" class="voltaresc"><button type="submit" class="btn inicio"><font color="black"><b>voltar</b></font></button></a>
                </nav>
            </div>
        <div class="formularioaltercadcli">
            <div class="container">
                <form method="POST" name="Form" action="valcad.php">
                    <div class="form-row">
                        <label class="label1" for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $_SESSION['nomeuser'];?>">
                    </div>
                    <div class="form-row">
                        <label class="label1 for="cpf">CPF:</label>
                        <input type="text" class="form-control" name="cpf" id="cpf" value="<?php echo $_SESSION['cpf'];?>">
                    </div>
                    <div class="form-row">
                        <label class="label1 for="telefone">Telefone:</label>
                        <input type="text" class="form-control" name="telefone" id="telefone" value="<?php echo $_SESSION['telefone'];?>">
                    </div>
                    <div class="form-row">                   
                        <label class="label1 for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $_SESSION['email'];?>">                  
                    </div>
                    <div class="form-row">
                        <label class="label1 class="label1" for="rua">Endereco:</label>
                        <input type="text" class="form-control" name="rua" id="rua" value="<?php echo $_SESSION['rua'];if($_SESSION['rua']==""){echo "Rua";}?>">
                        <input type="text" class="form-control" name="num" id="num" value="<?php echo $_SESSION['num'];if($_SESSION['num']==""){echo "Numero";}?>">
                        <input type="text" class="form-control" name="complemento" id="complemento" value="<?php echo $_SESSION['complemento'];if($_SESSION['complemento']==""){echo "Complemento";}?>">
                        <input type="text" class="form-control" name="bairro" id="bairro" value="<?php echo $_SESSION['bairro'];if($_SESSION['bairro']==""){echo "Bairro";}?>" required>
                        <input type="text" class="form-control" name="cidade" id="cidade" value="<?php echo $_SESSION['cidade'];if($_SESSION['cidade']==""){echo "Cidade";}?>" required>
                        <input type="text" class="form-control" name="estado" id="estado" value="<?php echo $_SESSION['estado'];if($_SESSION['estado']==""){echo "Estado";}?>" required>
                    </div><br/>
                    <div class="form-row">
                        <label class="label1 for="senha">Senha:</label>
                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" maxlength="8">
                    </div>
                    <div class="form-row">
                        <label class="label1 for="senha">Repita sua Senha:</label>
                        <input type="password" class="form-control" name="senha2" id="senha2" placeholder="Senha" maxlength="8">
                    </div><br/>
                    <button type="submit" class="btn btn-primary" name="salvar3">Salvar</button>               
                </form> 
            </div><br><br>
        </div>    
        <footer id="footeraltercadcli">
            
        </footer>
    </body>
</html> 
