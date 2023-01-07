
<!-- Default Basic Forms Start -->
<div class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div class="pull-left">
			<h4 class="text-blue h4">Tambah Data Supplier </h4>
			<p class="mb-30">untuk menambahkan data supplier yang belum tercantum di daata supplier yang ada saat ini</p>
		</div>
		<div class="pull-right">
			<a href="<?= BaseURL('sup'); ?>" class="btn btn-primary btn-sm scroll-click"><i class="dw dw-back"></i> Kembali</a>  
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

	<form action="<?= BaseURL('sup/addsup'); ?>" method="POST">

		<!--START-->
		<div class="after-add-more-bm">

            <div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label">Nama Supplier</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" name="nama_supplier" placeholder="Masukkan Nama Supplier produk" type="text">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label">Kontak Supplier</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" name="kontak_supplier" placeholder="Masukkan Kontak Supplier" type="text">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label">Alamat Supplier</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control " name="alamat_supplier" placeholder="Masukkan Alamat Supplier" type="text">
				</div>
			</div>
		</div>

		<div class="text-center">
			<button class="btn btn-primary">Simpan Data</button>
		</div>
	</form>

</div>


<!-- 
kekurangan : id supplierya eror pas di tambahin, sama datenya ga ke input malah 00-00-00

 -->