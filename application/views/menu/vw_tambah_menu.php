<h1 class="mt-4"><?php echo $judul; ?></h1>
<div class="card mb-4">
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <div class="container-fluid">
                    <div class="row">
                <div class="card-header justify-content-center">
                    Form Tambah Data Menu
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-grup mb-3">
                            <label for="nama">Nama Menu</label>
                            <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control form-control-user" id="nama" placeholder="Nama Menu">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-grup mb-3">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" value="<?= set_value('harga'); ?>" class="form-control form-control-user" id="harga" placeholder="Harga">
                            <?= form_error('penulis', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-grup mb-3">
                            <label for="status">Status</label>
                            <select name="status" value="<?= set_value('status'); ?>" id="status" class="form-control">
                                <option value="">Status</option>
                                <option value="Tersedia">Tersedia</option>
                                <option value="Habis">Habis</option>
                            </select> <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-grup mb-3">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" value="<?= set_value('kategori'); ?>" id="kategori" class="form-control">
                                <option value="">Kategori</option>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                            </select> <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-grup mb-3">
                            <label for="gambar">Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                        <a href="<?= base_url('Menu') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Menu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>