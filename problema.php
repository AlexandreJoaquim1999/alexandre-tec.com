<?php

	session_start();
    

    include("conexao.php");
    
    
       
   
        
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $id_cliente = $_SESSION['id'];
    echo $_SESSION['id'];



 
    $sql = mysqli_query($conexao, "INSERT INTO problema (id_cliente, descricao, situacao) VALUES ('$id_cliente', '$descricao', 'pendente' )");

    if ($sql == true){
    	?>
                <script>
                alert('Problema Registrado!!');
                window.location.replace ("cliente.php");
                </script>

                <?php 

    }
    else{
        ?>
                <script>
                alert('Dados não Registrados!!');
                window.location.replace ("cliente.php");
                </script>

                <?php
    }
        
        
    
?>