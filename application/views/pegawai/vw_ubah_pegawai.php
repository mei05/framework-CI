<h1 class="mt-4"><?php echo $judul; ?></h1>
<div class="card mb-4">
	<div class="card-body">
		<table id="datatablesSimple">
			<thead>
				<div class="container-fluid">
					<div class="row">
						<div class="card-header">
							Form Ubah Data Pegawai
						</div>
						<div class="card-body">
							<form action="" method="POST" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?= $pegawai['id']; ?>">
								<div class="form-group mb-3">
									<label for="nama">Pegawai</label>
									<input type="text" name="nama" value="<?= $pegawai['nama'] ?>" class="form-control" id="nama" placeholder="Nama Pegawai">
									<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="form-group mb-3">
									<label for="alamat">Alamat</label>
									<input type="text" name="alamat" value="<?= $pegawai['alamat'] ?>" class="form-control" id="alamat" placeholder="Alamat">
									<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group mb-3">
									<label for="no_hp">No HP</label>
									<input type="text" name="no_hp" value="<?= $pegawai['no_hp'] ?>" class="form-control" id="no_hp" placeholder="No HP">
									<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>



								<a href="<?= base_url('Pegawai') ?>" class="btn btn-danger">Tutup</a>
								<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Pegawai</button>
							</form>
						</div>
					</div>
				</div>
	</div>
</div>
