<?php

class sup extends Controller
{
	public	function index()
	{
		$data['DataSupplier'] = $this->model()->getThisQuery('SELECT * FROM supplier');
		$this->view('template/header');
		$this->view('supplier/supplier', $data);
		$this->view('template/footer');
	}

    public function tambah()
	{
		$this->view('template/header');
		$this->view('supplier/add_supplier');
		$this->view('template/footer');
	}
    public function addsup(){
        $Supplier = array(
			'nama_supplier' => $_REQUEST['nama_supplier'],
			'kontak_supplier' => $_REQUEST['kontak_supplier'],
			'alamat_supplier' => $_REQUEST['alamat_supplier'],
		);
        if($this->model()->insertTable('supplier', $Supplier)){
			$_SESSION['success'] = true;
			$_SESSION['message'] = "sukses menambahkkan barang";
			Redirect('sup');
		}else{
			$_SESSION['error'] = true;
			$_SESSION['message'] = "gagal menambahkkan barang";
			Redirect('sup/tambah');
		}

    }

	public function del($id)
	{
		$this->model()->deleteRecord('supplier','id_supplier',$id);
		Redirect('sup');
	}

	public function edit($id)
	{

		$data['supplier'] = $this->model()->getWhere('supplier', 'id_supplier', $id);

		$this->view('template/header');
		$this->view('supplier/edit_supplier', $data);
		$this->view('template/footer');
	}

	public function svedit($id){
		$supplier = array(
			'nama_supplier' => $_REQUEST['nama_supplier'],
            'kontak_supplier' => $_REQUEST['kontak_supplier'],
			'alamat_supplier' => $_REQUEST['alamat_supplier']
		);
		$this->model()->updateRecord('supplier', $supplier, ['id_supplier'=> $id]);
		Redirect('sup');
	}

}


?>