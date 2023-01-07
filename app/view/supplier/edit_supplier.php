
<!-- Default Basic Forms Start -->
<div class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div class="pull-left">
			<h4 class="text-blue h4">Edit Data Supplier</h4>
			<p class="mb-30">untuk edit data supplier </p>
		</div>
		<div class="pull-right">
			<a href="<?= BaseURL('sup'); ?>" class="btn btn-primary btn-sm scroll-click"><i class="dw dw-back"></i> Kembali</a>  
		</div>
	</div>

	<form action="<?= BaseURL('sup/svedit/'.$supplier['id_supplier']); ?>" method="POST" enctype="multipart/form-data">
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Nama Supplier</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="nama_supplier" type="text" placeholder="masukkan nama supplier" value="<?= $supplier['nama_supplier']?>">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Kontak supplier</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="kontak_supplier" type="text" value="<?= $supplier['kontak_supplier']?>">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Alamat supplier</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="alamat_supplier" type="text" value="<?= $supplier['alamat_supplier']?>">
			</div>
		</div>
		<div class="text-center">
			<button class="btn btn-primary">Simpan Data</button>
		</div>
	</form>

</div>