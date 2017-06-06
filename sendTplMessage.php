<?php 
include './vendor/autoload.php';
include './wxModel.php';

// 实例化错误显示类
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// 实例化微信SDK
$wxObj = new wxModel();
$wxObj->sendTplMessage();