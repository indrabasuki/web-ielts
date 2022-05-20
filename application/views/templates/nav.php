<!DOCTYPE html>
<html translate="no">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google" value="notranslate">
    <meta name="author" content="indrabasuki">

    <title>Golden English - <?= $title; ?></title>

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
        .disable-select {
            user-select: none;
            /* supported by Chrome and Opera */
            -webkit-user-select: none;
            /* Safari */
            -khtml-user-select: none;
            /* Konqueror HTML */
            -moz-user-select: none;
            /* Firefox */
            -ms-user-select: none;
            /* Internet Explorer/Edge */
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
                        <img src="<?= base_url('public/img/logo.jpeg') ?>" alt="Golden Eglish Logo" class="brand-image" title="IELTS Golden English">
                        <sup class="font-weight-light"><strong title="IELTS Golden English">IELTS Golden English</strong> </sup>
                    </a>

                    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                        <!-- Left navbar links -->
                        <ul class="navbar-nav">
                        </ul>
                    </div>

                    <!-- Right navbar links -->
                    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">


                        <li class="nav-item">
                            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                                <i class="fas fa-th-large"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- /.navbar -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <div class="content disable-select">

                    <?= $content ?>

                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->


            <footer class="main-footer ">
                <strong class="text-center">IELTS Golden English <?= date('Y') ?></strong>
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
        <!-- ChartJS -->
        <script src="<?= base_url() ?>public/plugins/chart.js/Chart.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url() ?>public/js/adminlte.js"></script>
        <!-- sweetalert2 -->
        <script src="<?= base_url() ?>public/plugins/sweetalert2/sweetalert2.all.min.js"></script>

        <script>
            // $(document).ready(function() {
            //     $(document).bind("contextmenu", function(e) {
            //         return false;
            //     });
            // });
        </script>
        <script type="text/javascript">
            var base_url = '<?= base_url() ?>';

            // function preventBack() {
            //     window.history.forward();
            // }
            // setTimeout("preventBack()", 0);
            // window.onunload = function() {
            //     null
            // };


            $(document).ready(function() {
                setInterval(function() {
                    var date = new Date();
                    var h = date.getHours(),
                        m = date.getMinutes(),
                        s = date.getSeconds();
                    h = ("0" + h).slice(-2);
                    m = ("0" + m).slice(-2);
                    s = ("0" + s).slice(-2);

                    var time = h + ":" + m + ":" + s;
                    $('.live-clock').html(time);
                }, 1000);

            });

            function sisawaktu(t) {
                var time = new Date(t);
                var n = new Date();
                var x = setInterval(function() {
                    var now = new Date().getTime();
                    var dis = time.getTime() - now;
                    var h = Math.floor((dis % (1000 * 60 * 60 * 60)) / (1000 * 60 * 60));
                    var m = Math.floor((dis % (1000 * 60 * 60)) / (1000 * 60));
                    var s = Math.floor((dis % (1000 * 60)) / (1000));
                    h = ("0" + h).slice(-2);
                    m = ("0" + m).slice(-2);
                    s = ("0" + s).slice(-2);
                    var cd = h + ":" + m + ":" + s;


                    $('.sisawaktu').html(cd);
                }, 100);
                setTimeout(function() {
                    waktuHabis();
                }, (time.getTime() - n.getTime()));
            }

            function countdown(t) {
                var time = new Date(t);
                var n = new Date();
                var x = setInterval(function() {
                    var now = new Date().getTime();
                    var dis = time.getTime() - now;
                    var d = Math.floor(dis / (1000 * 60 * 60 * 24));
                    var h = Math.floor((dis % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var m = Math.floor((dis % (1000 * 60 * 60)) / (1000 * 60));
                    var s = Math.floor((dis % (1000 * 60)) / (1000));
                    d = ("0" + d).slice(-2);
                    h = ("0" + h).slice(-2);
                    m = ("0" + m).slice(-2);
                    s = ("0" + s).slice(-2);
                    var cd = d + " Hari, " + h + " Jam, " + m + " Menit, " + s + " Detik ";
                    $('.countdown').html(cd);
                }, 1000);
            }
        </script>
    </body>

</html>