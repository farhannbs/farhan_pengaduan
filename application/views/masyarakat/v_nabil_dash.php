
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Lapor</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pengaduan ?></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Proses</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $proses ?></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Selesai
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $selesai ?></div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="d-flex flex-md-row justify-content-around align-items-center">

        <div class="rounded p-lg-2 p-1" id="blue-background">
            <div class="d-flex flex-md-row align-items-center ">
                <p class="text-dark text-center text-bold">Selamat datang <?= $masyarakat['nama_lengkap'] ?> di website NGADUIN, website NGADUIN ini akan membantu <?= $masyarakat['nama_lengkap'] ?> dalam melaporkan peristiwa atau kejadian yang ada di sekitar <?= $masyarakat['nama_lengkap'] ?>. <br>Sampaikan laporan <?= $masyarakat['nama_lengkap'] ?> langsung kepada instansi pemerintah yang berwenang</p>

            </div>
        </div>
    </div>
    <div class="tab-content w-100 pt-md-0">
        <div class="tab-pane show active" id="user" role="tabpanel" aria-labelledby="user-tab">
            <div class="container rounded-bottom bg-light">
                <div class="row pl-lg-5 pt-md-0 pt-sm-2">
                    <div class="col-md-6 py-md-4">
                        <div class="d-flex flex-row justify-content-start align-items-center pt-md-4 pb-md-3 pt-sm-2 border-bottom timeline">
                            <div class="p-md-2 pl-sm-2 mt-sm-1 font-weight-bold">Cara mengadukan laporan</div>
                            <div class="p-md-2 pt-sm-1 p-2 ml-auto border rounded text-muted bg-white">07 Apr-07 Jul 2019<span class="fa fa-calendar-o pl-sm-1 pl-1"></span></div>
                        </div>
                        <div class="d-flex flex-row pt-5 ml-md-0 ml-sm-5">
                            <div class="d-flex flex-column text-muted mr-md-3 dates">
                                <div class="align-items-center mb-5">1</div>
                                <div class="align-items-center my-5">2</div>
                                <div class="align-items-center mt-4 pt-3">3</div>
                            </div>
                            <div class="progress vertical-progress">
                                <div id="dot1"></div>
                                <div id="dot2"></div>
                                <div id="dot3"></div>
                                <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex flex-column border bg-white ml-md-5 p-sm-0 p-1" id="status1">
                                <div id="arrow"></div>
                                <div class="text-dark font-weight-bold pl-sm-2">Autentikasi</div>
                                <div class=" pl-sm-2">Login atau mendaftar akun</div>
                            </div>
                            <div class="d-flex flex-column border bg-primary ml-md-5 p-sm-0 p-1" id="status2">
                                <div id="bluearrow"></div>
                                <div class="text-white font-weight-bold pl-sm-2">Pengaduan</div>
                                <p class="text-white pl-sm-2">Buka pengaduan dan masukan data</p>
                            </div>
                            <div class="d-flex flex-column border bg-white ml-md-5 p-sm-0 p-1" id="status3">
                                <div id="arrow"></div>
                                <div class="text-dark font-weight-bold pl-md-2 pl-sm-2">Hasil</div>
                                <div class="pl-md-2 pl-sm-2 font-weight-bold" id="task">Tunggu sampai selesai</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pt-md-5 mt-5">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-3 text-center">Profile
                                </div>
                                <div class="row no-gutters align-items-center justify-content-center">
                                    <a href="<?= base_url('profile_masyarakat') ?>"> 
                                    <img src="<?= base_url('assets/img/undraw_profile.svg') ?>" alt="Generic placeholder image" class="img-fluid" style="width: 180px; border-radius: 10px;" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
        <span>&copy; Farhan UKK Website Pengaduan 2023</span>        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModalmasyarakat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>