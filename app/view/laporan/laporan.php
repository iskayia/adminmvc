	<?php
//$DataProduk= $this->model()->getThisQuery('SELECT * FROM `Produk` WHERE stok<50 ');
// $status= $this->model()->getThisQuery('SELECT STATUS FROM `Pembelian`');
// $DataProduk = $this->model('ProdukModel')->load();
	?>
	<div class="pd-20 card-box mb-30">
		<form action="<?= BaseURL('lap/tampilLaporan'); ?>" method="POST" >
		<div class="clearfix mb-20">
			<div class="pull-left">
				<h4 class="text-blue h4">Laporan</h4>
				<p>pilih laporan yg akan di cetak </p>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<label class="weight-600">Laporan Transaksi</label>
			<div class="custom-control custom-radio mb-5">
				<input type="radio" id="customRadio4"value="BM" name="customRadio" class="custom-control-input" required>
				<label class="custom-control-label" for="customRadio4">Pembelian</label>
			</div>
			<div class="custom-control custom-radio mb-5">
				<input type="radio" id="customRadio5"  value="Jual" name="customRadio" class="custom-control-input" required>
				<label class="custom-control-label" for="customRadio5">Penjualan</label>
			</div>
			<div class="custom-control custom-radio mb-5">
				<input type="radio" id="customRadio6"  value="Keuangan" name="customRadio" class="custom-control-input" required>
				<label class="custom-control-label" for="customRadio6">Keuangan</label>
			</div>
		</div>

		<div class="col-md-6 col-sm-12">
			<label class="weight-600">Tanggal</label>
			<div class="custom-control custom-radio mb-5">
				<input type="text" name="daterange" value="" class="form-control date-picker"/>
			</div>
		</div>



		<div class="col-md-6 col-sm-12">
			<!-- <label class="weight-600">Tanggal</label>
			<select name="bulan" class="custom-control custom-radio mb-5">
				<option>Januari</option>
				<option>Februari</option>
				<option>Maret</option>
				<option>April</option>
				<option>Mei</option>
				<option>Juni</option>
				<option>Juli</option>
				<option>Agustus</option>
				<option>September</option>
				<option>Oktober</option>
				<option>November</option>
				<option>Desember</option>
			</select>
			
			<select name="tahun" class="custom-control custom-radio mb-5">
				<?php
				// $mulai= date('Y') - 50;
				// for($i = $mulai;$i<$mulai + 100;$i++){
				// 	$sel = $i == date('Y') ? ' selected="selected"' : '';
				// 	echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
				// }
				?>
			</select>		 -->

			<div>
				
				<button type='submit' class="btn btn-primary"><i class="icon-copy fa fa-print" aria-hidden="true"></i> Cetak</button>
			</div>

		</div>
		</form>
	</div>

