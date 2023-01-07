<?php

class jual extends Controller
{
	
	public	function index()
	{
		$data['DataJual']= $this->model()->getThisQuery('SELECT id_penjualan,nama_produk,jumlah_penjualan,tgl_penjualan,harga_produk FROM `penjualan` INNER JOIN produk on penjualan.id_produk=produk.id_produk  order by id_penjualan desc');
		$this->view('template/header');
		$this->view('jual/penjualan',$data);
		$this->view('template/footer');
	}

	public function tambah()
	{
		$this->view('template/header');
		$this->view('jual/add_jual');
		$this->view('template/footer');
	}

	public function addjual()
	{
		$jual = array(
			'id_penjualan' => 'J' . date('ymdHis'),
			'id_produk' => $_REQUEST['id_produk'],
			'jumlah_penjualan' => $_REQUEST['jumlah_penjualan'],
			'tgl_penjualan' => $this->_ubahtanggal($_REQUEST['tgl_penjualan']),
		);
		$stokawal = $this->model()->getThisQuery("SELECT stok FROM produk WHERE id_produk = '".$_REQUEST['id_produk']."'");

		$stokakhir = array('stok' => $stokawal[0]['stok'] - $_REQUEST['jumlah_penjualan']);



		if($this->model()->insertTable('penjualan', $jual) && $this->model()->updateRecord('produk', $stokakhir, ['id_produk'=> $_REQUEST['id_produk']])){
			Redirect('jual');
		}else{
			Redirect('jual/tambah');
		}
	}

	private function _ubahtanggal($date)
	{
		$bulan = explode('|', 'January|February|March|April|May|June|July|August|September|October|November|December');
		$dates= explode(' ', $date);
		return $dates[2] . '-' . (array_search($dates[1], $bulan) + 1) . '-' . $dates[0];
	}

	public function del($id)
	{
		$penjualan= $this->model()->getWhere('penjualan', 'id_penjualan' , $id); 
		$stokawal = $this->model()->getThisQuery("SELECT stok FROM produk WHERE id_produk = '".$penjualan['id_produk']."'");
		$stokakhir = array('stok' => $stokawal[0]['stok'] + $penjualan['jumlah_penjualan']);
		$this->model()->updateRecord('produk', $stokakhir, ['id_produk'=> $penjualan['id_produk']]);
		$this->model()->deleteRecord('penjualan','id_penjualan',$id);
		Redirect('jual');
	}

	public function edit($id)
	{
		$data['jual'] = $this->model()->getWhere('penjualan', 'id_penjualan', $id);
		$this->view('template/header');
		$this->view('jual/edit_jual', $data);
		$this->view('template/footer');
	}

	public function svedit($id)
	{
		$beli = array(
			'jumlah_penjualan' => $_REQUEST['jumlah_penjualan'],
			'tgl_penjualan' => $this->_ubahtanggal($_REQUEST['tgl_penjualan']),
		);
		$penjualan= $this->model()->getWhere('penjualan', 'id_penjualan' , $id); 
		$stokawal = $this->model()->getThisQuery("SELECT stok FROM produk WHERE id_produk = '".$penjualan['id_produk']."'");
		$stokakhir = array('stok' => $stokawal[0]['stok'] + $penjualan['jumlah_penjualan']- $_REQUEST['jumlah_penjualan']);
		$this->model()->updateRecord('penjualan', $beli, ['id_penjualan'=> $id]);
		$this->model()->updateRecord('produk', $stokakhir, ['id_produk'=> $penjualan['id_produk']]);
		
Redirect('Jual');
	}

}


?>
