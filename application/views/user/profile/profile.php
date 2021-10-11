<h2 class="mb-4">Biodata Saya</h2>

<?php if ($this->session->flashdata('message')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('message') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif ?>

<?= form_open_multipart(base_url('user/profile')) ?>
<input type="hidden" name="id" value="<?= $user['id_users'] ?>">

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-6">
        <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>">
        <?= form_error('name', '<small class="text-danger mt-1">', '</small>'); ?>
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
        <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>">
        <?= form_error('email', '<small class="text-danger mt-1">', '</small>'); ?>
    </div>
</div>

<div class="form-group row">
    <label for="nomorhp" class="col-sm-2 col-form-label">Nomor HP</label>
    <div class="col-sm-6">
        <input type="nomorhp" class="form-control" id="nomorhp" name="nomorhp" value="<?= $user['nomorhp'] ?>">
        <?= form_error('nomorhp', '<small class="text-danger mt-1">', '</small>'); ?>
    </div>
</div>

<div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-6">
        <input type="alamat" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat'] ?>">
        <?= form_error('alamat', '<small class="text-danger mt-1">', '</small>'); ?>
    </div>
</div>

<div class="form-group row">
    <label for="sosmed" class="col-sm-2 col-form-label">Sosial Media</label>
    <div class="col-sm-6">
        <input type="sosmed" class="form-control" id="sosmed" name="sosmed" value="<?= $user['sosmed'] ?>">
        <?= form_error('sosmed', '<small class="text-danger mt-1">', '</small>'); ?>
    </div>
</div>

<div class="form-group row">
    <label for="position" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-6">
        <select name="position_id" class="form-control" aria-readonly="true">
            <?php foreach ($position as $p) : ?>
                <option value="<?= $p->id_positions; ?>" <?= $p->id_positions == $user['position_id'] ? 'selected' : '' ?>>
                    <?= $p->position_name; ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Asal Institusi</label>
    <div class="col-sm-6">
        <input type="text" class="form-control" id="asal" name="asal" value="<?= $user['asal'] ?>">
        <?= form_error('asal', '<small class="text-danger mt-1">', '</small>'); ?>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Jurusan</label>
    <div class="col-sm-6">
        <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $user['jurusan'] ?>">
        <?= form_error('jurusan', '<small class="text-danger mt-1">', '</small>'); ?>
    </div>
</div>

<div class="form-group row">
    <label for="durasi" class="col-sm-2 col-form-label">Lama Magang</label>
    <div class="col-sm-6">
        <select name="durasi" class="form-control" id="durasi" aria-readonly="true">
            <option value="1" <?php if ($user['durasi'] == "1") {
                                    print ' selected';
                                } ?>>1 Bulan</option>
            <option value="2" <?php if ($user['durasi'] == "2") {
                                    print ' selected';
                                } ?>>2 Bulan</option>
            <option value="3" <?php if ($user['durasi'] == "3") {
                                    print ' selected';
                                } ?>>3 Bulan</option>
            <option value="4" <?php if ($user['durasi'] == "4") {
                                    print ' selected';
                                } ?>>4 Bulan</option>
            <option value="5" <?php if ($user['durasi'] == "5") {
                                    print ' selected';
                                } ?>>5 Bulan</option>
            <option value="6" <?php if ($user['durasi'] == "6") {
                                    print ' selected';
                                } ?>>6 Bulan</option>
            <option value="7" <?php if ($user['durasi'] == "7") {
                                    print ' selected';
                                } ?>>>6 Bulan</option>
        </select>
    </div>
</div>


<div class="form-group row">
    <label for="image" class="col-sm-2 col-form-label">Foto</label>
    <div class="col-sm-6">
        <?php
        if (empty($user['image'])) {
        ?>
            <img src="<?= base_url('assets/img/profile/default.jpg') . $user['image']; ?>" height="150" alt="...">
        <?php
        } else {

        ?>
            <img src="<?= base_url('assets/img/image/') . $user['image']; ?>" height="150" alt="...">
        <?php
        }
        ?>
        <br>
        <small><span class="text-danger">*</span> Maksimal ukuran gambar adalah 3 MB</small>
        <br> <br>
        <input name="image" type="file" class="form-control-file">
        <?php if ($this->session->flashdata('image_error')) :  ?>
            <small class="form-text text-danger">
                <?= $this->session->flashdata('image_error') ?>
            </small>
        <?php endif ?>
    </div>
</div>

<div class="row mt-4">
    <div class="col-8">
        <button type="submit" class="btn btn-sm btn-primary float-right"><i class="fas fa-check mr-1"></i> Simpan</button>
    </div>
</div>
<?= form_close() ?>