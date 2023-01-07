<?php

class home extends Controller
{
    public function index()
    {

    	$islogin = false;
    	// baca session user id
    	if(isset($_SESSION['id_user'])) $islogin = true;

    	if(!$islogin){ // blm login
            $this->view('home/login');  
        } else {
            if($_SESSION['level'] == 'Pimpinan') { // untuk pimpinan
              $this->view('template/headerpim');
              $this->view('pimpinan/chartpim');
              $this->view('template/footer');
            }else{ // untuk admin
              $this->view('template/header');
              $this->view('home/index');
              $this->view('template/footer');
          }

      }
  }

  public function login()
  {   
    $_SESSION['level'] = "Admin";
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $password = md5($password);
		// var_dump($password);
    $Query= "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";

    $loginrequest =  $this->model()->getThisQuery($Query);
    	// var_dump($loginrequest);die();
    if(count($loginrequest) !== 0) {
      $_SESSION['id_user'] = $loginrequest[0]['id_user'];	
      $_SESSION['level'] = $loginrequest[0]['level'];
  }else{
      $_SESSION['msg'] = "Login Gagal";
  }

  Redirect('/');

}

public function ubah_status($idproduk, $status)
{

    $update = $this->model()->updateRecord('produk', ['status' => $status], ['id_produk'=> $idproduk]);
    if($_SESSION['level'] == 'Pimpinan') {
        Redirect('/pim');
    }else{
    Redirect('/');        
    }


}

public function logout()
{
  session_unset();
  Redirect('/');

}


public function regis()
{

}

}
