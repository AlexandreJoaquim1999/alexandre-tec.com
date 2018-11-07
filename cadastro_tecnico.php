<!doctype html>
<html lang="pt-br">
    <head>
        <title>Cadastro do Técnico</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css?version=7">
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
            <h2><b>Cadastro do Técnico</b></h2>
        </header>
        <div class="container"> 
            <nav class="navbar navbar-expand-md navbar-light">  
                <a href="index.php" class="voltaresc"><button type="submit" class="btn voltar"><font color="black"><b>voltar</b></font></button></a>
            </nav>
        </div>
        <div class="formulariotec">
            <div class="container">
                <form method="POST" name="Form1" action="valcad.php"><br/>
                    <div class="form-row">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required autofocus="1">
                    </div>
                    <br/>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="cpf">CPF:</label>
                            <input type="cpf" class="form-control" name="cpf" id="cpf" placeholder="CPF" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="data_nasc">Data de Nascimento:</label>
                            <input type="date" class="form-control placedate" name="data_nasc" id="data_nasc" required>
                        </div>
                    </div><br/>
                    <div class="form-row">
                        <label for="telefone">Telefone:</label>
                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" required>
                    </div><br/>
                    <div class="form-row">                   
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">                  
                    </div><br/>
                     <br/>
                    <p>Endereço:</p>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="rua">Rua:</label>
                            <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="label" for="numero">Numero:</label>
                            <input type="text" class="form-control" id="numero" name="numero" placeholder="Nº">
                        </div>
                    </div>
                     <div class="form-row">
                        <label for="complemento">Complemento:</label>
                        <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento">
                    </div><br/>
                     <div class="form-row">
                        <label for="bairro">Bairro:</label>
                        <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro" required>
                    </div>
                    <br/>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                          <label for="cidade">Cidade:</label>
                          <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Estado">Estado:</label>
                            <select id="estado" name="estado" class="form-control" required="">
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
                        <label for="formacao">Formação:</label>
                        <input type="text" class="form-control" name="formacao" id="formacao" placeholder="Formação" required>
                    </div> <br/>
                    <div class="form-row">
                        <label for="insti">Instituição que se Formou:</label>
                        <input type="text" class="form-control" name="insti" id="insti" placeholder="Instituição" required>
                    </div>
                    <br/><div class="form-row">
                        <label for="tenefone">Login:</label>
                        <input type="text" class="form-control" name="login" id="login" placeholder="Login" required>
                    </div><br/>
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
                    <button type="submit" class="btn btn-primary" name="salvar2">Salvar</button>
                <br/><br/></form> 
            </div> 
        </div> 
    </body>
    <footer id="footer_cadastro">
        <div class="container">
                <div class="footerindex">
                    <br><h6 id="facefooter"><b>Facebook:</b> <a id="face" href ="https://www.facebook.com/Teccom-621638164884532/" target="blank">facebook.com/tec.com</a></h6>
                    <h6 id="emailfooter"><b>Email:</b> tec.com.oficial@gmail.com</h6>
                    <h6 id="turmafooter"><b>CEP- Centro de Educação Profissional "Tancredo Neves"<a id="aadmin" href="admin.php">-</a> IM3A - Alexandre, César, Jeferson</b></h6>
                </div>
            </div>
    </footer>
</html> 