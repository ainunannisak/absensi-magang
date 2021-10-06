<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Selamat Datang <?= $user['name']; ?></h1>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <?php
                if (empty($user['image'])) {
                ?>
                    <img src="<?= base_url('assets/img/profile/default.jpg') . $user['image']; ?>" class="card-img" alt="...">
                <?php
                } else {

                ?>
                    <img src="<?= base_url('assets/img/image/') . $user['image']; ?>" class="card-img" alt="...">
                <?php
                }
                ?>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p class="card-title"><?= $user['name']; ?></p>
                    <p class="card-text">Email : <?= $user['email']; ?></p>
                    <p class="card-text">Asal : <?= $user['asal']; ?></p>
                    <p class="card-text"><small class="text-muted">Terdaftar sejak : <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>