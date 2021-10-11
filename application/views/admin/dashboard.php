<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Selamat Datang Admin!</h1>


    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Mahasiswa Magang</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $anggotaM ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Siswa Magang</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $anggotaS ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Menunggu Konfirmasi Kehadiran</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $menunggu_konfirmasi ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Kehadiran Dikonfirmasi (Hari)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kehadiran_dikonfirmasi ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <!-- Approach -->
            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Mengenai SIMDIK</h6>
                </div>
                <div class="card-body">
                    <p>SIMDIK adalah Sistem Informasi Magang Dinas Kominfo Makassar yang dikembangkan oleh Mahasiswa UNHAS sebagai Jobdesc dalam mengampu mata kuliah Kerja Praktek.</p>
                    <p class="mb-0">SIMDIK memiliki fitur menyimpan data peserta magang pada Dinas Kominfo Makassar yang terdiri dari Mahasiswa dan Siswa. Selain itu SIMDIK memiliki fitur presensi, sehingga peserta magang dapat melakukan entri kehadiran pada website ini lalu admin akan mengkonfirmasi kehadiran peserta magang untuk memvalidasi kehadiran peserta tersebut.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->