<h2>Tabel Kehadiran</h2>

<head>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" defer></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js" defer></script>

    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<p class="mt-4">Kehadiran Bulan : <?= date('F') ?></p>
<table class="table text-center" id="tableKehadiran">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Keterangan</th>
            <th>Informasi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($absensi as $a) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $a['date'] ?></td>
                <td><?= $a['time'] ?></td>
                <td><?= $a['information'] ?></td>
                <td>
                    <?php if ($a['status'] == 0) : ?>
                        <div class="badge badge-secondary">Menunggu Konfirmasi</div>
                    <?php elseif ($a['status'] == 1) : ?>
                        <div class="badge badge-success">Dikonfirmasi</div>
                    <?php else : ?>
                        <div class="badge badge-danger">Ditolak</div>
                    <?php endif ?>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

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
        $('#tableKehadiran').DataTable();
    });
</script>