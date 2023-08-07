<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-6">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <img src="<?= base_url('assets/assets/img/menu/') . $menu['gambar']; ?>" style="width:400px" class="img-thumbnail">
                        </div>
                        <div class="col mr-2">
                            <div class="card-body">
                                <form action="" method="POST">
                                    <input type="hidden" name="id" value="<?= $menu['id']; ?>">
                                    <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                                    <input type="hidden" name="status" value="<?= $menu['status'] ?>">
                                    <div class="form-group mb-3" mb-3>
                                        <label for="nama">Nama Menu</label>
                                        <input name="nama" type="text" value="<?= $menu['nama']; ?>" readonly class="form-control" id="nama">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="harga">Harga</label>
                                        <input name="harga" value="<?= $menu['harga']; ?>" type="text" readonly class="form-control" id="harga">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="status">Status</label>
                                        <input name="status" value="<?= $menu['status']; ?>" type="text" readonly class="form-control" id="status">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="kategori">Kategori</label>
                                        <input name="kategori" value="<?= $menu['kategori']; ?>" type="text" readonly class="form-control" id="kategori">
                                    </div>
                                    <div class="form-grup mb-3">
                                        <label for="jumlah">Jumlah</label>
                                        <input type="number" name="jumlah" id="jumlah" class="form-control" min='1'>
                                        <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-grup mb-3">
                                        <label for="total">Total Harga</label>
                                        <input type="text" name="total" id="total" readonly class="form-control">
                                    </div>
                                    <button type="submit" id="tambah" name="tambah" class="btn btn-primary float-right">Tambah Ke Keranjang</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>