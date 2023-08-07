<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url('Menu/tambah') ?>" class="btn btn-primary mb-3"><i
                    class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Menu
            </a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                    <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Menu</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($menu as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><img src="<?= base_url('assets/assets/img/menu/') . $us['gambar']; ?>"
                                    style="width:100px" class="img-thumbnail"></td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['harga']; ?></td>
                            <td><?= $us['status']; ?></td>
                            <td><?= $us['kategori']; ?></td>

                            <td>
                                <a href="<?= base_url('Menu/edit/') . $us['id']; ?>" 
                                class="badge btn-warning">Edit</a>
                                <a href="<?= base_url('Menu/hapus/') . $us['id']; ?>" 
                                class="badge btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>