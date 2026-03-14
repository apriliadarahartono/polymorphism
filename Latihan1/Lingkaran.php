<?php
require_once "BangunDatar.php";

class Lingkaran extends BangunDatar {

    public $r;

    public function __construct($r){
        $this->r = $r;
    }

    public function hitungLuas(){
        return pi() * $this->r * $this->r;
    }

}