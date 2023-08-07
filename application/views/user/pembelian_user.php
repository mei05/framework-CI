<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!--<div class="row">
        <div class="col-md-6"><a href="<?= base_url(); ?>Mahasiswa/tambah" class="btn btn-info mb-2">Tambah Mahasiswa</a></div>
        <div class="col-md-12">-->
    <?= $this->session->flashdata('message'); ?>
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Pembelian</th>
                            <th>Tanggal</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pembelian as $us) :?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['no_penjualan'];?></td>
                            <td><?= $us['tanggal'];?></td>
                            <td><?= $us['total_bayar'];?></td>
                            <td><?= $us['status'];?></td>
                            <td>
                                <a href="<?= base_url('Profil/statusbeli/') . $us['no_penjualan']; ?>"
                                    class="badge btn-info">Detail</a>
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