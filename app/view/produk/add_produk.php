<?php
$DataSupplier = $this->model()->getThisQuery('SELECT id_supplier,nama_supplier FROM supplier');
?>
<!-- Default Basic Forms Start -->
<div class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div class="pull-left">
			<h4 class="text-blue h4">Tambah Data Produk</h4>
			<p class="mb-30">untuk menambahkan data produk yang belum tercantum di daata produk yang ada saat ini</p>
		</div>
		<div class="pull-right">
			<a href="<?= BaseURL('produk'); ?>" class="btn btn-primary btn-sm scroll-click"><i class="dw dw-back"></i> Kembali</a>
		</div>
	</div>

	<?php if (isset($_SESSION['error'])) {
		$message = $_SESSION['message'];
	?>
		<div class="alert alert-success">
			<strong><?= $message; ?></strong>
		</div>
	<?php
		unset($_SESSION['error']);
		unset($_SESSION['message']);
	} ?>


	<form action="<?= BaseURL('produk/add'); ?>" method="POST" enctype="multipart/form-data">
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Nama Produk</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="nama_produk" type="text" placeholder="masukkan nama produk">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Supplier</label>
			<div class="col-sm-12 col-md-10">

				<select class="custom-select col-12" name="nama_supplier">
					<option selected="">Pilih Supplier...</option>
					<?php foreach ($DataSupplier as $ds) : ?>
						<option value="<?= $ds['id_supplier']; ?>"><?= $ds['nama_supplier']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>
		
		<!-- selectin dengan input di grup -->
		<!-- <div class="input-group">
			<input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
			<div class="input-group-append">
				<button type="button" class="btn btn-outline-secondary">Action</button>
				<button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="sr-only">Toggle Dropdown</span>
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
					<div role="separator" class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Separated link</a>
				</div>
			</div>
		</div> -->

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Jumlah</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="stok" value="1" type="number">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Harga</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="harga_produk" value="1" type="number">
			</div>
		</div>


		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Gambar</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="gambar" type="file">
			</div>
		</div>

		<div class="text-center">
			<button class="btn btn-primary">Simpan Data</button>
		</div>
	</form>

</div>