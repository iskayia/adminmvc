<?php

class ProdukModel
{
    private $dbase;

    public function __construct()
    {
        $this->dbase = new Database;
    }

    public function load()
    {
    	$Query= 'SELECT id_produk,nama_supplier,nama,stok FROM produk INNER JOIN supplier ON produk.id_supplier = supplier.id_supplier';
    	$this->dbase->Query($Query);
        return $this->dbase->resultSet();
    }
}