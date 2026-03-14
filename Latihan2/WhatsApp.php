<?php
require_once "Notifikasi.php";

class WhatsApp implements Notifikasi {

    public function kirim(){
        echo "Notifikasi dikirim melalui WhatsApp <br>";
    }

}