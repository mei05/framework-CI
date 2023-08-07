<!-- Begin Page Content -->
<div class="container-fluid">
	<?= $this->session->flashdata('message'); ?>
	<div class="clearfix">
		<div class="float-left">
			<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
		</div>
		<div class="float-right">
			<a href="<?= base_url('Pegawai/tambah') ?>" class="btn btn-primary mb-3"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Pegawai
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
							<th>Nama Pegawai</th>
							<th>Alamat</th>
							<th>No HP</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($pegawai as $us) : ?>
							<tr>
								<td><?= $i; ?>.</td>

								<td><?= $us['nama']; ?></td>
								<td><?= $us['alamat']; ?></td>
								<td><?= $us['no_hp']; ?></td>

								<td>
									<a href="<?= base_url('Pegawai/edit/') . $us['id']; ?>" class="badge btn-warning">Edit</a>
									<a href="<?= base_url('Pegawai/hapus/') . $us['id']; ?>" class="badge btn-danger">Hapus</a>
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
