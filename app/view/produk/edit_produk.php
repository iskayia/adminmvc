<?php
$DataSupplier= $this->model()->getThisQuery('SELECT id_supplier,nama_supplier FROM supplier');

?>
<!-- Default Basic Forms Start -->
<div class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div class="pull-left">
			<h4 class="text-blue h4">Edit Data Produk</h4>
			<p class="mb-30">untuk menambahkan data produk yang belum tercantum di daata produk yang ada saat ini</p>
		</div>
		<div class="pull-right">
			<a href="<?= BaseURL('produk'); ?>" class="btn btn-primary btn-sm scroll-click"><i class="dw dw-back"></i> Kembali</a>  
		</div>
	</div>

	<form action="<?= BaseURL('produk/svedit/'.$produk['id_produk']); ?>" method="POST" enctype="multipart/form-data">
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Nama Produk</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="nama_produk" type="text" placeholder="masukkan nama produk" value="<?= $produk['nama_produk']?>">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Supplier</label>
			<div class="col-sm-12 col-md-10">

				<select class="custom-select col-12" name="nama_supplier">
					<option selected="">Pilih Supplier...</option>
					<?php foreach($DataSupplier as $ds) : ?>
					<option value="<?= $ds['id_supplier']; ?>" <?= $produk['id_supplier'] == $ds['id_supplier'] ? 'selected' : ''  ?>><?= $ds['nama_supplier']; ?></option>
				<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Jumlah</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="stok" value="<?= $produk['stok']?>" type="number">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Harga</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="harga_produk" value="<?= $produk['harga_produk']?>" type="number">
			</div>
		</div>


		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Gambar</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="gambar"  type="file">
			</div>
			<img src="<?= IMG_URL.$produk['gambar_produk'] ?>" alt="" width="100" height="100">
		</div>


		<div class="text-center">
			<button class="btn btn-primary">Simpan Data</button>
		</div>
	</form>

</div>