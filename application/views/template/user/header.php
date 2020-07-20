<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>StartUI - Premium Bootstrap 4 Admin Dashboard Template</title>


    <!-- menampilkan assets -->

    <link href=<?= base_url('assets/img/favicon.144x144.png') ?> rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href=<?= base_url('assets/img/favicon.114x114.png') ?> rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href=<?= base_url('assets/img/favicon.72x72.png') ?> rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href=<?= base_url('assets/img/favicon.57x57.png') ?> rel="apple-touch-icon" type="image/png">
    <link href=<?= base_url('assets/img/favicon.png') ?> rel="icon" type="image/png">
    <link href=<?= base_url('assets/img/favicon.ico') ?> rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <link rel="stylesheet" href=<?= base_url("assets/build/css/lib/font-awesome/font-awesome.min.css") ?>>
    <link rel="stylesheet" href=<?= base_url("assets/build/css/lib/bootstrap/bootstrap.min.css") ?>>
    <link rel="stylesheet" href=<?= base_url("assets/build/css/main.css") ?>>



    <link rel="stylesheet" href=<?= base_url("assets/majatekno/dataTables.bootstrap4.min.css") ?>>


</head>

<body class="with-side-menu">

    <header class="site-header">
        <div class="container-fluid">
            <a href="<?= base_url('user') ?>" class="site-logo">
                <img class="hidden-md-down" src="<?= base_url('assets/logo-kominfo.png') ?>" alt="">
                <img class="hidden-lg-down" src="<?= base_url('assets/logo-kominfo.png') ?>" alt="">
            </a>
            <!-- <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
                <span>toggle menu</span>
            </button> -->

            <button class="hamburger hamburger--htla">
                <span>toggle menu</span>
            </button>

            <button type="button" class="burger-right">
                <i class="font-icon-menu-addl"></i>
            </button>

            <!--.site-header-shown-->

            <!--site-header-content-in-->
        </div>
        <!--.site-header-content-->
        </div>
        <!--.container-fluid-->
    </header>
    <!--.site-header-->

    <div class="mobile-menu-left-overlay"></div>
    <nav class="side-menu">
        <ul class="side-menu-list">

            <li class="grey with-sub">
                <span>
                    <i class="font-icon font-icon-dashboard"></i>
                    <span class="lbl">Menu Berita</span>
                </span>
                <ul>
                    <li><a href="<?= base_url('user/tabel') ?>"><span class="lbl">Data Berita</span></a></li>
                    <li><a href="<?= base_url('user/input') ?>"><span class="lbl">Tambah Berita</span></a></li>
                </ul>
            </li>

            <hr>
            <a class="dropdown-item" href="<?= base_url('auth/keluar') ?>"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
        </ul>
    </nav>
    <!--.side-menu-->


    <!--.page-content-->