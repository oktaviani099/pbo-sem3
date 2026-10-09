<?php

class Produk{

    //property
    public string $kode;
    public string $nama;
    public string $harga;
    public string $stok;

    //constant
    public const PAJAK = 0.11;

}

//object
$produk = new Produk ();
$produk->kode = "P001";
$produk->nama = "Laptop";
$produk->harga = "10000000";
$produk->stok = "5";

//hitung pajak
$pajak = Produk::PAJAK * 100; //11%
$jumlahPajak = $produk->harga * Produk::PAJAK; //1.100.000

//total
$total = $produk->harga + $jumlahPajak; 

//hasil
echo "Produk : ". $produk->kode; 
echo "<br>";

echo "Harga : ". $produk->harga; 
echo "<br>";

echo "Stok : ". $produk->stok; 
echo "<br>";

echo "Pajak : ". $pajak; 
echo "<br>"; 
echo "<br>";
echo "Total harga setelah pajak: Rp.". $total; 