<?php

    session_start();
    

    include("conexao.php");
    
    //cadastro de clientes
    if(isset($_POST['salvar1'])){  
       
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
        $rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
        $num = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_NUMBER_INT);
        $complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
        $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
        $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
        $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING); 
        $senha = md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));
        $senha2 = md5(filter_input(INPUT_POST, 'senha2', FILTER_SANITIZE_STRING));

        if ($senha!=$senha2) {?>
            <script>
            alert('As Senhas são Incompativeis');
            window.location.replace ("cadastro_cliente.php");
            </script>

            <?php
            
        } 
        else{     
            $sql = mysqli_query($conexao, "INSERT INTO cliente (nome, telefone, email, cpf, rua, numero, complemento, bairro, cidade, estado, senha) VALUES ('$nome', '$telefone', '$email', '$cpf', '$rua', '$num', '$complemento', '$bairro', '$cidade', '$estado', '$senha')");

            if ($sql == true){

                $sql = "SELECT * FROM cliente WHERE cpf = '$cpf' && senha = '$senha' LIMIT 1";
                $result = mysqli_query($conexao, $sql);
                $resultado = mysqli_fetch_assoc($result);


                if(!empty($resultado)){ 
                    $_SESSION['id'] = $resultado['id'];     
                    $_SESSION['nome'] = $resultado['nome'];
                    $_SESSION['cpf'] = $resultado['cpf'];
                    $_SESSION['telefone'] = $resultado['telefone'];
                    $_SESSION['rua'] = $resultado['rua'];
                    $_SESSION['num'] = $resultado['numero'];
                    $_SESSION['complemento'] = $resultado['complemento'];
                    $_SESSION['bairro'] = $resultado['bairro'];
                    $_SESSION['cidade'] = $resultado['cidade'];
                    $_SESSION['estado'] = $resultado['estado'];
                    $_SESSION['email'] = $resultado['email'];
                    $_SESSION['privilegio'] = 1;
                   ?>                
                    <script>
                    alert('Dados Cadastrados com Sucesso!!');
                    window.location.replace ("cliente.php");
                    </script>
                    <?php
                }

            }
            else{
                ?>                
                    <script>
                    alert('Dados Cadastrados com Sucesso!!');
                    window.location.replace ("cadastro_cliente.php");
                    </script>
                    <?php
            }
        }
    }

    //cadastro de tecnicos
    if(isset($_POST['salvar2'])){

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING); 
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
        $data_nasc = filter_input(INPUT_POST, 'data_nasc', FILTER_SANITIZE_STRING);
        $rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
        $num = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_NUMBER_INT);
        $complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
        $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
        $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
        $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
        $formacao = filter_input(INPUT_POST, 'formacao', FILTER_SANITIZE_STRING);
        $insti = filter_input(INPUT_POST, 'insti', FILTER_SANITIZE_STRING);
        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
        $senha = md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));
        $senha2 = md5(filter_input(INPUT_POST, 'senha2', FILTER_SANITIZE_STRING));



        if ($senha != $senha2) {?>
            <script>
            alert('As Senhas são Incompativeis');
            window.location.replace ("cadastro_cliente.php");
            </script>

            <?php
         } 
        else{     
            $sql = mysqli_query($conexao, "INSERT INTO tecnico (nome, telefone, email, cpf, data_nasc, rua, numero, complemento, bairro, cidade, estado, formacao, instituicao, login, senha) VALUES ('$nome', '$telefone', '$email', '$cpf', '$data_nasc', '$rua', '$num', '$complemento', '$bairro', '$cidade', '$estado', '$formacao', '$insti', '$login', '$senha')");
            if ($sql == true){?>
            <script>
            alert('Dados Cadastrados com Sucesso!!!\nAguarde o contado dos nossos Administradores.');
            window.location.replace ("index.php");
            </script>

            <?php
            }
            else{ ?>
            <script>
            alert('Dados não Registrados');
            window.location.replace ("cadastro_tecnico.php");
            </script>

            <?php
            }
        }
    }

    //alteração do cadastro de clientes
    if(isset($_POST['salvar3'])){ 
     
       
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
        $rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
        $num = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_STRING);
        $complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
        $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
        $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
        $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING); 
        $senha = md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));
        $senha2 = md5(filter_input(INPUT_POST, 'senha2', FILTER_SANITIZE_STRING));
        $id = $_SESSION['id'];


        if ($senha != $senha2) {
            ?>
            <script>
            alert('As Senhas são Incompativeis');
            window.location.replace ("altercadcli.php");
            </script>

            <?php
        } 
        else{ 

            $sql = mysqli_query($conexao, "UPDATE cliente SET nome = '$nome', telefone = '$telefone', email = '$email', cpf = '$cpf', rua = '$rua', numero = '$num', complemento = '$complemento', bairro = '$bairro', cidade = '$cidade', estado = '$estado', senha = '$senha' WHERE id = '$id';");
            if ($sql == true){
                if($_SESSION['nome']!=null)$_SESSION['nome']=null;
                $_SESSION['nome'] = $nome;
                ?>                
                    <script>
                    alert('Dados Cadastrados com Sucesso!!');
                    window.location.replace ("cliente.php");
                    </script>
                    <?php
            }
            else{
                   ?>
                <script>
                alert('Dados não Registrados');
                window.location.replace ("cadastro_tecnico.php");
                </script>

                <?php
            }
        }
    }

    //alteração do cadastro de tecnicos
    if(isset($_POST['salvar4'])){

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING); 
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
        $data_nasc = filter_input(INPUT_POST, 'data_nasc', FILTER_SANITIZE_STRING);
        $rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
        $num = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_STRING);
        $complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
        $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
        $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
        $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
        $formacao = filter_input(INPUT_POST, 'formacao', FILTER_SANITIZE_STRING);
        $insti = filter_input(INPUT_POST, 'insti', FILTER_SANITIZE_STRING);
        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
        $senha = md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));
        $senha2 = md5(filter_input(INPUT_POST, 'senha2', FILTER_SANITIZE_STRING));
        $id = $_SESSION['id'];



        if ($senha != $senha2) {
            ?>
            <script>
            alert('As Senhas são Incompativeis');
            window.location.replace ("altercadcli.php");
            </script>

            <?php
         } 
        else{

            $sql = mysqli_query($conexao, "UPDATE tecnico SET nome = '$nome', telefone = '$telefone', email = '$email', cpf = '$cpf', data_nasc ='$data_nasc', rua = '$rua', numero = '$num', complemento = '$complemento', bairro = '$bairro', cidade = '$cidade', estado = '$estado', formacao = '$formacao', instituicao = '$insti', login = '$login', senha = '$senha' WHERE id = '$id';");
            if ($sql == true){
                if($_SESSION['nome']!=null)$_SESSION['nome']=null;
                $_SESSION['nome'] = $nome;
                ?>                
                    <script>
                    alert('Dados Cadastrados com Sucesso!!');
                    window.location.replace ("cliente.php");
                    </script>
                    <?php
            }
            else{
                ?>
                <script>
                alert('Dados não Registrados');
                window.location.replace ("cadastro_tecnico.php");
                </script>

                <?php
            }
        }
    }
       
    
?>