<?php

class Minuman{
    public $name;
    public $ukuran;
    public $harga;

    function __construct($name, $ukuran,$harga) {
        $this->name   = $name;
        $this->ukuran = $ukuran;
        $this->harga  = $harga;
    }

    function pesanan() {
        return $this->name . " - ". $this->ukuran . " - Rp. " . $this->harga;
    }
}

$redvelvet = new Minuman("Red velvet", "Large", "25.000");
// $redvelvet->name  = "Red Velvet";
// $redvelvet->harga = "20.000";

echo $redvelvet->pesanan();

?>