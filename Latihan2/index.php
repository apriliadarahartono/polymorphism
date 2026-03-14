<?php

require_once "Email.php";
require_once "SMS.php";
require_once "WhatsApp.php";

$email = new Email();
$sms = new SMS();
$wa = new WhatsApp();

$email->kirim();
$sms->kirim();
$wa->kirim();

?>