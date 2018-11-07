<?php

  session_start();
  include("conexao.php");


  $id_servico = $_SESSION['id_servico'];
  $avaliacao = $_POST['avaliacao'];

  //echo $id_servico;
  //echo $avaliacao;
  $sql = mysqli_query($conexao, "SELECT id_tecnico FROM servicos WHERE id = '$id_servico'");
  $catc_idtec = mysqli_fetch_assoc($sql);
  $id_tecnico = $catc_idtec['id_tecnico'];
  //echo $id_tecnico;


  $catch = mysqli_query($conexao, "SELECT * FROM tecnico WHERE id = '$id_tecnico'");
  $catch_dados = mysqli_fetch_assoc($catch);
  $avaliacao_total = $catch_dados['avaliacao_total'];
  $avaliacao_total = $avaliacao_total + $avaliacao;
  //echo $avaliacao_total;

  $qtd_servicos = $catch_dados['qtd_serv'];
  $qtd_servicos++;
  //echo $qtd_servicos;

  $nova_avaliacao = $avaliacao_total/$qtd_servicos;

  //echo $nova_avaliacao;

  $gravar = mysqli_query($conexao, "UPDATE tecnico SET avaliacao = '$nova_avaliacao', avaliacao_total = '$avaliacao_total', qtd_serv = '$qtd_servicos' WHERE id = '$id_tecnico'");

  if ($gravar == true){
                ?>
                <script>
                alert('Dados Inseridos com Sucesso!');
                window.location.replace ("visualisar_servicos_cli.php");
                </script>

                <?php
            }
            else?>
                <script>
                alert('Dados Não Registrados!');
                window.location.replace ("visualisar_servicos_cli.php");
                </script>

                <?php
            }

  ?>