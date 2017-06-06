<?php
include './wxModel.php';

$wxObj = new wxModel();

// 菜单的数据
$arr = array(
    'button' => array(
        array(
            "type" => "click",
            "name" => urlencode("图文列表"),
            "key" => "20000"
        ),
        array(
            "name" => urlencode("下拉菜单"),
            "sub_button" => array(
                array(
                    "type" => "click",
                    "name" => urlencode("关于我们"),
                    "key" => "30000"
                ),
                array(
                    "type" => "click",
                    "name" => urlencode("帮助信息"),
                    "key" => "40000"
                ),
                array(
                    "type" => "view",
                    "name" => urlencode("我的商城"),
                    "url" => "https://kdt.im/Kok8Nr"
                )
            )
        ),
        array(
            "type" => "view",
            "name" => urlencode("网易新闻"),
            "url" => "http://3g.163.com/"
        )
    )
);

// arr转换为json
$json = urldecode(json_encode($arr));

// 访问自定义菜单的接口
// http请求方式：POST（请使用https协议） https://api.weixin.qq.com/cgi-bin/menu/create?access_token=ACCESS_TOKEN
$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$wxObj->getAccessToken();

// curl post请求
$ret = $wxObj->getData($url, 'POST', $json);
echo $ret;