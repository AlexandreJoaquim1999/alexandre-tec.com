<?php
    session_start();
    include("conexao.php");

     if(($_SESSION['privilegio']!= 1)&&($_SESSION['privilegio']!= 3)){
        echo("<script>");
        echo("alert('Você não tem permissão para acessar esta pagina')");
        echo("</script>"); 
        header('location:login_cliente.php');    
    }

    $id_cliente = $_SESSION['id'];

    $resultado_usuario = mysqli_query($conexao, "SELECT * FROM cliente WHERE id = '$id_cliente';");

    $row_usuario = mysqli_fetch_assoc($resultado_usuario);
    
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Alterar Cadastro</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css?version=166">
        <!-- colocando o icone na barra de endereço do navegador -->
        <link rel="shortcut icon" href="img/icone.png" type="image/x-png"/>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.mask.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#cpf").mask("000.000.000-00");
                $("#telefone").mask("(00) 0000.00009");
                
                $("#telefone").blur(function(event){
                    if($(this).val().length == 15){
                        $("#telefone").mask("(00) 00000.0009");
                    }
                    else{
                        $("#telefone").mask("(00) 0000.00009");
                    }
                })
            })


        </script>
    </head>
    <body>
        <header id="header_cadastro">
            <h2><b>Alterar Cadastro</b></h2>
        </header>
        <div class="container"> 
        <nav class="navbar navbar-expand-md navbar-light">  
            <a href="cliente.php" class="voltaresc"><button type="submit" class="btn voltar"><font color="black"><b>voltar</b></font></button></a>
        </nav>
    </div>
        <div class="formulariocli">
            <br><div class="container">
                <form method="POST" name="Form" action="valcad.php">
                    <div class="form-row">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $row_usuario['nome'];?>">
                    </div>
                    <div class="form-row">                   
                        <label for="cpf">CPF:</label>
                        <input type="cpf" class="form-control" name="cpf" id="cpf" value="<?php echo $row_usuario['cpf'];?>">                  
                    </div>
                    <div class="form-row">
                        <label for="tenefone">Telefone:</label>
                        <input type="text" class="form-control" name="telefone" id="telefone" value="<?php echo $row_usuario['telefone'];?>">
                    </div>
                    <div class="form-row">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $row_usuario['email'];?>">
                    </div>
                    <p>Endereço:</p>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="rua">Rua:</label>
                            <input type="text" class="form-control" id="rua" name="rua"value="<?php echo $row_usuario['rua'];if($row_usuario['rua']==""){echo "Rua";}?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="label" for="numero">Numero:</label>
                            <input type="text" class="form-control" id="numero" name="numero" value="<?php if($row_usuario['numero']==0){echo "Número";} else{echo $row_usuario['numero'];}?>">
                        </div>
                    </div>
                     <div class="form-row">
                        <label for="complemento">Complemento:</label>
                        <input type="text" class="form-control" name="complemento" id="complemento" value="<?php echo $row_usuario['complemento'];if($row_usuario['complemento']==""){echo "Complemento";}?>">
                    </div>
                     <div class="form-row">
                        <label for="bairro">Bairro:</label>
                        <input type="text" class="form-control" name="bairro" id="bairro"  value="<?php echo $row_usuario['bairro'];if($row_usuario['bairro']==""){echo "Bairro";}?>" required>
                    </div>
                    <br/>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                          <label for="cidade">Cidade:</label>
                          <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $row_usuario['cidade'];if($row_usuario['cidade']==""){echo "Cidade";}?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Estado">Estado:</label>
                            <select id="estado" name="estado" class="form-control" value="<?php echo $row_usuario['estado'];if($row_usuario['estado']==""){echo "Estado";}?>" required>
                            <option selected>...</option>
                            <option>AC</option>
                            <option>AL</option>
                            <option>AP</option>
                            <option>AM</option>
                            <option>BA</option>
                            <option>CE</option>
                            <option>DF</option>
                            <option>ES</option>
                            <option>GO</option>
                            <option>MA</option>
                            <option>MT</option>
                            <option>MS</option>
                            <option>MG</option>
                            <option>PA</option>
                            <option>PB</option>
                            <option>PR</option>
                            <option>PI</option>
                            <option>PO</option>
                            <option>RR</option>
                            <option>RO</option>
                            <option>RJ</option>
                            <option>RN</option>
                            <option>RS</option>
                            <option>SC</option>
                            <option>SP</option>
                            <option>SE</option>
                            <option>TO</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="senha">Senha:</label>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" maxlength="8" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="senha">Repita sua Senha:</label>
                            <input type="password" class="form-control" name="senha2" id="senha2" placeholder="Senha" maxlength="8" required>
                        </div>    
                    </div><br/>
                    <button type="submit" class="btn btn-primary" name="salvar3">Salvar</button><br><br>
                </form> 
            </div>  
        </div>    
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