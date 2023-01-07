<?php

class pel extends Controller
{
	public	function index()
	{
		$data['DataPelanggan'] = $this->model()->getThisQuery('SELECT * FROM pelanggan');
		$this->view('template/header');
		$this->view('pelanggan/pelanggan', $data);
		$this->view('template/footer');
	}

	public function del($id)
	{
		$this->model()->deleteRecord('pelanggan','id_pelanggan',$id);
		Redirect('pel');
	}

	public function edit($id)
	{

		$data['pelanggan'] = $this->model()->getWhere('pelanggan', 'id_pelanggan', $id);

		$this->view('template/header');
		$this->view('pelanggan/edit_pelanggan', $data);
		$this->view('template/footer');
	}

	public function svedit($id){
		$pelanggan = array(
			'nama_pelanggan' => $_REQUEST['nama_pelanggan'],
			'email_pelanggan' => $_REQUEST['email_pelanggan'],
            'kontak_pelanggan' => $_REQUEST['kontak_pelanggan'],
			'alamat_pelanggan' => $_REQUEST['alamat_pelanggan']
		);
		$this->model()->updateRecord('pelanggan', $pelanggan, ['id_pelanggan'=> $id]);
		Redirect('pel');
	}

}


?>