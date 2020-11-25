<!DOCTYPE html>
<html>
	<head>
			<!-- Required meta tags-->
	        <meta charset="UTF-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	        <meta name="description" content="Um projeto UFG - Catalão">
	        <link rel="shortcut icon" href="images/icon/logo-claro.png" sizes="35x35" type="image/png">

	        <!-- Title Page-->
	        <title>Relatório de Dosagem</title>

	        <!-- Fontfaces CSS-->
	        <link href="css/font-face.css" rel="stylesheet" media="all">
	        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

	        <!-- Bootstrap CSS-->
	        <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

	        <!-- Vendor CSS-->
	        <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
	        <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
	        <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
	        <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
	        <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
	        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
	        <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

	        <!-- Main CSS-->
	        <link href="css/theme.css" rel="stylesheet" media="all">

	        <style>
				#myDIV {
				text-align: center;
				}
        	</style>

			<script>
				function imprimir() {
					var x = document.getElementById("myDIV");
					if (x.style.display === "none") {
						x.style.display = "block";
					} else {
						x.style.display = "none";
					}
					window.print();
				}
			</script>
	</head>

	<body class="animsition" style="animation-duration: 700ms; opacity: 1;">
		<div class="section__content section__content--p30">
			<img src="images/icon/logo-blue.png" alt="CTT" style="width:100px;height:100px;">
			<center><h2>Relatório de Controle Fck</h2></center>
			    <div class="row">
			      <hr class="style1-grey">
			      <hr class="style1-black">
			    </div>
			    <div id="myDIV">
					<center>
						<button onclick="imprimir()" type="button" class="btn btn-outline-secondary">
							<i class="fa fa-download"></i>&nbsp; Clique aqui para imprimir
						</button>
					</center>
				</div>
			<div class="container">
				<?php

				$soma=0;
				$qsoma=0;
				$fest=0;

				$n = $_POST['qnt'];
				$CP = $_POST['valor-sd'];

				$a1 = $_POST['a1'];
				$a2 = $_POST['a2'];
				$a3 = $_POST['a3'];
				$a4 = $_POST['a4'];
				$a5 = $_POST['a5'];
				$a6 = $_POST['a6'];
				$a7 = $_POST['a7'];
				$a8 = $_POST['a8'];
				$a9 = $_POST['a9'];
				$a10 = $_POST['a10'];
				$a11 = $_POST['a11'];
				$a12 = $_POST['a12'];
				$a13 = $_POST['a13'];
				$a14 = $_POST['a14'];
				$a15 = $_POST['a15'];
				$a16 = $_POST['a16'];
				$a17 = $_POST['a17'];
				$a18 = $_POST['a18'];
				$a19 = $_POST['a19'];
				$a20 = $_POST['a20'];
				$a21 = $_POST['a21'];
				$a22 = $_POST['a22'];
				$a23 = $_POST['a23'];
				$a24 = $_POST['a24'];
				$a25 = $_POST['a25'];
				$a26 = $_POST['a26'];
				$a27 = $_POST['a27'];
				$a28 = $_POST['a28'];
				$a29 = $_POST['a29'];
				$a30 = $_POST['a30'];
				$a31 = $_POST['a31'];
				$a32 = $_POST['a32'];
				$a33 = $_POST['a33'];
				$a34 = $_POST['a34'];
				$a35 = $_POST['a35'];
				$a36 = $_POST['a36'];
				$a37 = $_POST['a37'];
				$a38 = $_POST['a38'];
				$a39 = $_POST['a39'];
				$a40 = $_POST['a40'];

				$amostra= array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40);

				$amostra[1]=$a1;
				$amostra[2]=$a2;
				$amostra[3]=$a3;
				$amostra[4]=$a4;
				$amostra[5]=$a5;
				$amostra[6]=$a6;
				$amostra[7]=$a7;
				$amostra[8]=$a8;
				$amostra[9]=$a9;
				$amostra[10]=$a10;
				$amostra[11]=$a11;
				$amostra[12]=$a12;
				$amostra[13]=$a13;
				$amostra[14]=$a14;
				$amostra[15]=$a15;
				$amostra[16]=$a16;
				$amostra[17]=$a17;
				$amostra[18]=$a18;
				$amostra[19]=$a19;
				$amostra[20]=$a20;
				$amostra[21]=$a21;
				$amostra[22]=$a22;
				$amostra[23]=$a23;
				$amostra[24]=$a24;
				$amostra[25]=$a25;
				$amostra[26]=$a26;
				$amostra[27]=$a27;
				$amostra[28]=$a28;
				$amostra[29]=$a29;
				$amostra[30]=$a30;
				$amostra[31]=$a31;
				$amostra[32]=$a32;
				$amostra[33]=$a33;
				$amostra[34]=$a34;
				$amostra[35]=$a35;
				$amostra[36]=$a36;
				$amostra[37]=$a37;
				$amostra[38]=$a38;
				$amostra[39]=$a39;
				$amostra[40]=$a40;

				#seleção dos valores Fi6 Tabela 8 NBR 12655
				if ($n==2 && $CP=="A") {$f6=0.82;}
				elseif ($n==3 && $CP=="A") {$f6=0.86;}
				elseif ($n==4 && $CP=="A") {$f6=0.89;}
				elseif ($n==5 && $CP=="A") {$f6=0.91;}
				elseif ($n==6 && $CP=="A") {$f6=0.92;}
				elseif ($n==7 && $CP=="A") {$f6=0.94;}
				elseif ($n==8 || $n==9 && $CP=="A") {$f6=0.95;}
				elseif ($n==10 || $n==11 && $CP=="A") {$f6=97;}
				elseif ($n==12 || $n==13 && $CP=="A") {$f6=0.99;}
				elseif ($n==14 || $n==15 && $CP=="A") {$f6=1.00;}
				elseif ($n>=16 && $CP=="A") {$f6=1.02;}

				if ($n==2 && $CP=="B" || $CP=="C") {$f6=0.75;}
				elseif ($n==3 && $CP=="B" || $CP=="C") {$f6=0.80;}
				elseif ($n==4 && $CP=="B" || $CP=="C") {$f6=0.84;}
				elseif ($n==5 && $CP=="B" || $CP=="C") {$f6=0.87;}
				elseif ($n==6 && $CP=="B" || $CP=="C") {$f6=0.89;}
				elseif ($n==7 && $CP=="B" || $CP=="C") {$f6=0.91;}
				elseif ($n==8 || $n==9 && $CP=="B" || $CP=="C") {$f6=0.93;}
				elseif ($n==10 || $n==11 && $CP=="B" || $CP=="C") {$f6=96;}
				elseif ($n==12 || $n==13 && $CP=="B" || $CP=="C") {$f6=0.98;}
				elseif ($n==14 || $n==15 && $CP=="B" || $CP=="C") {$f6=1.00;}
				elseif ($n>=16 && $CP=="B" || $CP=="C") {$f6=1.02;}

				#Coleta de todos os valores e soma das amostras e impressão das amostras

				for ($j=1; $j <= $n ; $j++) { 
					$soma = $soma+ $amostra[$j];
				}

				$fcm= $soma/$n;

				#calculo do fctm 
				if ($n>=20) {
					#soma do quadradado da diferença
					for ($i=1; $i <= $n ; $i++) {
						$qsoma= $qsoma+pow($amostra[$i]-$fcm,2);
					}

					# Calculo do desvio padrão
					$sd=pow($qsoma/($n-1), (1/2));
				
					#Calculo do fck para 20 amostras ou masi
					$fck= $fcm-(1.65*$sd);
				}
				elseif ($n>=6 && $n<20) { 

					#Classificação em ordem crescente
					sort($amostra);

					for ($j=1; $j <= $n ; $j++) { 
						if ($n==2*$j) {
							$ca="P";
						}
						elseif ($n==2*$j-1) {
							$ca="I";
						}
					}

					# A NBR 12655 descreve se a quantidade de amostra for impar deve ser
					# desconsiderado o maior valor ou seja n logo tem-se n-1 amostras item
					# 6.2.3.2 a)

					if ($ca=="I"){
						$n= $n-1;

						#calculo numerador do fckest
						for ($i=1; $i <= $n/2-1 ; $i++) {
							$fest= $fest+$amostra[$i];
						}
						#Calculo fckest para amostra entre 6 e 19 intem 6.2.3.2 a)
						$fckest=2*($fest/($n/2-1))-$amostra[$n/2];
					}
				}

				elseif ($n>=2 && $n<=5) {

					$fckest= $amostra[1]*$f6;
				}

				?>
				<div class="row">
					<div class="col">
						<h3> Relatório de Controle Fck</h3><br>
							<p>O seguinte relatório de cálculo é empregado a metodologia publicada pela Associação Brasileira de Cimento Portland (ABCP). Adaptado para o Cimento CP II E-32.</p><br>
						
							<h4> Quantidade de amostras do relatório</h4><br>
								<p>A quantidade de amostras informadas: <?php echo "<strong> $n </strong>" ?> unidades.</p><br>

							<h4>Condição de preparo</h4><br>
								<p>Condição de preparo informada: <?php echo "<strong> $CP </strong>" ?> </p><br>
							
							<h4>Amostras</h4><br>
								<?php
									for($z = 1; $z <= $n; $z++){
										echo "&nbsp &nbsp<strong>Amostra $z: </strong>&nbsp $amostra[$z];<br>";
									}
								?>
						<br>
						<h3>Método de Cálculo da resistência</h3><br>

						<p>Resistencia característica: <?php echo "<strong>$fckest</strong>" ?> MPa</p><br>

							<h4>Controle estatístico do concreto por amostragem parcial</h4><br>

								<p>Para lotes com números de exemplares 6 ≤ n < 20, o valor estimado da resistência característica à compressão (fck,est), na idade especificada, é dado por:</p>
									<img src="images/fck-01.PNG" style="height:60px;"><br>
									<p>Onde :</p>
									<p><strong>m</strong>&nbsp &nbsp------------- é igual a n/2. Despreza-se o valor mais alto de n, se for ímpar.</p>
									<p><strong>n</strong>&nbsp &nbsp ------------- é quantidade de amostras.</p>
									<p><strong>f1, f2, ... , fn</strong>&nbsp ----- são os valores das resistências dos exemplares, em ordem crescente.</p><br>

								<p>Para lotes representados por amostra com número de exemplares n ≥ 20:</P><br>
									<img src="images/fck-02.PNG" style="height:50px;"><br><br>
									<p>Sendo :</p><br>
									<img src="images/fck-03.PNG" alt="CTT" style="height:100px;"><br>
									<p>Onde :</p>
									<p><strong>Fcm</strong>&nbsp &nbsp------------- é a resistência média dos exemplares do lote, expressa em megapascals (MPa).</p>
									<p><strong>Sd</strong>&nbsp &nbsp--------------- é o desvio padrão dessa amostra de n exemplares, expresso em megapascals (MPa).</p><br>

								<p>Nos casos de concreto produzido por betonadas de pequeno volume e sempre que o número total de betonadas (lote) seja superior ao de exemplares da amostra que representa esse lote, ou seja, trate-se de amostragem parcial, pode-se dividir a estrutura em lotes correspondentes a no máximo 10 m³ e amostrá-los com número de exemplares entre 2 e 5. Nestes casos, denominados excepcionais, o valor estimado da resistência característica é dado por:</P><br>
									<img src="images/fck-04.PNG" style="height:40px;"><br><br>
									<p>Onde :</p>
									<strong>Ψ6</strong>&nbsp &nbsp------------- é dado pela Tabela 8 da NBR 12655 mostrada abaixo, para os números de exemplares de 2 a 5.</p><br>
									<center><img src="images/fck-05.PNG" alt="CTT" style="height:170px;"><br></center>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12 p-t-imp">
			<center>
		        <div class="row">
	                <div class="copyright">
	                    <p>
	                    A CoreTec Tools® somente processa e filtra os dados com o intuito de fornecer o traço, a responsabilidade da conferência dos mesmos incluído o processo de cálculo é do usuário.
	                	</p>
	                </div>
		        </div>
		    </center>
		    <div class="row">
		      <hr class="style1-grey">
		      <hr class="style1-black">
		    </div>
		    <center>
		        <p>Copyright © 2019 CoreTec Tools®. Todos os Direitos Reservados.</p>
		        <small>Um projeto UFG Catalão</small>
		    </center>
		</div>
		
		<!-- Jquery JS-->
		<script src="vendor/jquery-3.2.1.min.js"></script>
		<!-- Bootstrap JS-->
		<script src="vendor/bootstrap-4.1/popper.min.js"></script>
		<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
		<!-- Vendor JS       -->
		<script src="vendor/slick/slick.min.js">
		</script>
		<script src="vendor/wow/wow.min.js"></script>
		<script src="vendor/animsition/animsition.min.js"></script>
		<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
		</script>
		<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
		<script src="vendor/counter-up/jquery.counterup.min.js">
		</script>
		<script src="vendor/circle-progress/circle-progress.min.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
		<script src="vendor/chartjs/Chart.bundle.min.js"></script>
		<script src="vendor/select2/select2.min.js">
		</script>

		<!-- Main JS-->
		<script src="js/main.js"></script>
		<!-- end document-->
	</body>
</html>