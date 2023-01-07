<?php
 
 class pim extends Controller
 {
 	public function index()
 	{	
 		$this->view('template/headerpim');
		$this->view('pimpinan/chartpim');
		$this->view('template/footerpim');
		
 	} 

 	public function konfirmasi()
 	{
 		$this->view('template/headerpim');
		$this->view('pimpinan/konfirpim');
		$this->view('template/footerpim');
 	}

 	public function laporan()
 	{
 		$this->view('template/headerpim');
		$this->view('pimpinan/lappim');
		$this->view('template/footerpim');
 	}

 	public function ubah_status($idproduk, $status)
    {

        $update = $this->model()->updateRecord('produk', ['status' => $status], ['id_produk'=> $idproduk]);
        
        Redirect('/');

    }
 }