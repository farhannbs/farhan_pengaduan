<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrasi</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #EBEAEF;
        }

        .container {
            flex-wrap: wrap;
        }

        .card {
            border: none;
            border-radius: 10px;
            background-color: #4270C8;
            width: 500px;
            margin-top: -60px;
        }

        p.mb-1 {
            font-size: 25px;
            color: #9FB7FD;
        }

        .btn-primary {
            border: none;
            background: #5777DE;
            margin-bottom: 60px;
        }

        .btn-primary small {
            color: #9FB7FD;
        }

        .btn-primary span {
            font-size: 13px;
        }

        /***card-two****/
        .card.two {
            border-top-right-radius: 60px;
            border-top-left-radius: 0;
        }

        .form-group {
            position: relative;
            margin-bottom: 2rem;
        }

        .form-control {
            border: none;
            border-radius: 0;
            outline: 0;
            border-bottom: 1.5px solid #E6EBEE;
        }

        .form-control:focus {
            box-shadow: none;
            border-radius: 0;
            border-bottom: 2px solid #8A97A8;
        }

        .form-control-placeholder {
            position: absolute;
            top: 15px;
            left: 10px;
            transition: all 200ms;
            opacity: 0.5;
            font-size: 80%;
        }

        .form-control:focus+.form-control-placeholder,
        .form-control:valid+.form-control-placeholder {
            font-size: 80%;
            transform: translate3d(0, -90%, 0);
            opacity: 1;
            top: 10px;
            color: #8B92AC;
        }

        .btn-block {
            border: none;
            border-radius: 8px;
            background-color: #506CCF;
            padding: 10px 0 12px;
        }

        .btn-block:focus {
            box-shadow: none;
        }

        .btn-block span {
            font-size: 15px;
            color: #D0E6FF;
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="container d-flex justify-content-center">
            <div class="d-flex flex-column justify-content-between">
                <div class="card mt-3 p-5">
                    <div class="logo mb-3" style="color: white;"><i class="fas fa-regular fa-comments"></i></div>
                    <div>
                        <p class="mb-1">Aplikasi Pengaduan</p>
                        <h4 class="mb-5 text-white">Masyarakat</h4>
                    </div>
                    <a href="<?= base_url('login') ?>" class=" btn btn-primary btn-lg"><span>Kembali login<i class="fas fa-long-arrow-alt-right ml-2"></i></span>
                    </a>
                </div>
                <div class="card two bg-white px-5 py-4 mb-3">
                    <form class="user" method="post" action="<?= base_url('registrasi') ?>">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
                            <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="nik" name="nik" placeholder="NIK">
                            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="password" name="password1" placeholder="Password">
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="password" name="password2" placeholder="Current Password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="telepon" name="telepon" placeholder="Telepon">
                            <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block btn-lg mt-10 mb-2"><span>Daftar<i class="fas fa-long-arrow-alt-right ml-2"></i></span></button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>