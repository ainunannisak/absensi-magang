<h2 class="mb-4"><?= $title ?></h2>
<p class="mt-4">Kehadiran Bulan : <?= date('F') ?></p>


<?php if ($this->session->flashdata('message')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('message') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif ?>

<head>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" defer></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js" defer></script>

    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered text-center" id="rekapTable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                    <th scope="col">Hadir</th>
                    <th scope="col">Sakit</th>
                    <th scope="col">Izin</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($rekap as $r) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $r['name'] ?></td>
                        <td><?= $r['position'] ?></td>
                        <td><?= $r['M'] ?></td>
                        <td><?= $r['S'] ?></td>
                        <td><?= $r['I'] ?></td>
                        <td><?= $r['total'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <a class="btn btn-success btn-sm mt-4" href="<?= base_url('kehadiran/cetak') ?>">Cetak Rekap</a>
    </div>
</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#rekapTable').DataTable();
    });
</script>