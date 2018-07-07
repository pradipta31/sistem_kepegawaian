<?php
ob_start();
// session_start();
include"koneksi.php";
if (isset($_SESSION['nip'])) {
    $nip=$_SESSION['nip'];
    $level=$_SESSION['level'];
    $nama_user=$_SESSION['nama_user'];
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Eksekutif Kepegawaian</title>
    <link rel="icon" type="image/x-icon" href="../img/xxx.png">
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../js/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../dist/css/bootstrap-datepicker3.css">

    <link rel="stylesheet" href="../dist/css/bootstrap-select.css">
    <link rel="stylesheet" href="../dist/css/bootstrap-select.min.css"/>
    <link href="../vendor/bootstrap-social/bootstrap-social.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Navigation</span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php" style=""><h3><b>SISTEM INFORMASI EKSEKUTIF KEPEGAWAIAN</b></h3></a>
                <ul class="nav navbar-top-links navbar-right">
                <br>
                <!-- /.dropdown -->
                <b> <?=$level?></b>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!-- <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Akun lain</a>
                        </li> -->
<!--                         <li class="divider"></li> -->
                        <li>
                            <a href="index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
        </nav>
        </div>
