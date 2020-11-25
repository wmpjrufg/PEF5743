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
            <?php
                #Definição dos valores do traço

                $c= $_POST['valor-cimento'];
                $a= $_POST['valor-areia'];
                $b= $_POST['valor-brita'];
                $ac= $_POST['relacao-ac'];
                $mec = $_POST['especifica-cimento'];
                $mea = $_POST['especifica-areia'];
                $meb = $_POST['especifica-brita'];
                $mew= $_POST['especifica-agua'];

                $reply="P";


                if ($reply=="P" || $reply=="p") {

                $lp= $_POST['largura'];

                $pp= $_POST['profundidade'];

                $hp= $_POST['altura'];
                
                $vp=($lp*$pp*$hp)*pow(10,-6);

                $cp=$vp*$mec;
                $ap=$vp*$mea;
                $bp=$vp*$meb;
                $acp=$vp*$mew;

                $cc=$c*$cp;
                $aa=$a*$cp;
                $bb=$b*$cp;
                $aacc=$ac*$cp;

                $cc1=$cc/$cp;
                $cc1=round($cc1,2);

                $aa1=$aa/$ap;
                $aa1=round($aa1,2);

                $bb1=$bb/$bp;
                $bb1=round($bb1,2);


                $aacc1=$aacc/$acp;
                $aacc1=round($aacc1,2);
                }

            ?>

            <div class="container">
                <div class="col-md-12">
                <br>
                <h3>Propriedades dos materiais:</h3>
                    <p>Os dados a seguir foram fornecidos pelo usuário:</p><br>

                <h4>Cimento</h4>
                    <p>Massa específica do cimento: <?php echo "<strong> $mec kg/dm³</strong>"; ?> </p><br>

                <h4>Areia</h4>
                    <p>Massa específica da Areia: <?php echo "<strong> $mea kg/dm³</strong>"; ?> </p><br>

                <h4>Brita</h4>
                    <p>Massa específica da brita: <?php echo "<strong> $meb kg/dm³</strong>"; ?> </p><br>

                <h4>Água</h4>
                    <p>Massa específica da água: <?php echo "<strong> $mew kg/dm³</strong>"; ?> </p><br>

                <h3>Traço com volume:</h3>
                    <p> <?php echo "<strong> $cc1 : $aa1 : $bb1 : $aacc1 </strong>"; ?></p>

                </div>
            </div>
            
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </div>
  
    <div class="col-lg-12 p-t-imp">
        <center>
        <div class="row">
            <div class="copyright">
                <p>A CoreTec Tools® somente processa e filtra os dados com o intuito de fornecer o traço, a responsabilidade da conferência dos mesmos incluído o processo de cálculo é do usuário.</p>
            </div>
        </div>
        </center>
        <div class="row">
            <hr class="style1-grey"><hr class="style1-black">
        </div>
        <center>
            <p>Copyright © 2019 CoreTec Tools®. All rights reserved.</p>
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