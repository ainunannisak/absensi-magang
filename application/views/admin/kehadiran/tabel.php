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

<div class="mb-3 sm-4">
    <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Cari nama">
</div>
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

<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            //Get Names
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>