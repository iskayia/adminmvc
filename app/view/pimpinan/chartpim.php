<?php

$tahun = 'YEAR(NOW())';

$DataPembelian= $this->model()->getThisQuery("SELECT $tahun as tahun, 
(SELECT COUNT(id_pembelian) FROM pembelian WHERE MONTH(tgl_pembelian) = 1 AND YEAR(tgl_pembelian) = $tahun) as bulan1,
(SELECT COUNT(id_pembelian) FROM pembelian WHERE MONTH(tgl_pembelian) = 2 AND YEAR(tgl_pembelian) = $tahun) as bulan2,
(SELECT COUNT(id_pembelian) FROM pembelian WHERE MONTH(tgl_pembelian) = 3 AND YEAR(tgl_pembelian) = $tahun) as bulan3,
(SELECT COUNT(id_pembelian) FROM pembelian WHERE MONTH(tgl_pembelian) = 4 AND YEAR(tgl_pembelian) = $tahun) as bulan4,
(SELECT COUNT(id_pembelian) FROM pembelian WHERE MONTH(tgl_pembelian) = 5 AND YEAR(tgl_pembelian) = $tahun) as bulan5,
(SELECT COUNT(id_pembelian) FROM pembelian WHERE MONTH(tgl_pembelian) = 6 AND YEAR(tgl_pembelian) = $tahun) as bulan6,
(SELECT COUNT(id_pembelian) FROM pembelian WHERE MONTH(tgl_pembelian) = 7 AND YEAR(tgl_pembelian) = $tahun) as bulan7,
(SELECT COUNT(id_pembelian) FROM pembelian WHERE MONTH(tgl_pembelian) = 8 AND YEAR(tgl_pembelian) = $tahun) as bulan8,
(SELECT COUNT(id_pembelian) FROM pembelian WHERE MONTH(tgl_pembelian) = 9 AND YEAR(tgl_pembelian) = $tahun) as bulan9,
(SELECT COUNT(id_pembelian) FROM pembelian WHERE MONTH(tgl_pembelian) = 10 AND YEAR(tgl_pembelian) = $tahun) as bulan10,
(SELECT COUNT(id_pembelian) FROM pembelian WHERE MONTH(tgl_pembelian) = 11 AND YEAR(tgl_pembelian) = $tahun) as bulan11,
(SELECT COUNT(id_pembelian) FROM pembelian WHERE MONTH(tgl_pembelian) = 12 AND YEAR(tgl_pembelian) = $tahun) as bulan12
 ");
$DataPenjualan= $this->model()->getThisQuery("SELECT  
(SELECT COUNT(id_penjualan) FROM penjualan WHERE MONTH(tgl_penjualan) = 1 AND YEAR(tgl_penjualan) = $tahun) as bulan1,
(SELECT COUNT(id_penjualan) FROM penjualan WHERE MONTH(tgl_penjualan) = 2 AND YEAR(tgl_penjualan) = $tahun) as bulan2,
(SELECT COUNT(id_penjualan) FROM penjualan WHERE MONTH(tgl_penjualan) = 3 AND YEAR(tgl_penjualan) = $tahun) as bulan3,
(SELECT COUNT(id_penjualan) FROM penjualan WHERE MONTH(tgl_penjualan) = 4 AND YEAR(tgl_penjualan) = $tahun) as bulan4,
(SELECT COUNT(id_penjualan) FROM penjualan WHERE MONTH(tgl_penjualan) = 5 AND YEAR(tgl_penjualan) = $tahun) as bulan5,
(SELECT COUNT(id_penjualan) FROM penjualan WHERE MONTH(tgl_penjualan) = 6 AND YEAR(tgl_penjualan) = $tahun) as bulan6,
(SELECT COUNT(id_penjualan) FROM penjualan WHERE MONTH(tgl_penjualan) = 7 AND YEAR(tgl_penjualan) = $tahun) as bulan7,
(SELECT COUNT(id_penjualan) FROM penjualan WHERE MONTH(tgl_penjualan) = 8 AND YEAR(tgl_penjualan) = $tahun) as bulan8,
(SELECT COUNT(id_penjualan) FROM penjualan WHERE MONTH(tgl_penjualan) = 9 AND YEAR(tgl_penjualan) = $tahun) as bulan9,
(SELECT COUNT(id_penjualan) FROM penjualan WHERE MONTH(tgl_penjualan) = 10 AND YEAR(tgl_penjualan) = $tahun) as bulan10,
(SELECT COUNT(id_penjualan) FROM penjualan WHERE MONTH(tgl_penjualan) = 11 AND YEAR(tgl_penjualan) = $tahun) as bulan11,
(SELECT COUNT(id_penjualan) FROM penjualan WHERE MONTH(tgl_penjualan) = 12 AND YEAR(tgl_penjualan) = $tahun) as bulan12
 ");

$tahun = $DataPembelian[0]['tahun'];

// $status= $this->model()->getThisQuery('SELECT STATUS FROM `Pembelian`');
// $DataProduk = $this->model('ProdukModel')->load();
?>
<script type="text/javascript">
	
	var BMbulan1 = <?= $DataPembelian[0]['bulan1'] ?>;
	var BMbulan2 = <?= $DataPembelian[0]['bulan2'] ?>;
	var BMbulan3 = <?= $DataPembelian[0]['bulan3'] ?>;
	var BMbulan4 = <?= $DataPembelian[0]['bulan4'] ?>;
	var BMbulan5 = <?= $DataPembelian[0]['bulan5'] ?>;
	var BMbulan6 = <?= $DataPembelian[0]['bulan6'] ?>;
	var BMbulan7 = <?= $DataPembelian[0]['bulan7'] ?>;
	var BMbulan8 = <?= $DataPembelian[0]['bulan8'] ?>;
	var BMbulan9 = <?= $DataPembelian[0]['bulan9'] ?>;
	var BMbulan10 = <?= $DataPembelian[0]['bulan10'] ?>;
	var BMbulan11 = <?= $DataPembelian[0]['bulan11'] ?>;
	var BMbulan12 = <?= $DataPembelian[0]['bulan12'] ?>;

	var Jualbulan1 = <?= $DataPenjualan[0]['bulan1'] ?>;
	var Jualbulan2 = <?= $DataPenjualan[0]['bulan2'] ?>;
	var Jualbulan3 = <?= $DataPenjualan[0]['bulan3'] ?>;
	var Jualbulan4 = <?= $DataPenjualan[0]['bulan4'] ?>;
	var Jualbulan5 = <?= $DataPenjualan[0]['bulan5'] ?>;
	var Jualbulan6 = <?= $DataPenjualan[0]['bulan6'] ?>;
	var Jualbulan7 = <?= $DataPenjualan[0]['bulan7'] ?>;
	var Jualbulan8 = <?= $DataPenjualan[0]['bulan8'] ?>;
	var Jualbulan9 = <?= $DataPenjualan[0]['bulan9'] ?>;
	var Jualbulan10 = <?= $DataPenjualan[0]['bulan10'] ?>;
	var Jualbulan11 = <?= $DataPenjualan[0]['bulan11'] ?>;
	var Jualbulan12 = <?= $DataPenjualan[0]['bulan12'] ?>;
</script>
<div class="bg-white pd-20 card-box mb-30">
	<h4 class="h4 text-blue">penjualan Masuk Per <?= $tahun ?></h4>
	<div id="chart2"></div>
</div> 

