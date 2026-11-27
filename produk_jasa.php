<?php

//panggil file propertyconstant
require('./jasa.php');

use pbo\Marketplace\jasa;
//object
$produk = new jasa ();

$produk->setkode('p0001')->setnama('laptop')->setharga(10000000)->setstok(5);

//hasil
echo "produk: ". $produk->getnama();
echo "<br/>";

echo "harga: ". $produk->getharga();
echo "<br/>";

echo "stok: ". $produk->getstok();
echo "<br/>";


echo "pajak: ". $produk->pajak()."%";
echo "<br/>";
echo "<br/>";
echo "total harga setelah pajak: Rp.". $produk->total();
echo "<br/>";
echo "metode pembayaran: ". $produk->payment('qris');