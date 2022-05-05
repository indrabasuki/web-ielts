<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ILETS Golden English | <?= $title ?></title>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>public/favicon.ico" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>public/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <style>
        .bg-gradient-1 {
            background: #7f7fd5;
            background: -webkit-linear-gradient(to right, #7f7fd5, #86a8e7, #91eae4);
            background: linear-gradient(to right, #7f7fd5, #86a8e7, #91eae4);
        }

        .bg-gradient-2 {
            background: #654ea3;
            background: -webkit-linear-gradient(to right, #654ea3, #eaafc8);
            background: linear-gradient(to right, #654ea3, #eaafc8);
        }

        .bg-gradient-3 {
            background: #ff416c;
            background: -webkit-linear-gradient(to right, #ff416c, #ff4b2b);
            background: linear-gradient(to right, #ff416c, #ff4b2b);
        }

        .bg-gradient-4 {
            background: #007991;
            background: -webkit-linear-gradient(to right, #007991, #78ffd6);
            background: linear-gradient(to right, #007991, #78ffd6);
        }

        .rounded {
            border-radius: 1rem !important;
        }
    </style>
    <!-- jQuery -->
    <script src="<?= base_url() ?>public/plugins/jquery/jquery.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#logoutModal" title="Logout" href="#" role="button">
                        <i class="fas fa-sign-in-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-1">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="<?= base_url('public/img/logo.jpeg') ?>" alt="Golden Eglish Logo" class="brand-image" title="ILETS Golden English">
                <sup class="font-weight-light"><strong title="ILETS Golden English">ILETS Golden English</strong> </sup>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('public/img/user.png') ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block" title="<?= $this->session->userdata('email') ?>"><?= $this->session->userdata('name') ?> </a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard') ?>" title="Dashboard" class="nav-link <?= ($this->uri->segment(1) == 'dashboard') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('exam') ?>" title="Test ILETS" class="nav-link <?= ($this->uri->segment(1) == 'exam') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Test ILETS
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('certificate') ?>" title="Help and Support" class="nav-link <?= ($this->uri->segment(1) == 'certificate') ? 'active' : '' ?>">
                                <i class="nav-icon  fas fa-address-card"></i>
                                <p>
                                    Certificate
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('help') ?>" title="Help and Support" class="nav-link <?= ($this->uri->segment(1) == 'help') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-question"></i>
                                <p>
                                    Help and Support
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a data-toggle="modal" data-target="#logoutModal" href="<?= base_url('dashboard') ?>" title="Dashboard" class="nav-link">
                                <i class="nav-icon fas fa-power-off"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $title ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active"><?= $title ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <?= $content ?>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer ">
            <strong class="text-center">ILETS Golden English <?= date('Y') ?></strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Do you want to logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Click "Logout" finish the session</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel <i class="fas fa-window-close"></i></button>
                    <a class="btn btn-primary" href="<?= base_url('authentication/logout') ?>">Logout <i class="fas fa-sign-in-alt"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- REQUIRED SCRIPTS -->

    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>public/js/adminlte.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        var base_url = '<?= base_url() ?>';
        $(document).ready(function() {
            $(".alert").fadeTo(2000, 500).slideUp(500, function() {
                $(".alert").alert('close');
            });
        });
    </script>
</body>

</html>