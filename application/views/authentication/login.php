<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IELTS Golden English | Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>public/favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>public/css/adminlte.min.css">
    <style>
        @media screen and (max-height: 575px) {

            #rc-imageselect,
            .g-recaptcha {
                transform: scale(0.77);
                -webkit-transform: scale(0.77);
                transform-origin: 0 0;
                -webkit-transform-origin: 0 0;
            }
        }

        body {
            width: 100%;
            height: 400px;
            background-image: url('<?= base_url() ?>public/img/bg.jpg');
            background-size: cover;
            opacity: 0.9;
        }
    </style>
    <!-- jQuery -->
    <script src="<?= base_url() ?>public/plugins/jquery/jquery.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <?= $this->session->flashdata('message') ?>
        <!-- /.login-logo -->
        <div class="card ">
            <div class="card-header text-center">
                <img src="<?= base_url('public/img/logo.jpeg') ?>" width="70" height="48" alt="Logo" class="mt-3 mb-2">
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to your account</p>

                <?= form_open('authentication') ?>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?= set_value('email') ?>" class="form-control" placeholder="Email">
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <?= $recaptcha ?>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Ingat Saya
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary btn-block">Sign In <i class="fas fa-sign-in-alt"></i></button>
                    </div>
                    <!-- /.col -->
                </div>
                <?= form_close() ?>

                <p class="mb-2 mt-4 text-center">
                    <a href="#" id="new_register" class="text-md">Don’t have any account? Sign up</a>
                </p>
                <hr>
                <marquee>IELTS Golden English <?= date('Y') ?></marquee>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->


    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>public/js/adminlte.min.js"></script>
    <script>
        var base_url = '<?= base_url() ?>';
        $(document).ready(function() {
            $(document).bind("contextmenu", function(e) {
                return false;
            });
            $('#new_register').click(function() {
                window.location.href = base_url + "authentication/register";
            });

            $(".alert").fadeTo(2000, 500).slideUp(500, function() {
                $(".alert").alert('close');
            });

        });
    </script>
</body>

</html>