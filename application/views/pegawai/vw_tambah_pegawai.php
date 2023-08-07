<h1 class="mt-4"><?php echo $judul; ?></h1>
<div class="card mb-4">
	<div class="card-body">
		<table id="datatablesSimple">
			<thead>
				<div class="container-fluid">
					<div class="row">
						<div class="card-header justify-content-center">
							Form Tambah Data Pegawai
						</div>
						<div class="card-body">
							<form action="" method="POST" enctype="multipart/form-data">
								<div class="form-grup mb-3">
									<label for="nama">Nama Pegawai</label>
									<input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control form-control-user" id="nama" placeholder="Nama Pegawai">
									<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-grup mb-3">
									<label for="alamat">Alamat</label>
									<input type="text" name="alamat" value="<?= set_value('alamat'); ?>" class="form-control form-control-user" id="alamat" placeholder="Alamat">
									<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-grup mb-3">
									<label for="no_hp">No HP</label>
									<input type="text" name="no_hp" value="<?= set_value('no_hp'); ?>" class="form-control form-control-user" id="no_hp" placeholder="No HP">
									<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<a href="<?= base_url('Pegawai') ?>" class="btn btn-danger">Tutup</a>
								<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Pegawai</button>
							</form>
						</div>
					</div>
				</div>
	</div>
</div>
