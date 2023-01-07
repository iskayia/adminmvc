<?php

class beli extends Controller
{
	public	function index()
	{
		$this->view('template/header');
		$this->view('beli/pembelian');
		$this->view('template/footer');
	}

	public function tambah()
	{
		$this->view('template/header');
		$this->view('beli/add_beli');
		$this->view('template/footer');	
	}

	public function add_beli()
	{
		
		$idproduk = $_REQUEST['id_produk'];
		$jumlah_pembelian = $_REQUEST['jumlah_pembelian'];
		$tgl_pembelian = $_REQUEST['tgl_pembelian'];
		$harga_pembelian = $_REQUEST['harga_pembelian'];
		$total = count($idproduk);

		// diloop datanya
		for($key=0;$key<$total;$key++){
			$beli = array(
				//'id_pembelian' => 'B' . date('ymdHis') . $key,//idi nya dari Beli  + tahun + bulan + tgl + jam + menit +detik+key
				'id_produk' => $idproduk[$key],
				'jumlah_pembelian' =>  $jumlah_pembelian[$key],
				'tgl_pembelian' => $this->_ubahtanggal( $tgl_pembelian[$key]),
				'harga_pembelian' =>  $harga_pembelian[$key]
			);

			$stokawal = $this->model()->getThisQuery("SELECT stok FROM produk WHERE id_produk = '".$idproduk[$key]."'");
			$stokakhir = array('stok' => $stokawal[0]['stok'] + $jumlah_pembelian[$key]);
			// save
			$this->model()->insertTable('pembelian', $beli);
			$this->model()->updateRecord('produk', $stokakhir, ['id_produk'=> $idproduk[$key]]);// jangan lupa titik koma
		}
		Redirect('beli');
		

	
	}

	private function _ubahtanggal($date)
	{
		$bulan = explode('|', 'January|February|March|April|May|June|July|August|September|October|November|December');
		$dates= explode(' ', $date);
		return $dates[2] . '-' . (array_search($dates[1], $bulan) + 1) . '-' . $dates[0];
	}

	public function del($id)
	{
		$pembelian= $this->model()->getWhere('pembelian', 'id_pembelian', $id);
		$stokawal = $this->model()->getThisQuery("SELECT stok FROM produk WHERE id_produk = '".$pembelian['id_produk']."'");
		$stokakhir = array('stok' => $stokawal[0]['stok'] - $pembelian['jumlah_pembelian']);
		$this->model()->updateRecord('produk', $stokakhir, ['id_produk'=> $pembelian['id_produk']]);
		$this->model()->deleteRecord('pembelian','id_pembelian',$id);
		Redirect('beli');
	}

	public function edit($id)
	{

		$data['beli'] = $this->model()->getWhere('pembelian', 'id_pembelian', $id);

		$this->view('template/header');
		$this->view('beli/edit_beli', $data);
		$this->view('template/footer');
	}

	public function svedit($id){
		$beli = array(
			'jumlah_pembelian' => $_REQUEST['jumlah_pembelian'],
			'tgl_pembelian' => $this->_ubahtanggal($_REQUEST['tgl_pembelian']),
			'harga_pembelian' => $_REQUEST['harga_pembelian']
		);
		$pembelian= $this->model()->getWhere('pembelian', 'id_pembelian', $id);
		$stokawal = $this->model()->getThisQuery("SELECT stok FROM produk WHERE id_produk = '".$pembelian['id_produk']."'");
		$stokakhir = array('stok' => $stokawal[0]['stok'] - $pembelian['jumlah_pembelian']+ $_REQUEST['jumlah_pembelian']);
		$this->model()->updateRecord('pembelian', $beli, ['id_pembelian'=> $id]);
		$this->model()->updateRecord('produk', $stokakhir, ['id_produk'=> $pembelian['id_produk']]);
Redirect('Beli');
	}
}


?>