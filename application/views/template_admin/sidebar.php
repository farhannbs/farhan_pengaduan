<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #0A2647;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content" href="<?= base_url('pengaduan_masyarakat') ?>">
        <div class=" sidebar-brand-icon rotate-n-15">
            <i class="fa fa-pen-nib"></i>
        </div>

        <div class="sidebar-brand-text mx-3">Lapor !</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dashboard_admin') ?>">
            <i class="fa fa-home"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        menu
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('kategori_admin') ?>">
            <i class="fa fa-file"></i>
            <span>Kategori</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('masyarakat_admin') ?>">
            <i class="fa fa-user"></i>
            <span>Masyarakat</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('petugas_admin') ?>">
            <i class="fas fa-user-tie"></i>
            <span>Petugas</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        pengaduan
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('riwayat_admin') ?>">
            <i class="fa fa-book"></i>
            <span>Pengaduan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('laporan_pdf') ?>">
            <i class="fas fa-exclamation-circle"></i>
            <span>Laporan</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>