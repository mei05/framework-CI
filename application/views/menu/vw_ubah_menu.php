<h1 class="mt-4"><?php echo $judul; ?></h1>
<div class="card mb-4">
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <div class="container-fluid">
                    <div class="row">
                <div class="card-header">
                    Form Ubah Data Menu
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $menu['id']; ?>">
                        <div class="form-group mb-3">
                            <label for="nama">Menu</label>
                            <input type="text" name="nama" value="<?= $menu['nama'] ?>" class="form-control" id="nama" placeholder="Nama Menu">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group mb-3">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" value="<?= $menu['harga'] ?>" class="form-control" id="harga" placeholder="Harga">
                            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group mb-3">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="Tersedia" <?php if ($menu['status'] == "Tersedia") {
                                                                echo "selected";
                                                            } ?>>Tersedia</option>
                                <option value="Habis" <?php if ($menu['status'] == "Habis") {
                                                                echo "selected";
                                                            } ?>>Habis</option>
                            </select>
                            <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group mb-3">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" id="kategori" class="form-control">
                                <option value="Makanan" <?php if ($menu['kategori'] == "Makanan") {
                                                                echo "selected";
                                                            } ?>>Makanan</option>
                                <option value="Minuman" <?php if ($menu['kategori'] == "Minuman") {
                                                                echo "selected";
                                                            } ?>>Minuman</option>
                            </select>
                            <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mb-3">
                            <img src="<?= base_url('assets/assets/img/menu/') . $menu['gambar']; ?>" style="width: 100px" class="img-thumbnail">

                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                            </div>
                        </div>

                        <a href="<?= base_url('Menu') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Menu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>