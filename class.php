<?php

class Minuman{
    public $name;
    public $ukuran;
    public $harga;

    function pesanan() {
        return $this->name . " - ". $this->ukuran . " - Rp. " . $this->harga;
    }
}

$redvelvet = new Minuman();
$redvelvet->name   = "Red Velvet";
$redvelvet->ukuran = "Large";
$redvelvet->harga  = "20.000";

echo $redvelvet->pesanan();

?>