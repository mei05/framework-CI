<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        </div>
        <div class="float-right">
        <a href="<?= base_url('Penjualan/export') ?>" class="btn btn-secondary btn-sn mb-3"><i class="fa fa-file-pdf"></i>&nbsp;&nbsp;Cetak Laporan </a>
            </a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Pembelian</th>
                            <th>Tanggal</th>
                            <th>Pelanggan</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($penjualan as $us) : ?>
                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><?= $us['no_penjualan']; ?></td>
                                <td><?= $us['tanggal']; ?></td>
                                <td><?= $us['nama']; ?></td>
                                <td><?= $us['total_bayar']; ?></td>
                                <td><?= $us['status']; ?></td>
                                <td>
                                    <a href="<?= base_url('Penjualan/detail/' . $us['no_penjualan']); ?>" class="btn btn-info">Detail</a>
                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>