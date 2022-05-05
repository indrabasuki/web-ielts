<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google" value="notranslate">
    <meta name="author" content="indrabasuki">

    <title>Golden English - Validasi</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>public/favicon.ico" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>public/css/adminlte.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/daterangepicker/daterangepicker.css">
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

<body id="page-top">

    <body class="hold-transition layout-top-nav">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
                <div class="container">
                    <a href="#" class="navbar-brand">
                        <img src="<?= base_url('public/img/logo.jpeg') ?>" alt="Golden Eglish Logo" class="brand-image" title="TOEFL Golden English">
                        <sup class="font-weight-light"><strong title="TOEFL Golden English">TOEFL Golden English</strong> </sup>
                    </a>

                </div>
            </nav>
            <!-- /.navbar -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <div class="content">
                    <div class="jumbotron jumbotron-fluid bg-gradient-1">
                        <div class="container text-center">
                            <h4 class="display-6 text-white">Informasi</h4>
                            <p class="lead text-white">Validasi data untuk mencocokkan bahwa peserta telah selesai mengikuti TOEFL TEST - Golden English</p>
                        </div>
                    </div>

                    <div class="container">
                        <div class="table-responsive px-4 pb-3" style="border: 0">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <td scope="col"><?= $item->name ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="col">Email</th>
                                        <td scope="col"><?= $item->email ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="col">LISTENING COMPREHENSION</th>
                                        <td scope="col"><strong><?= $item->nilai ?></strong> </td>
                                    </tr>

                                    <tr>
                                        <th scope="col">STRUCTURE AND WRITTEN EXPRESSIONS</th>
                                        <td scope="col"><strong><?= $item->nilai2 ?></strong> </td>
                                    </tr>

                                    <tr>
                                        <th scope="col">READING COMPREHENSION</th>
                                        <td scope="col"><strong><?= $item->nilai3 ?></strong></td>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                    </div>
                    <div class="container text-center">
                        <div class="row text-center">
                            <div class="col-md-12 text-center">
                                <div class="card text-center">
                                    <h5 class="card-header bg-gradient-3 text-white">Score TOEFL</h5>
                                    <div class="card-body">
                                        <h3 class="text-center"><?= $item->score ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?= base_url() ?>" class="btn btn-sm btn-secondary mb-1">Kembali</a>

                    </div>

                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->


            <footer class="main-footer ">
                <strong class="text-center">TOEFL Golden English <?= date('Y') ?></strong>
            </footer>
        </div>
        <!-- ./wrapper -->


        <!-- jQuery UI 1.11.4 -->
        <script src="<?= base_url() ?>public/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="<?= base_url() ?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url() ?>public/js/adminlte.js"></script>

    </body>

</html>