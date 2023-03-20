       <!-- Begin Page Content -->
       <div class="container-fluid">

           <!-- Page Heading -->

           <div class="row">

               <!-- pengaduan -->
               <div class="col-xl-4 col-md-6 mb-4">
                   <div class="card border-left-primary shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                       Laporan</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pengaduan ?></div>
                               </div>
                               <div class="col-auto">
                                   <i class="fas fa- fa-2x text-gray-300"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- proses -->
               <div class="col-xl-4 col-md-6 mb-4">
                   <div class="card border-left-warning shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                       Proses</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $proses ?></div>
                               </div>
                               <div class="col-auto">
                                   <i class="fas fa- fa-2x text-gray-300"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- selesai -->
               <div class="col-xl-4 col-md-6 mb-4">
                   <div class="card border-left-success shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Selesai
                                   </div>
                                   <div class="row no-gutters align-items-center">
                                       <div class="col-auto">
                                           <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $selesai ?></div>
                                       </div>

                                   </div>
                               </div>
                               <div class="col-auto">
                                   <i class="fas fa- fa-2x text-gray-300"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- Earnings (Monthly) Card Example -->
               <div class="col-xl-12 col-md-12 mb-4">
                   <div class="card shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <a href="<?= base_url('laporan_pdf'); ?>" class="col mr-2">
                                   <div class="text-center text-xs font-weight-bold text-danger text-uppercase mb-1">
                                       Laporan PDF</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                               </a>
                               <div class="col-auto">
                                   <i class="fas fa- fa-2x text-gray-300"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-md-12">
                   <div class="card shadow">
                       <div class="card-header">
                           <div class="card-title">Feed Activity</div>
                       </div>
                       <div class="card-body">
                           <div class="table-responsive">
                               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                   <thead>
                                       <tr>
                                           <th width='1%'>No</th>
                                           <th width='5%'>NIK</th>
                                           <th width='15%'>Tanggal Pengaduan</th>
                                           <th width='10%'>Kategori</th>
                                           <th width='15%'>Subkategori</th>
                                           <th width='20%'>Isi Laporan</th>

                                       </tr>
                                   </thead>
                                   <tbody>
                                       <?php
                                        $count = 0;

                                        foreach ($riwayatadmin as $ra) :
                                            $count = $count + 1;
                                        ?>

                                           <tr>
                                               <td><?= $count ?></td>
                                               <td><?= $ra['nik']  ?></td>
                                               <td><?= $ra['tgl_pengaduan']  ?></td>
                                               <td><?= $ra['kategori']  ?></td>
                                               <td><?= $ra['subkategori']  ?></td>
                                               <td><?= $ra['isi_laporan']  ?></td>
                                           </tr>
                                       <?php endforeach ?>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>

           </div>
       </div>

       </div>
       <!-- End of Main Content -->

       <!-- Footer -->
       <footer class="sticky-footer bg-white">
           <div class="container my-auto">
               <div class="copyright text-center my-auto">
                   <span>&copy; Farhan UKK Website Pengaduan 2023</span>
               </div>
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
       <div class="modal fade" id="logoutModalpetugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                       <a class="btn btn-primary" href="<?= base_url('logout_admin') ?>">Logout</a>
                   </div>
               </div>
           </div>
       </div>