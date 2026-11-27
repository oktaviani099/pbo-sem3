<?php

namespace Pbo\Marketplace;

require_once('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

class Jasa {

    use Produk;
    
    public function payment($tipe) {

        return match($tipe) {
            "virtual" => "vitual account",
            "qris" => "QRIS",
            default => "hanya bisa pakai va dan qris"
        };

    }

}