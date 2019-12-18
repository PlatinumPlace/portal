<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portal</title>

    <link href="lib/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="lib/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="lib/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="lib/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-text mx-3">Portal</div>
            </a>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Actividades
            </div>

            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=HomeController&action=crear_cotizacion">
                    <span>Nueva cotizacion</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=HomeController&action=mis_cotizaciones">
                    <span>Todas las cotizaciones</span></a>
            </li>

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">


                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                </nav>

                <div class="container-fluid">
                    <!-- Contenido de las vistas  -->
                    <?php require_once("core/router.php") ?>
                </div>
                <br>
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2019</span>
                        </div>
                    </div>
                </footer>


            </div>

        </div>

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>


        <script src="lib/vendor/jquery/jquery.min.js"></script>
        <script src="lib/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="lib/vendor/jquery-easing/jquery.easing.min.js"></script>

        <script src="lib/js/sb-admin-2.min.js"></script>

        <script src="lib/vendor/chart.js/Chart.min.js"></script>

        <script src="lib/js/demo/chart-area-demo.js"></script>
        <script src="lib/js/demo/chart-pie-demo.js"></script>
        <script src="lib/js/bootstrap.min.js"></script>


</body>

</html>
<?php
                    ob_end_flush();
?>