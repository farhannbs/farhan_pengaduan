 <!-- Sidebar -->
 <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #0A2647;">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content" href="<?= base_url('pengaduan_masyarakat') ?>">
         <div class=" sidebar-brand-icon rotate-n-15">
             <i class="fa fa-pen-nib"></i>
         </div>

         <div class="sidebar-brand-text mx-3">Pengaduan</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('dashboard_masyarakat') ?>">
             <i class="fa fa-home"></i>
             <span>Dashboard</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('pengaduan_masyarakat') ?>">
             <i class="fas fa-exclamation-circle"></i>
             <span>Pengaduan</span></a>
     </li>

     <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('riwayat_masyarakat') ?>">
             <i class="fas fa-history"></i>
             <span>Riwayat</span></a>
     </li>

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>
 </ul>
 <!-- End of Sidebar -->