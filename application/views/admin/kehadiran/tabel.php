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

    <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered text-center" id="myTable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <?php $no = 1; ?>
            <?php foreach ($absensi as $a) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $a['name'] ?></td>
                    <td><?= $a['date'] ?></td>
                    <td><?= $a['position_name'] ?></td>
                    <td>
                        <?php if ($a['information'] == 'M') : ?>
                            <div class="badge badge-success">Masuk</div>
                        <?php elseif ($a['information'] == 'I') : ?>
                            <div class="badge badge-warning">Izin</div>
                        <?php else : ?>
                            <div class="badge badge-danger">Sakit</div>
                        <?php endif ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
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
        $('#myTable').DataTable();
    });
</script>