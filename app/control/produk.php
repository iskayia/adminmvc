<?php

class produk extends Controller
{
	public	function index()
	{
		$data['DataProduk'] = $this->model()->getThisQuery('SELECT * FROM produk INNER JOIN supplier ON produk.id_supplier = supplier.id_supplier ORDER BY id_produk DESC');
		$this->view('template/header');
		$this->view('produk/data', $data);
		$this->view('template/footer');
	}

	public function tambah()
	{
		$this->view('template/header');
		$this->view('produk/add_produk');
		$this->view('template/footer');
	}

	public function add()
	{
		$fileUpload = new FileUpload();
		$file_gambar = $_FILES["gambar"];
		$arrayFileUpload = $fileUpload->UploadFile($file_gambar);
		if($arrayFileUpload['status'] == 0) {
			$_SESSION['error'] = true;
			$_SESSION['message'] = "File yang diupload bukan gambar";
			Redirect('produk/tambah');
		}

		// $target_dir = "uploads/";
		// $nama_gambar = uniqid() . basename($_FILES["gambar"]["name"]);
		// $target_file = $target_dir . $nama_gambar;
		// $uploadOk = 1;
		// // Check if image file is a actual image or fake image
		// $check = getimagesize($_FILES["gambar"]["tmp_name"]);
		// if($check !== false) {
		// 	$uploadOk = 1;
		// } else {
		// 	$uploadOk = 0;
		// }

		// if($check == 0) {
		// 	$_SESSION['error'] = true;
		// 	$_SESSION['message'] = "File yang diupload bukan gambar";
		// 	Redirect('produk/tambah');
		// }

		// Move the temp image file to the images/ directory
		// move_uploaded_file(
		// 	// Temp image location
		// 	$_FILES["gambar"]["tmp_name"],
		// 	// New image location
		// 	$target_file
		// );

		
		

		$Produk = array(
			'id_produk' => 'PF' . date('ymdHis'),
			'id_supplier' => $_REQUEST['nama_supplier'],
			'nama_produk' => $_REQUEST['nama_produk'],
			'stok' => $_REQUEST['stok'],
			'harga_produk' => $_REQUEST['harga_produk'],
			'gambar_produk' => $arrayFileUpload['file'],
			'status' => 0
		);

		if($this->model()->insertTable('produk', $Produk)){
			$_SESSION['success'] = true;
			$_SESSION['message'] = "sukses menambahkkan barang";
			Redirect('produk');
		}else{
			$_SESSION['error'] = true;
			$_SESSION['message'] = "gagal menambahkkan barang";
			Redirect('produk/tambah');
		}
	}

	public function del($id)
	{
		$this->model()->deleteRecord('produk','id_produk',$id);
		Redirect('produk');
	}

	public function edit($id)
	{

		$data['produk'] = $this->model()->getWhere('produk', 'id_produk', $id);

		$this->view('template/header');
		$this->view('produk/edit_produk', $data);
		$this->view('template/footer');
	}

	public function svedit($id){
		$produk = array(
			'id_supplier' => $_REQUEST['nama_supplier'],
			'nama_produk' => $_REQUEST['nama_produk'],
			'stok' => $_REQUEST['stok'],
			'harga_produk' => $_REQUEST['harga_produk']
		);
		
		if(file_exists($_FILES['gambar']['tmp_name']) && is_uploaded_file($_FILES['gambar']['tmp_name'])) 
		{
			$fileUpload = new FileUpload();
			$file_gambar = $_FILES["gambar"];
			$arrayFileUpload = $fileUpload->UploadFile($file_gambar);
			if($arrayFileUpload['status'] == 0) {
				$_SESSION['error'] = true;
				$_SESSION['message'] = "File yang diupload bukan gambar";
				Redirect('produk/tambah');
			}

			$produk['gambar_produk'] = $arrayFileUpload['file'];
		}


		$this->model()->updateRecord('produk', $produk, ['id_produk'=> $id]);
		Redirect('produk');
	}

	public function gambar($file) {
		// var_dump("OII");die();
		$file_out = "uploads/" . $file;//"uploads/p-soft.jpg"; // The image to return

		if (file_exists($file_out)) {

		$image_info = getimagesize($file_out);

		//Set the content-type header as appropriate
		header('Content-Type: ' . $image_info['mime']);

		//Set the content-length header
		header('Content-Length: ' . filesize($file_out));

		//Write the image bytes to the client
		readfile($file_out);
		}
		else { // Image file not found

			header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");

		}
	}

}


?>