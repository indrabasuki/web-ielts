<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IELTS Golden English | Register</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>public/favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
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

</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card">
            <div class="card-header text-center">
                <img src="<?= base_url('public/img/logo.jpeg') ?>" width="70" height="48" alt="Logo" class="mt-3 mb-2">
            </div>
            <div class="card-body">
                <h4 class="login-box-msg">CREATE AN ACCOUNT</h4>

                <?= form_open('authentication/register') ?>
                <div class="form-group">
                    <label for="">Full name:</label>
                    <input type="text" id="name" name="name" value="<?= set_value('name') ?>" class="form-control" placeholder="Full name">
                    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>

                </div>
                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control" placeholder="Email address">
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>

                </div>
                <div class="form-group">
                    <label for="">Phone number:</label>
                    <input type="number" name="phone" value="<?= set_value('phone') ?>" class="form-control" placeholder="Phone number">
                    <?= form_error('phone', '<small class="text-danger">', '</small>'); ?>

                </div>

                <div class="row">
                    <div class="col-12">
                        <button type="submit" title="Register" class="btn bg-gradient-primary btn-block">Register <i class="fas fa-sign-in-alt"></i></button>
                    </div>
                    <!-- /.col -->
                </div>
                <?= form_close() ?>



                <p class="mb-2 mt-4 text-center">
                    <a href="#" id="login_page" class="text-md">Have an account? Login</a>
                </p>
                <hr>
                <marquee>IELTS Golden English <?= date('Y') ?></marquee>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>public/js/adminlte.min.js"></script>
    <script>
        var base_url = '<?= base_url() ?>';
        $(document).ready(function() {
            $('#login_page').click(function() {
                window.location.href = base_url + "authentication";
            });

            $(".alert").fadeTo(2000, 500).slideUp(500, function() {
                $(".alert").alert('close');
            });

            $("#name").keyup(function() {
                $(this).val($(this).val().toUpperCase());
            });

            $(document).bind("contextmenu", function(e) {
                return false;
            });

        });
    </script>
</body>

</html>