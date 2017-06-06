<?php 
include './vendor/autoload.php';
include './wxModel.php';

// 实例化错误显示类
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// 实例化微信SDK
$wxObj = new wxModel();
$userinfo = $wxObj->getUserDetail();

// 用户信息
$openid = $userinfo['openid'];
$nickname = $userinfo['nickname'];
$sex = $userinfo['sex'];
$province = $userinfo['province'];
$city = $userinfo['city'];
$country = $userinfo['country'];
$headimgurl = $userinfo['headimgurl'];
$privilege = $userinfo['privilege'];

$data = array(
	'openid' => $openid,
	'nickname' => $nickname,
	'sex' => $sex,
	'province' => $province,
	'city' => $city,
	'country' => $country,
	'headimgurl' => $headimgurl,
	'privilege' => $privilege,
);

include './db.php';
$database->insert('user', $data);

dump($userinfo);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
<h1>LOGIN PAGE</h1>	
</body>
</html>