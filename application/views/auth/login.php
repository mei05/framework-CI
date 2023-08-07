<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Login</h3>
                            </div>
                            <div class="card-body">
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="inputEmail" name="email" placeholder="Masukkan Alamat Email..."/>
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <label for="inputEmail">Alamat Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control form-control-user" value="<?= set_value('nama'); ?>" name="password" id="inputPassword" placeholder="Password"/>
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <label for="inputPassword">Kata Sandi</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button type="submit" class="btn btn-primary">
                                            Masuk
                                        </button>
                                    </div>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url(); ?>auth/registrasi">Buat Akun Baru!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>