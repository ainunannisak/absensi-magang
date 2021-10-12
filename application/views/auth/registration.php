<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <div class="img">
                                <img src="<?= base_url('assets/img/kominfo.png') ?>" class="mx-auto d-block mb-3" width="auto" height="80px">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun SIMDIK</h1>
                            </div>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user mb-1" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name') ?>">
                                <?= form_error('name', '<small class="text-danger pl-2">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user mb-1" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email') ?>">
                                <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-1">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                                </div>
                                <?= form_error('password1', '<small class="text-danger pl-4 mb-1">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block mb-2">
                                Registrasi Akun
                            </button>

                            <div class="form-group">

                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Sudah punya akun? Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>