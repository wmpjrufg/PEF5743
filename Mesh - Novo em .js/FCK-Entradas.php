<!DOCTYPE html>
<html>
<head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Um projeto UFG - Catalão">
        <link rel="shortcut icon" href="images/icon/logo-claro.png" sizes="35x35" type="image/png">

        <!-- Title Page-->
        <title>Fck</title>

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

        <style type="text/css">/* Chart.js */
            @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}
            @keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}
            .chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
        </style>
        <style type="text/css">/* Chart.js */
            @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
        </style>
</head>

<body class="animsition" style="animation-duration: 900ms; opacity: 1; background-color: #f7f7f7;">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile" style="display: none;">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="ABCP-form.php"><i class="fas fa-superscript"></i>ABCP</a>
                        </li>
                        <li>
                            <a href="FCK-form.php"><i class="fas fa-superscript"></i>Fck</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-superscript"></i>Consumo <i class="fas fa-angle-down"></i>
                            </a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list" style="display: none;">
                                <li>
                                    <a href="VOLUME-form.php">Volume</a>
                                </li>
                                <li>
                                    <a href="PADIOLA-form.php">Padiola</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END OF - HEADER MOBILE-->
        <!-- PAGE CONTENT-->
        <div class="page-container3">
            <header class="header-desktop4 p-b-30">
                <div class="container p-t-20">
                    <center><h1>Dosagem Fck</h1></center>
                </div>
            </header>
            <section class="p-t-50"></section>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <!-- MENU SIDEBAR-->
                            <aside class="menu-sidebar2">
                                <div class="menu-sidebar2__content js-scrollbar1 ps">
                                    <div class="account2">
                                        <img src="images/icon/logo-blue.png" alt="CTT" style="width:60px;height:60px;">
                                        <h4>Coretec Tools</h4>
                                    </div>
                                    <nav class="navbar-sidebar2">
                                        <ul class="list-unstyled navbar__list">
                                            <li>
                                                <a href="ABCP-form.php"><i class="fas fa-superscript"></i>ABCP</a>
                                            </li>
                                            <li>
                                                <a href="FCK-form.php"><i class="fas fa-superscript"></i>Fck</a>
                                            </li>
                                            <li class="has-sub">
                                                <a class="js-arrow" href="#">
                                                    <i class="fas fa-superscript"></i>Consumo
                                                    <span class="arrow">
                                                        <i class="fas fa-angle-down"></i>
                                                    </span>
                                                </a>
                                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                <li>
                                                        <a href="PADIOLA-form.php">
                                                            <i class="fas fa-superscript"></i>Padiola</a>
                                                    </li>
                                                    <li>
                                                        <a href="VOLUME-form.php">
                                                            <i class="fas fa-superscript"></i>Volume</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </aside>
                        </div>
                        <!-- PAGE CONTENT-->
                        <div class="page-content col-xl-9">
                            <form method="post" action="FCK.php">
                                <div class="col-lg-12">
                                    <div>
                                            <div class="card border border-secondary">
                                                <div class="card-header">
                                                    <strong class="card-title">
                                                        Desvio
                                                    </strong>
                                                    <br><small>Definição do valor de Sd</small>
                                                </div>
                                                <div>
                                                    <table class="table table-bordered" id="tdesvio" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Sd</th>
                                                                <th>Condição</th>
                                                                <th>Classe</th>
                                                                <th><div class="col"><center><i class="fa fa-caret-down"></i></center></div></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>4,0</td>
                                                                <td><center><button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#A">A</button></center></td>
                                                                <td>Todas as Classes</td>
                                                                <td><center><input min="1" type="radio" name="valor-sd" id="valor-sd-A-id" value="A"></center></td>
                                                            </tr>
                                                            <tr>
                                                                <td>5,5</td>
                                                                <td><center><button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#B">B</button></center></td>
                                                                <td>C10 a C25</td>
                                                                <td><center><input min="1" type="radio" name="valor-sd" id="valor-sd-B-id" value="B"></center></td>
                                                            </tr>
                                                            <tr>
                                                                <td>7,0</td>
                                                                <td><center><button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#C">C</button></center></td>
                                                                <td>C10 a C15</td>
                                                                <td><center><input min="1" type="radio" name="valor-sd" id="valor-sd-C-id" value="C"></center></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>  
                                        </div>
                                        <div class="modal fade" id="A" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-m" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="smallmodalLabel">C10 a C80</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p align="justify">
                                                            O cimento e os agregados são medidos em massa, a água de amassamento é medida em massa ou volume com dispositivo dosador e corrigida em função da umidade dos agregados;
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="B" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-m" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="smallmodalLabel">C10 a C25</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p align="justify">
                                                            O cimento é medido em massa, a água de amassamento é medida em volume mediante dispositivo dosador e os agregados medidos em massa combinada com volume;
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="C" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-m" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="smallmodalLabel">C10 a C15</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p align="justify">
                                                            O cimento é medido em massa, os agregados são medidos em volume, a água de amassamento é medida em volume e a sua quantidade é corrigida em função da estimativa da umidade dos agregados da determinação da consistência do concreto
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="card border border-secondary">
                                        <div class="card-header">
                                            <strong class="card-title">Entradas</strong>
                                        </div>
                                        <div class="card-body">
                                            <div class="row form-group">
                                                <?php
                                                    $qnt = $_POST['amostra'];
                                                    for ($i = 1; $i <= $qnt; $i++) {
                                                        echo <<<END
                                                            <div class="col-lg-12">
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3">
                                                                        <label for="number-input" class=" form-control-label"><strong>Amostra $i:</strong></label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <input type="number" min="1" step="any" name="a$i" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        END;
                                                    }
                                                    for ($m = $qnt + 1; $m <= 40; $m++) {
                                                        echo <<<END
                                                            <div hidden class="col-lg-12">
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3">
                                                                        <label  for="number-input" class=" form-control-label"><strong>Amostra $m:</strong></label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <input type="number" class="form-control" value="0" name="a$m">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        END;
                                                    }
                                                    $i = $i-1;
                                                    echo <<<END
                                                        <input hidden type="number" class="form-control" value="$i" name="qnt">
                                                    END;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <center>
                                        <button type="submit" class="btn btn-secondary mb-1">Gerar Relatório</button>
                                    </center>
                                    <br>
                                </div>
                            </form>
                            <div class="copyrightFck">
                                <center>
                                    <p>Copyright © 2019 CoreTecTools. All rights reserved.</p>
                                        <small> Um projeto UFG Catalão</small>
                                </center>
                            </div>
                            <!-- end of - Cáculo da Dosagem-->
                        </div><!-- end of - PAGE CONTENT-->
                    </div>
                </div>
            </div>
        </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
<!-- end document-->

</body>
</html>