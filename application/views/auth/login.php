<body>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <div class="img">
                                            <img src="<?= base_url('assets/img/kominfo.png') ?>" class="mx-auto d-block mb-1" width="auto" height="80px">
                                            <h1 class="h4 text-gray-900 mb-3">SIMDIK</h1>
                                        </div>
                                        <h1 class="h6 text-gray-900 mb-4">Sistem Informasi Magang DISKOMINFO Makassar</h1>


                                        <?= $this->session->flashdata('message') ?>

                                        <form class="user" method="POST" action="<?= base_url('auth'); ?>">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user mb-1" id="email" name="email" value="<?= set_value('email'); ?>" placeholder=" Alamat Email">
                                                <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user mb-1" id="password" name="password" placeholder="Password">
                                                <?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
                                            </div>

                                            <button type="submit" class="btn btn-primary btn-user btn-block mb-2">
                                                Masuk
                                            </button>

                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="<?= base_url('auth/registration'); ?>">Belum punya akun? Daftar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
</body>