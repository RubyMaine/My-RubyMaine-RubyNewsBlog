<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/images/logo/favicon.png" rel="icon">
    <link href="<?= base_url() ?>assets/profile/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Datatables -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/custom.css">
    <!-- Editor Form -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/summernote/summernote-bs4.min.css">
    <!-- gijgo datapicker -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/gijgo/css/gijgo.min.css">
    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap 5-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	<!-- Font Google -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a target="_blank" href="<?= base_url(); ?>" class="nav-link">
						<i class="fa fa-external-link" aria-hidden="true" style="color: white;"></i> Перейти на <b style="color: white;">"RubyNewsBlog"</b>
					</a>
				</li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
						<i class="bi bi-person-badge" style="color: white;"></i>
                        <span class="d-none d-md-inline"><?= userdata()->fullname; ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown">
                        <a href="<?= base_url('configuration/account'); ?>" class="dropdown-item">
							<i class="bi bi-person-bounding-box mr-2"></i> Мой аккаунт
                        </a>
                        <a href="<?= base_url('configuration/change_password'); ?>" class="dropdown-item">
							<i class="bi bi-lock-fill mr-2"></i> Изменить пароль
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#logoutModal" class="dropdown-item" data-toggle="modal" style="background-color: red;color: white;">
							Выйти из аккаунта <i class="bi bi-box-arrow-right mr-2"></i>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-cog"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary sidebar-no-expand">
            <!-- Brand Logo -->
            <a href="<?= base_url('dashboard') ?>" class="brand-link navbar-dark" style="text-decoration: none;">
                <img src="<?= base_url(); ?>assets/dist/img/adminlogo.png" alt="Logo" class="brand-image">
                <span class="brand-text text-white"> RubyNewsBlog </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                        <?php if (userdata()->role == "admin") : ?>
                            <li class="nav-header"><i class="bi bi-grid-fill"></i> Главное меню</li>
                            <li class="nav-item">
                                <a href="<?= base_url('dashboard'); ?>" class="nav-link <?= active_menu('dashboard'); ?>">
                                    <i class="nav-icon fas fa-tachometer-alt fa-fw"></i>
                                    <p> Панель — Управление </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('category'); ?>" class="nav-link <?= active_menu('category'); ?>">
                                    <i class="nav-icon fas fa-tags fa-fw"></i>
                                    <p> Группы & Категория </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('post/data'); ?>" class="nav-link <?= active_menu('post'); ?>">
                                    <i class="nav-icon fas fa-newspaper fa-fw"></i>
                                    <p> Посты & Новости </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('member'); ?>" class="nav-link <?= active_menu('member'); ?>">
                                    <i class="nav-icon fas fa-users fa-fw"></i>
                                    <p> Админ и Пользователи </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('comment'); ?>" class="nav-link <?= active_menu('comment'); ?>">
                                    <i class="nav-icon fas fa-comments fa-fw"></i>
                                    <p> Комментарии </p>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalTitle"><i class="fa fa-buysellads" aria-hidden="true"></i>дмин панель </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
						Вы точно хотите выходить?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="bi bi-x-square"></i> Нет </button>
                        <a href="<?= base_url('signout'); ?>" class="btn btn-success"><i class="bi bi-check2-square"></i> Да </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-7">
                            <h1 class="m-0"><i class="fa fa-buysellads" aria-hidden="true"></i>дмин панель — Административный контроль управление </h1>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
