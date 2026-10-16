<?php

class Produk{

    //property
    public string $kode;
    public string $nama;
    public string $harga;
    public string $stok;

    //constant
    public const PAJAK = 0.11;

    public function pajak() {
        return self::PAJAK * 100; //11%
    } 

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

//object
$produk = new Produk ();
$produk->kode = "P001";
$produk->nama = "Laptop";
$produk->harga = "10000000";
$produk->stok = "5";

//hasil
echo "Produk : ". $produk->nama; 
echo "<br>";

echo "Harga : ". $produk->harga; 
echo "<br>";

echo "Stok : ". $produk->stok; 
echo "<br>";

echo "Pajak : ". $produk->pajak() ,"%"; 
echo "<br>"; 
echo "<br>";
echo "Total harga setelah pajak: Rp.". $produk->total(); 