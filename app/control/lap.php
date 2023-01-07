<?php

class lap extends Controller
{
	public function index()
	{
		$this->view('template/headerlap');
		$this->view('laporan/laporan');
		$this->view('template/footerlap');
	}

	public function tampilLaporan()
	{
		
		$tanggal = explode(' - ',$_REQUEST['daterange']);
		
		$tanggal1 = date('Y-m-d',strtotime($tanggal[0]));// dah dipisah dari '01/04/2023 - 30/04/2023' = 2023-04-01
		$tanggal2 = date('Y-m-d',strtotime($tanggal[1]));// = 2023-04-30

		$type = $_REQUEST['customRadio'];
		if($type == 'BM') {
			$data['lapbeli'] = $this->model()->getThisQuery("SELECT * FROM `pembelian` beli JOIN produk b ON b.id_produk = beli.id_produk WHERE (tgl_pembelian BETWEEN '$tanggal1' AND '$tanggal2')");//query laporannya beli
			$this->view('template/headerlap');
			$this->view('laporan/lapbeli', $data);
			$this->view('template/footerlap');
		} else if($type=='Jual') {
			$data['lapjual'] = $this->model()->getThisQuery("SELECT * FROM `penjualan` jual JOIN produk b ON b.id_produk = jual.id_produk WHERE (tgl_penjualan BETWEEN '$tanggal1' AND '$tanggal2')");;//query laporannya jual
			$this->view('template/headerlap');
			$this->view('laporan/lapjual', $data);
			$this->view('template/footerlap');
		}else{
			$data['keuangan'] = $this->model()->getThisQuery("SELECT * FROM `penjualan` jual JOIN produk b ON b.id_produk = jual.id_produk WHERE (tgl_penjualan BETWEEN '$tanggal1' AND '$tanggal2')");;//query laporannya keuangan
			$this->view('template/headerlap');
			$this->view('laporan/keuangan', $data);
			$this->view('template/footerlap');
		}
	}
}