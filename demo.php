<?php
include "./vendor/autoload.php";
include './wxModel.php';

$wxObj = new wxModel();
$url = $wxObj->getUserInfo();