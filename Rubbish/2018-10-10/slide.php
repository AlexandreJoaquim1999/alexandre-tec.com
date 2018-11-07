<!-- 
PARAMOS EM 13 MINUTOS E 55 SEGUNDOS NA VIDEO AULA --><!DOCTYPE html>
<hlml lang="pt-br">
	<!-- colocando a página em Português -->
	<head>
		<!-- Cabeça do site -->
		<title> Página Teste - SLIDER </title>
		<meta charset="UTF-8"/>

		<!-- chamando o Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>

		<style>
			#divSlider{
				width: 1000px;
				height: 300px;
				border: 1px solid #000;
			}
		</style>
		<script>
			
			var imgs=[];
			var slider;
			var imgAtual;
			var maxImg;
			//carregando em cada vetoruma nova imagem
			function preCarregamento(){
				var d=1;
				for(var i=0;i<5;i++){
					//primeira posição 1 imagem criada
					img[i] = new Image();
					img[0].scr="imagens/sliderPrincipal/d"+d+".jpg";
					//incrementando para correr entre as imagens
					d++;
				}			

			}
			// funcao para carregar as imagens na div
			function carregarImg(img){
				/*no parametro img vira qual imagem será carregada*/
				slider.style.backgroundImage="url('"+imgs[img].src+"')";

			}
			function inicia(){
				preCarregamento();
				imgAtual=1;
				/*Recebendo o numero maximo de imgs no nosso vetor, (length) pegando todos os vetores*/
				maxImg=imgs.length;
				/*pegando a div (divSlider) e dando ela como valor para a variavel slider*/
				carregarImg(imgAtual)
				slider=document.getElementById("divSlider");


				/*pegando a divslider e dando ela como valor para a variavel slider*/
				slider = document.getElementById("divSlider");
			}
			window.addEventListener("load",inicia);

		</script>

		
	</head>
	<body>



		<div id="divSlider"> 
			
		</div> 	
		
	</body>
</hlml>