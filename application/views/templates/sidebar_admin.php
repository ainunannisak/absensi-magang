<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <i class="fas fa-address-card"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SIMDIK</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Data Mahasiswa -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Anggota</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('anggota/Mahasiswa') ?>">Mahasiswa</a>
                <a class="collapse-item" href="<?= base_url('anggota/Siswa') ?>">Siswa</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Kehadiran -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kehadiran" aria-expanded="true" aria-controls="kehadiran">
            <i class="fas fa-fw fa-users"></i>
            <span>Kehadiran</span>
        </a>
        <div id="kehadiran" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('kehadiran/konfirmasi_kehadiran') ?>">Konfirmasi Kehadiran</a>
                <a class="collapse-item" href="<?= base_url('kehadiran/tabel_kehadiran') ?>">Tabel Kehadiran</a>
                <a class="collapse-item" href="<?= base_url('kehadiran/rekap_kehadiran') ?>">Rekap Kehadiran</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

</ul>
<!-- End of Sidebar -->