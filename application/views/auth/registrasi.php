<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Register</h3>
                            </div>
                            <div class="card-body">
                                <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="nama" value="<?= set_value('nama'); ?>"
                                            class="form-control form-control-user" id="nama" placeholder="Nama Lengkap">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <label for="nama">Nama Lengkap</label>
                                    </div>
                                    <div class="form-floating mb-3" action="<?= base_url('auth/registrasi'); ?>">
                                        <input type="text" name="email" value="<?= set_value('email'); ?>"
                                            class="form-control form-control-user" id="email"
                                            placeholder="Email Address">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <label for="email">Alamat Email</label>
                                    </div>
                                    <div class="row mb-3" action="<?= base_url('auth/registrasi'); ?>">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input type="password" value="<?= set_value('password1'); ?>"
                                                    class="form-control form-control-user" id="password1"
                                                    name="password1" placeholder="Password">
                                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                                <label for="inputPassword">Kata Sandi</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input type="password" class="form-control form-control-user"
                                                    id="password2" name="password2" placeholder="Repeat Password">
                                                <label for="inputPasswordConfirm">Ulangi Kata Sandi</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Daftar
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth') ?> ">Sudah punya akun? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>