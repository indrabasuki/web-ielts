<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IELTS AdminPanel | <?= $title ?></title>

    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>public/favicon.ico" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>public/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/daterangepicker/daterangepicker.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- jQuery -->
    <script src="<?= base_url() ?>public/plugins/jquery/jquery.min.js"></script>


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand  navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link " title="Full Screen" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-toggle="modal" data-target="#logoutModal" href="#" role="button" title="Logout">
                        <i class="fas fa-sign-in-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" title="IELTS AdminPanel" class="brand-link">
                <img src="<?= base_url('public/img/logo.jpeg') ?>" width="50" alt="Golden Logo" class="brand-image">
                <span class="brand-text font-weight-light">IELTS AdminPanel</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url() ?>public/img/user.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" title="<?= $this->session->userdata('name') ?>" class="d-block"><?= $this->session->userdata('name') ?></a>
                        <p class="text-white">Administrator</p>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


                        <li class="nav-item">
                            <a title="Dashboard" href="<?= base_url('administrator/dashboard') ?>" class="nav-link <?= ($this->uri->uri_string() === 'administrator/dashboard') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard

                                </p>
                            </a>
                        </li>

                        <li class="nav-header mt-2">Data Master</li>

                        <li class="nav-item">
                            <a title="Data Member" href="<?= base_url('administrator/member') ?>" class="nav-link <?= ($this->uri->uri_string() === 'administrator/member' || $this->uri->uri_string() === 'administrator/member/new' || $this->uri->uri_string() === 'administrator/member/active') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Data Member
                                    <span class="right badge bg-gradient-warning"><?php echo $this->db->get_where('user', ['role' => 2, 'is_active' => 0, 'create_at' => date('Y-m-d')])->num_rows() ?></span>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a title="Exam Data" href="<?= base_url('administrator/exam') ?>" class="nav-link <?= ($this->uri->segment(2) == 'exam') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-folder-open"></i>
                                <p>
                                    Exam Data
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a title="Data Administrator" href="<?= base_url('administrator/question') ?>" class="nav-link <?= ($this->uri->uri_string() === 'administrator/question') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-folder"></i>
                                <p>
                                    Data Soal
                                </p>
                            </a>
                        </li>
                        <li class="nav-header mt-2">Management Test</li>

                        <li class="nav-item">
                            <a title="Data Administrator" href="<?= base_url('administrator/score') ?>" class="nav-link <?= ($this->uri->uri_string() === 'administrator/score') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-eye"></i>
                                <p>
                                    Data Score Tes
                                </p>
                            </a>
                        </li>


                        <li class="nav-header mt-2">Settings</li>

                        <li class="nav-item">
                            <a title="Data Administrator" href="<?= base_url('administrator/user') ?>" class="nav-link <?= ($this->uri->uri_string() === 'administrator/user') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-user-cog"></i>
                                <p>
                                    Administrator
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a title="Data Administrator" href="<?= base_url('administrator/user/change_password') ?>" class="nav-link <?= ($this->uri->uri_string() === 'administrator/user/change_password') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-key"></i>
                                <p>
                                    Ganti Password
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a title="Logout" href="#" class="nav-link" data-toggle="modal" data-target="#logoutModal">
                                <i class="nav-icon fas fa-sign-in-alt"></i>
                                <p>
                                    Logout
                                    <span class="badge badge-danger">OFF</span>
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
                                <li class="breadcrumb-item"><a href="<?= base_url('administrator/dashboard') ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active"><?= $title ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <?= $content ?>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong title="IELTS AdminPanel Golden English ">IELTS AdminPanel Golden English - <?= date('Y') ?></strong>
            <div class="float-right d-none d-sm-inline-block">
                <b title="IELTS AdminPanel Golden English  Version 2.0">Version</b> 2.0
            </div>
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
                    <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">Cancel <i class="fas fa-window-close"></i></button>
                    <a class="btn btn-primary btn-sm" href="<?= base_url('authentication/logout') ?>">Logout <i class="fas fa-sign-in-alt"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url() ?>public/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url() ?>public/plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>public/js/adminlte.js"></script>
    <!-- sweetalert2 -->
    <script src="<?= base_url() ?>public/plugins/sweetalert2/sweetalert2.all.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".alert").fadeTo(2000, 500).slideUp(500, function() {
                $(".alert").alert('close');
            });
        });
        var base_url = '<?= base_url() ?>';
    </script>
</body>

</html>