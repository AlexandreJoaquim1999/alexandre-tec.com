<!doctype html>
<html lang="pt-br">
    <head>
        <title>Tec.com</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css?version=185">
        <!-- colocando o icone na barra de endereço do navegador -->
        <link rel="shortcut icon" href="img/icone.png" type="image/x-png"/>
    </head> 
    <body>
		<header id="header_index">

      <a href="https://www.facebook.com/Teccom-621638164884532/" target="blank"><img src="img/iconeface.png" alt="imgFace" class="img-responsive imgface" title="Facebook Tec.com"></a>

      <div class="dropdown entrar">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
              Entrar
          </button>
          <div class="dropdown-menu dropentrar">
              <a class="dropdown-item drop1" href="login_cliente.php">Cliente</a>
              <a class="dropdown-item drop2" href="login_tecnico.php">Técnico</a>
          </div>
        </div>

      <a href="index.php"><img src="img/tectestee.jpg" title="Tec.com" alt="s1(image)" class="img-responsive"></a> 

		</header> 
    
    <!-- Quebrando o ponto flutuante -->
    <div class="clearfix"> </div> <!-- CSS (BOOTSTRAP) -->
    <!-- <br class="fix"/> Quebrando flutuante no (CSS) -->

  <div class="container">
    <!--Incluindo o slide na página-->
    <?php
      include "slide.php";
    ?> <br/>
  </div>

    <div class="container espaco">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
          <a href="cadastro_cliente.php">
          <img class="img-responsive cadastrocliente" alt="Cadastro_cliente" title="Clique e cadastre-se para ter acesso aos nossos serviços" src="img/cadcliente.png"></a>
          <br/><br/>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
          <a href="cadastro_tecnico.php">
          <img class="img-responsive cadastrotecnico" alt="Cadastro_tecnico" title="Clique e cadastre-se para ser um de nossos técnicos" src="img/cadtecn.png"></a>
          <br/><br/>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
          <a href="sobre.php">
          <img class="img-responsive sobre" alt="Tec.com/sobre" title="Clique para saber mais sobre nós" src="img/sobre.png"></a>
          <br/><br/>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
          <a href="https://www.teamviewer.com/pt-br/" target="blank">
          <img class="img-responsive acessoremoto" alt="dowload/acesso remoto" title="Clique e baixe o programa para acesso remoto" src="img/acesso.png"></a>
          <br/><br/>
        </div>
      </div>
    </div>


  <div class="clearfix"> </div>    
         
    <div class="container Index"> 
		<div class="jumbotron">
			<h6><b>Tec.com</b></h6>
			<p>Esse site foi criado para atender a sua necessidade de uma forma rápida de eficiente.<br/> Através dele você não precisa sair de sua casa para que seu problema seja resolvido.</p>
		</div>
    </div>
        
		<footer>
			<div class="container">
                <a href="http://www.cepbrazopolis.com.br/" target="blank">
                <img src="img/cep.png" alt="LogoCep" class="img-responsive imgcep" title="CEP (Centro de Educação Profissional 'Tancredo Neves') Brazópolis"></a>
                <a href="http://www.cepbrazopolis.com.br/informatica.html" target="blank">
                <img src="img/ti.png" title="Curso Técnico em Informatica para Internet" alt="Informatica/Internet" class="img-responsive imgti"></a>

                <div class="container">
                  <div class="footerindex">
                    <br/><br/><br/><br/><h6 id="facefooter"><b>Facebook:</b> <a id="face" href ="https://www.facebook.com/Teccom-621638164884532/" target="blank">facebook.com/tec.com</a></h6>
                    <h6 id="emailfooter"><b>Email:</b> tec.com.oficial@gmail.com</h6>
                    <h6 id="turmafooter"><b>CEP-</b> Centro de Educação Profissional "Tancredo Neves"<a id="aadmin" href="admin.php">-</a> IM3A - Alexandre, César, Jeferson</h6><br/>
                  </div>
                </div>



			</div>
		</footer>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>
