<?php
include './wxModel.php';
include './vendor/autoload.php';

$wxObj = new wxModel();
dump($wxObj->getQrCode());