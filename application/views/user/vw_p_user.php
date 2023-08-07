<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <?= $this->session->flashdata('message');
            ?>
        </div>
        <?php $i = 1; ?>
        <?php foreach ($menu as $us) : ?>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-monospace fw-lighter fw-bolder fs-5"><?= $us['nama'] ?></div>
                                <div class="font-monospace fw-lighter fw-bolder">Rp<?= $us['harga'] ?></div>
                                <div class="font-monospace fw-lighter">Status <a class="badge btn-info"><?= $us['status'] ?></a></div>
                            </div>
                            <div class="col-auto">
                                <img src="<?= base_url('assets/assets/img/menu/') . $us['gambar']; ?>" style="width:100px" class="img-thumbnail">
                            </div>
                        </div>
                        <div class="align-items-center">
                            <a href="<?= base_url('Profil/keranjang/') . $us['id'] ?>" class="badge btn-warning">Beli</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>