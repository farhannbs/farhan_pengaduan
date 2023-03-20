<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="container d-flex justify-content-center align-items-center mt-5 mb-5">
        <div class="card">
            <div class="p-2">
                <div class="d-flex flex-row"> <img src="<?= base_url('assets/img/undraw_profile.svg') ?>" alt="Generic placeholder image" class="img-fluid" style="width: 100px; border-radius: 10px;" />
                    <div class="d-flex flex-column ml-2"> <span><?= $masyarakat['nama_lengkap'] ?></span> </div>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-between col-md-6">
                <div class="col-md-12">
                    <h6>NIK</h6>
                    <div class="form-control mb-3">

                        <?= $masyarakat['nik'] ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <h6>Nama User</h6>
                    <div class="form-control mb-3">

                        <?= $masyarakat['nama_lengkap'] ?>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-between col-md-6">
                <div class="col-md-12">
                    <h6>Username</h6>
                    <div class="form-control mb-3">

                        <?= $masyarakat['username'] ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <h6>Telepone</h6>
                    <div class="form-control mb-3">

                        <?= $masyarakat['telepon'] ?>
                    </div>
                </div>
            </div>
            <!-- <div class="mt-4 mb-3"> 
                <div class="mt-2 team-button d-flex justify-content-between px-3"> <button class="ml-auto btn btn-outline-primary" href="" data-toggle="modal" data-target="#editProfile<?= $masyarakat["id"] ?>">
                        Edit Profile
                    </button> </div>
            </div> -->
        </div>
    </div>
    <!-- Page Heading -->

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

<div class="modal fade" id="editProfile<?= $masyarakat["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Your Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('C_farhan_masyarakat/editProfile/'); ?>" method="post" enctype="multipart/form-data">
                <div class="pt-3 pl-3 pr-3 pb-3">
                    <div class="mb-3">
                        <h6>NIK</h6>
                        <input type="text" class="form-control" id="nik" name="nik" value="<?= $masyarakat['nik'] ?>" readonly>
                    </div>
                    <div class="mb-3 ">
                        <h6>Nama</h6>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $masyarakat['nama_lengkap'] ?>">
                    </div>
                    <div class="mb-3">
                        <h6>Username</h6>
                        <input class="form-control" id="username" name="username" value="<?= $masyarakat['username'] ?>">
                    </div>
                    <div class="mb-3">
                        <h6>Telepone</h6>
                        <input class="form-control" id="telepon" name="telepon" value="<?= $masyarakat['telepon'] ?>">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>