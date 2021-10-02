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
    <label for="position" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-6">
        <select name="position_id" class="form-control" readonly>
            <?php foreach ($position as $p) : ?>
                <option value="<?= $p->id_positions; ?>" <?= $p->id_positions == $user['position_id'] ? 'selected' : '' ?>>
                    <?= $p->position_name; ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="durasi" class="col-sm-2 col-form-label">Lama Magang</label>
    <div class="col-sm-6">
        <select name="durasi" class="form-control" id="durasi" aria-readonly="true">
            <option>1 Bulan</option>
            <option>2 Bulan</option>
            <option>3 Bulan</option>
            <option>4 Bulan</option>
            <option>5 Bulan</option>
            <option>6 Bulan</option>
            <option>>6 Bulan</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Asal</label>
    <div class="col-sm-6">
        <input type="text" class="form-control" id="asal" name="asal" value="<?= $user['asal'] ?>">
        <?= form_error('asal', '<small class="text-danger mt-1">', '</small>'); ?>
    </div>
</div>

<div class="form-group row">
    <label for="image" class="col-sm-2 col-form-label">Foto</label>
    <div class="col-sm-6">
        <?php if (!empty($user['image'])) : ?>
            <img src="<?= base_url('image/') . $user['image']; ?>" height="150">
        <?php else : ?>
            <p>No Photo</p>
        <?php endif; ?>
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