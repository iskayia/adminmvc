
<!-- Default Basic Forms Start -->
<div class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div class="pull-left">
			<h4 class="text-blue h4">Edit Data Pelanggan</h4>
			<p class="mb-30">untuk edit data pelanggan </p>
		</div>
		<div class="pull-right">
			<a href="<?= BaseURL('pel'); ?>" class="btn btn-primary btn-sm scroll-click"><i class="dw dw-back"></i> Kembali</a>  
		</div>
	</div>

	<form action="<?= BaseURL('pel/svedit/'.$pelanggan['id_pelanggan']); ?>" method="POST" enctype="multipart/form-data">
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Nama Pelanggan</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="nama_pelanggan" type="text" placeholder="masukkan nama pelanggan" value="<?= $pelanggan['nama_pelanggan']?>">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Email Pelanggan</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="email_pelanggan" type="text" placeholder="masukkan email pelanggan" value="<?= $pelanggan['email_pelanggan']?>">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Kontak Pelanggan</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="kontak_pelanggan" type="text" value="<?= $pelanggan['kontak_pelanggan']?>">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Alamat Pelanggan</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="alamat_pelanggan" type="text" value="<?= $pelanggan['alamat_pelanggan']?>">
			</div>
		</div>
		<div class="text-center">
			<button class="btn btn-primary">Simpan Data</button>
		</div>
	</form>

</div>