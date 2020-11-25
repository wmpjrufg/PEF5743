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
			<center><h2>Relatório de Dosagem ABCP</h2></center>
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
					$dmax = $_POST['agregado-graudo'];
					$st = $_POST['abatimento'];
					$vst = $_POST['variacao'];
					$fck = $_POST['fck'];
					$sd = $_POST['valor-sd'];
					$mec = $_POST['especifica-cimento'];
					$mea = $_POST['especifica-areia'];
					$meb = $_POST['especifica-brita'];
					$muc = $_POST['unitaria-cimento'];
					$mua = $_POST['unitaria-areia'];
					$mub = $_POST['unitaria-brita'];
					$mf = $_POST['finura'];
						$mf = round ($mf,2);
					$ua = $_POST['umidade'];
					$ci = $_POST['inchamento'];
					$fcj = $fck +1.65*$sd;
						$fcj = round ($fcj,1);

							#determinção fator água cimento 

					if ($fck==26) {$ac=log($fcj/99.375,exp(1))/-2.616;}
					elseif ($fck==29) {$ac=log($fcj/108.44,exp(1))/-2.608;}
					elseif ($fck==32) {$ac=log($fcj/120.01,exp(1))/-2.635;}
					elseif ($fck==35) {$ac=log($fcj/131.32,exp(1))/-2.662;}
					elseif ($fck==38) {$ac=log($fcj/146.06,exp(1))/-2.71;}
					elseif ($fck==41) {$ac=log($fcj/152.07,exp(1))/-2.67;}
					elseif ($fck==44) {$ac=log($fcj/152.96,exp(1))/-2.65;}

					$ac=round($ac,2);

							#determinação da agua estimada por metro cúbico (m³) de concreto (Cw)
					
					$cw = 0;
					$vag = 0;


					if ($dmax==9.5 && $st<=60 && $st>=40) {$cw=220;}
					elseif ($dmax==9.5 && $st<=80 && $st>60) {$cw=225;}
					elseif ($dmax==9.5 && $st<=100 && $st>80) {$cw=230;}

					if ($dmax==19 && $st<=60 && $st>=40) {$cw=195;}
					elseif ($dmax==19 && $st<=80 && $st>60) {$cw=200;}
					elseif ($dmax==19 && $st<=100 && $st>80) {$cw=205;}

					if ($dmax==25 && $st<=60 && $st>=40) {$cw=190;}
					elseif ($dmax==25 && $st<=80 && $st>60) {$cw=195;}
					elseif ($dmax==25 && $st<=100 && $st>80) {$cw=200;}

					if ($dmax==32 && $st<=60 && $st>=40) {$cw=180;}
					elseif ($dmax==32 && $st<=80 && $st>60) {$cw=185;}
					elseif ($dmax==32 && $st<=100 && $st>80) {$cw=190;}

							#determinação do consumo de cimento por metro cúbico (kg/m³) de concreto (Cc)

					$cc = $cw/$ac;
					$cc = round ($cc,2);

							#retirada do valor volume de brita da tabela

					if ($dmax==9.5 && $mf<=1.8) {$vag=645;}
					elseif ($dmax==9.5 && $mf<=2.0 && $mf>1.8) {$vag=625;}
					elseif ($dmax==9.5 && $mf<=2.2 && $mf>2.0) {$vag=605;}
					elseif ($dmax==9.5 && $mf<=2.4 && $mf>2.2) {$vag=585;}
					elseif ($dmax==9.5 && $mf<=2.6 && $mf>2.4) {$vag=565;}
					elseif ($dmax==9.5 && $mf<=2.8 && $mf>2.6) {$vag=545;}
					elseif ($dmax==9.5 && $mf<=3.0 && $mf>2.8) {$vag=525;}
					elseif ($dmax==9.5 && $mf<=3.2 && $mf>3.0) {$vag=505;}
					elseif ($dmax==9.5 && $mf<=3.4 && $mf>3.2) {$vag=485;}
					elseif ($dmax==9.5 && $mf<=3.6 && $mf>3.4) {$vag=465;}

					if ($dmax==19 && $mf<=1.8) {$vag=770;}
					elseif ($dmax==19 && $mf<=2.0 && $mf>1.8) {$vag=750;}
					elseif ($dmax==19 && $mf<=2.2 && $mf>2.0) {$vag=730;}
					elseif ($dmax==19 && $mf<=2.4 && $mf>2.2) {$vag=710;}
					elseif ($dmax==19 && $mf<=2.6 && $mf>2.4) {$vag=690;}
					elseif ($dmax==19 && $mf<=2.8 && $mf>2.6) {$vag=670;}
					elseif ($dmax==19 && $mf<=3.0 && $mf>2.8) {$vag=650;}
					elseif ($dmax==19 && $mf<=3.2 && $mf>3.0) {$vag=630;}
					elseif ($dmax==19 && $mf<=3.4 && $mf>3.2) {$vag=610;}
					elseif ($dmax==19 && $mf<=3.6 && $mf>3.4) {$vag=590;}

					if ($dmax==25 && $mf<=1.8) {$vag=795;}
					elseif ($dmax==25 && $mf<=2.0 && $mf>1.8) {$vag=775;}
					elseif ($dmax==25 && $mf<=2.2 && $mf>2.0) {$vag=755;}
					elseif ($dmax==25 && $mf<=2.4 && $mf>2.2) {$vag=735;}
					elseif ($dmax==25 && $mf<=2.6 && $mf>2.4) {$vag=715;}
					elseif ($dmax==25 && $mf<=2.8 && $mf>2.6) {$vag=695;}
					elseif ($dmax==25 && $mf<=3.0 && $mf>2.8) {$vag=675;}
					elseif ($dmax==25 && $mf<=3.2 && $mf>3.0) {$vag=655;}
					elseif ($dmax==25 && $mf<=3.4 && $mf>3.2) {$vag=635;}
					elseif ($dmax==25 && $mf<=3.6 && $mf>3.4) {$vag=615;}

					if ($dmax==32 && $mf<=1.8) {$vag=820;}
					elseif ($dmax==32 && $mf<=2.0 && $mf>1.8) {$vag=800;}
					elseif ($dmax==32 && $mf<=2.2 && $mf>2.0) {$vag=780;}
					elseif ($dmax==32 && $mf<=2.4 && $mf>2.2) {$vag=760;}
					elseif ($dmax==32 && $mf<=2.6 && $mf>2.4) {$vag=740;}
					elseif ($dmax==32 && $mf<=2.8 && $mf>2.6) {$vag=720;}
					elseif ($dmax==32 && $mf<=3.0 && $mf>2.8) {$vag=700;}
					elseif ($dmax==32 && $mf<=3.2 && $mf>3.0) {$vag=680;}
					elseif ($dmax==32 && $mf<=3.4 && $mf>3.2) {$vag=660;}
					elseif ($dmax==32 && $mf<=3.6 && $mf>3.4) {$vag=640;}

					$cb = $vag*$mub;
					$cb = round ($cb,2);
					$va = 1000 - ($cc/$mec+$cb/$meb+$cw);
					$va = round ($va,2);
					$ca = $va*$mea;
					$ca = round($ca,2);
					$tc = $cc/$cc;
					$tc = round ($tc,2);
					$ta = $ca/$cc;
					$ta = round ($ta,2);
					$tb = $cb/$cc;
					$tb = round ($tb,2);
					$tw = $cw/$cc;
					$tw = round ($tw,2);
				?>
				<div class="row">
					<div class="col-md-6">
						<h3> Método ABCP</h3>
							<p>O seguinte relatório de cálculo é empregado a metodologia publicada pela Associação Brasileira de Cimento Portland (ABCP). Adaptado para o Cimento CP II E-32.</p><br>
						<h3>Propriedades dos materiais:</h3>
							<p>Os dados a seguir foram fornecidos pelo usuário.</p>
						<h4>Cimento</h4>
							<p>Massa específica do cimento: <?php echo "<strong> $mec kg/dm³</strong>"; ?> </p>
							<p>Massa unitária do cimento: <?php echo "<strong> $muc kg/dm³ </strong>"; ?> </p><br>
						<h4>Areia</h4>
							<p>Massa específica da Areia: <?php echo "<strong> $mea kg/dm³</strong>"; ?> </p>
							<p>Massa unitária da Areia: <?php echo "<strong> $mua kg/dm³ </strong>"; ?> </p>
							<p>Módulo de finura da areia: <?php echo "<strong> $mf </strong>"; ?> </p>
							<p>Umidade da areia: <?php echo "<strong> $ua % </strong>"; ?></p>
							<p>Coeficiente de inchamento da areia: <?php echo "<strong> $ci</strong>"; ?></p><br>
						<h4>Brita</h4>
							<p>Massa específica da brita: <?php echo "<strong> $meb kg/dm³</strong>"; ?> </p>
							<p>Massa unitária da brita: <?php echo "<strong> $mub kg/dm³ </strong>"; ?> </p>
							<p>Dimensão máxima do agregado graúdo: <?php echo "<strong> $dmax mm </strong>"; ?> </p><br>
						<h4>Concreto</h4>
							<p>Resistência característica do concreto a compressão aos 28 dias (fck): <?php echo "<strong> $fck MPa</strong>"; ?></p>
							<p>Abatimento do concreto (Slump Teste): <?php echo "<strong>$st ± $vst mm</strong>"; ?> </p>
							<p>Desvio padrão da resistência característica a compressão (Sd): <?php echo "<strong> $mub Mpa</strong>"; ?> </p><br>
						<h3>Procedimento de Cálculo</h3>
							<h4>Determinação da resistência de dosagem, segundo a NBR-6118.</h4>
								<center><img src="images/eq-01.jpg" alt="CTT" style="height:30px;"></center>
								<p>Resistencia de dosagem: <?php echo "<strong>$fcj MPa</strong>"; ?></p><br>
							<h4>Fixação do fator água/cimento.</h4>
								<p>Utilizando como critério a Curva de Abrams do cimento.</p>
								<p>Fator água cimento: <?php echo "<strong>$ac</strong>"; ?></p>
							<h4>Estimativa do consumo de água por metro cúbico de concreto. </h4>
								<p>Consumo de água: <?php echo "<strong>$cw l/m³</strong>"; ?></p>

					</div>
					<div class="col-md-6">
							<h4>Consumo do cimento por metro cúbico de concreto.</h4>
								<center><img src="images/eq-02.jpg" alt="CTT" style="height:55px;"></center>
								<p>Consumo de cimento: <?php echo "<strong>$cc kg/m³</strong>"; ?></p><br>
							<h4>Consumo de agregado graúdo.</h4>
								<p>Volume de agregado graúdo: <?php echo "<strong>$vag kg/dm³</strong>"; ?></p><br>
							<h4>Consumo de brita</h4>
								<center><img src="images/eq-03.jpg" alt="CTT" style="height:30px;"></center>
								<p>Consumo de brita: <?php echo "<strong>$cb kg/dm³</strong>"; ?></p><br>
							<h4>Consumo de agregado miúdo.</h4>
								<center><img src="images/eq-04.jpg" alt="CTT" style="height:50px;"></center>
								<p>Volume de agregado miúdo: <?php echo "<strong>$va dm³</strong>"; ?></p><br><br>
							<h4>Consumo de areia</h4>
								<center><img src="images/eq-05.jpg" alt="CTT" style="height:30px;"></center>
								<p>Consumo de areia: <?php echo "<strong>$ca kg/m³</strong>"; ?></p><br>
						<h3>Determinação do traço.</h3>
							<center><img src="images/eq-06.jpg" alt="CTT" style="height:50px;"></center>
							<h4>Traço Principal:</h4> <?php echo "<strong> $tc: $ta : $tb : $tw </strong>"; ?><br>
							<h4>Correção do traço em função da umidade da areia</h4>
								<center><img src="images/eq-07.jpg" alt="CTT" style="height:50px;"></center>
							<?php 
		                        if ($ua==0) {
		                        	echo "Não foi feita a correção do traço devido falta da umidade da areia.";
									echo"<br>";
								}
								elseif ($ua>0) {
								$tw1= $tw - ($ua)/100*$ta;
								$tw1 = round($tw1,2);
								$ta1= $ci*$ta;
								$ta1 = round($ta1,2);
								echo "<h4>Traço Corrigido:</h4> <strong> $tc: $ta1: $tb: $tw1</strong>";
								}
							 ?>
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