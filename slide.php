		<style>
			#divSlider{
				width: 1140px;
				height: 275px;
				border: 1px solid #000;
				display: flex; /*fica facil de posicionar os elementos*/
				justify-content: space-between;/*faz a distribuição dos elementos dentro da div*/
				align-items: center;/*faz com que os botaos fiquem posicionados dentro da janela*/

			}
			.botaoSlider{
				/*RGBA é o sistema de cores formado pelas cores Vermelho (Red), Verde (Green), Azul (Blue) e pelo canal Alpha. O sistema permite exibir todas as cores do sistema RGB, porém permite a utilização da transparência de imagem*/
				background-color: rgba(0,0,0,0.4);
				height: 30%;
				color: #fff;
				cursor: pointer; /* aparece a maozinha no cursor*/
				outline: none; /*faz sumir a borda mesmo ao clicar nesse botao*/
				margin: 10px;
				border: none;
			}
			#bordaLoad{
				width: 100%;
				height: 3px;
				margin-top: 25%;
				border: 1px solid rgba(255,255,255,0.3);/*está deixando transparente*/
			}
			#barraLoad{
				width: 0%;
				height: 100%;
				background-color: #fff;
			}
		</style>
		<script>
			
			var imgs=[];
			var slider;
			var imgAtual;
			var maxImg;
			var tempoTroca;
			var vTempo;
			var vBarra;
			//carregando em cada vetoruma nova imagem
			function preCarregamento(){
				var x=1;
				for(var i=0;i<2;i++){
					//primeira posição 1 imagem criada
					imgs[i] = new Image();
					imgs[i].src="imagens/sliderPrincipal/x"+x+".jpg";
					//incrementando para correr entre as imagens
					x++;
				}			

			}
			// funcao para carregar as imagens na div
			function carregarImg(img){
				/*no parametro img vira qual imagem será carregada*/
				slider.style.backgroundImage="url('"+imgs[img].src+"')";

			}
			function inicia(){
				preCarregamento();
				imgAtual=0;
				/*Recebendo o numero maximo de imgs no nosso vetor, (length) pegando todos os vetores*/
				maxImg=imgs.length-1;
				/*pegando a div (divSlider) e dando ela como valor para a variavel slider*/
				slider=document.getElementById("divSlider");
				vBarra=document.getElementById("barraLoad");
				carregarImg(imgAtual);
				tempoTroca=0;
				anima();

				/*tempoTroca=5000;
				tempoTroca=setInterval(troca,tempoTroca);*/ /*setInterval= chama uma função ou avalia uma expressão em intervalos especificados (em milissegundos).
				A cada 5 segundos a função troca é chamada*/
				
			}

			/*incrementar a variavel imgAtual e chamar a função carrega imagem*/
			function troca(dir){
				tempoTroca=0;
				imgAtual+=dir;
				if(imgAtual>maxImg){
					imgAtual=0;
				}else if (imgAtual<0){
					imgAtual=maxImg;
				}
				carregarImg(imgAtual);

			}
			/*Controla a animação de todo o processo*/
			function anima(){
				tempoTroca++;
				if (tempoTroca>=500){
					tempoTroca=0;
					troca(1);
				}
				vTempo=tempoTroca/5;
				vBarra.style.width=vTempo+"%";

				window.requestAnimationFrame(anima);

			}

			window.addEventListener("load",inicia);

		</script>

		<div class="container" id="divSlider">
		<!-- Botoes para mudar de slide --> 
			<button class="botaoSlider" onclick="troca(-1)"><</button>
			<!-- barra de load -->
			<div id="bordaLoad">
				<div id="barraLoad">
					
				</div>
			</div>
			<button class="botaoSlider" onclick="troca(1)">></button>
			
		</div> 	