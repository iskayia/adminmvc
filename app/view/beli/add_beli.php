<?php
$DataProduk= $this->model()->getThisQuery('SELECT id_produk,nama_produk FROM `produk` ');

?>
<!-- Default Basic Forms Start -->
<div class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div class="pull-left">  
			<h4 class="text-blue h4">Tambah Data Pembelian</h4>
			<p class="mb-30">untuk menambahkan data pembelian yang belum tercantum di data pembelian yang ada saat ini</p>
		</div>
		<div class="pull-right">
			<a href="<?= BaseURL('beli'); ?>" class="btn btn-primary btn-sm scroll-click"><i class="dw dw-back"></i> Kembali</a>  
		</div>
	</div>

	<form action="<?= BaseURL('beli/add_beli'); ?>" method="POST">
		
		<!--START-->
		<div class="after-add-more-bm">

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Produk</label>
			<div class="col-sm-12 col-md-10">

				<select class="custom-select col-12" name="id_produk[]">
					<option selected="">Pilih Produk...</option>
					<?php foreach($DataProduk as $db) : ?>
					<option value="<?= $db['id_produk']; ?>"><?= $db['nama_produk']; ?></option>
				<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Jumlah</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="jumlah_pembelian[]" value="1" type="number">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Tanggal Entri</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control date-picker" name="tgl_pembelian[]" placeholder="Masukkan tanggal entri" type="text">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Harga Beli /pcs</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="harga_pembelian[]" type="text" placeholder="masukkan nama aroma parfum">
			</div>
		</div>
		 <button class="btn btn-success add-more-bm" type="button">
              <i class="glyphicon glyphicon-plus"></i> Tambah
            </button>
            <hr>
		</div>

		<!--END // buat nnti input langsung banyak -->
		<div class="text-center">
			<button class="btn btn-primary">Simpan Data</button>
		</div>
	</form>

	<!--START-->
	<div class="copy invisible">
		<div class="form-bm">
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Produk</label>
			<div class="col-sm-12 col-md-10">

				<select class="custom-select col-12" name="id_produk[]">
					<option selected="">Pilih Produknya dong bestie...</option>
					<?php foreach($DataProduk as $db) : ?>
					<option value="<?= $db['id_produk']; ?>"><?= $db['nama_produk']; ?></option>
				<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Jumlah</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="jumlah_pembelian[]" value="1" type="number">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Tanggal Entri</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control date-picker" name="tgl_pembelian[]" placeholder="Masukkan tanggal entri" type="text">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Harga</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="harga_pembelian[]" type="text" placeholder="masukkan nama aroma parfum">
			</div>
		</div>
		<button class="btn btn-danger remove-bm" type="button"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
        <hr>
    </div>
	</div>
		<!--END // buat nnti input langsung banyak -->

</div>


<!-- 
kekurangan : id produkya eror pas di tambahin, sama datenya ga ke input malah 00-00-00
yaaahhh, gimana dong?

 -->
