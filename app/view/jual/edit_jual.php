<?php
$DataProduk= $this->model()->getThisQuery('SELECT id_produk,nama_produk FROM `produk` ');
function tanggal($date){
	$bulan = explode('|', 'January|February|March|April|May|June|July|August|September|October|November|December');
		$dates= explode('-', $date);
		return $dates[2] . ' ' . $bulan[($dates[1] - 1)] . ' ' . $dates[0];
}
?>
<!-- Default Basic Forms Start -->
<div class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div class="pull-left">
			<h4 class="text-blue h4">Edit Data Penjualan</h4>
			<p class="mb-30">untuk mengedit data penjualan yang telah tercantum di data produk yang ada saat ini</p>
		</div>
		<div class="pull-right">
			<a href="<?= BaseURL('jual'); ?>" class="btn btn-primary btn-sm scroll-click"><i class="dw dw-back"></i> Kembali</a>  
		</div>
	</div>

	<form action="<?= BaseURL('jual/svedit/'.$jual['id_penjualan']); ?>" method="POST">
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Nama Produk</label>
			<div class="col-sm-12 col-md-10">

				<select class="custom-select col-12" name="id_produk" disabled="true">
					<option selected="">Pilih Produk...</option>
					<?php foreach($DataProduk as $db) :
						$selected = '';
						if($db['id_produk'] == $jual['id_produk']) $selected = 'selected';
					 ?>
						<option <?= $selected; ?> value="<?= $db['id_produk']; ?>"><?= $db['nama_produk']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Jumlah</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="jumlah_penjualan" value="<?= $jual['jumlah_penjualan']; ?>" type="number">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Tanggal Entri</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control date-picker" name="tgl_penjualan" value="<?= tanggal($jual['tgl_penjualan']); ?>" type="text">
			</div>
		</div>

		<div class="text-center">
			<button class="btn btn-primary">Simpan Data</button>
		</div>
	</form>

</div>


<!-- 
kekurangan : id produkya eror pas di tambahin, sama datenya ga ke input malah 00-00-00

 -->