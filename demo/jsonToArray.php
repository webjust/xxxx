<?php
include '../vendor/autoload.php';

/*
touser	是	接收者openid
template_id	是	模板ID
url	否	模板跳转链接
miniprogram	否
跳小程序所需数据，不需跳小程序可不用传该数据
appid	是
所需跳转到的小程序appid（该小程序appid必须与发模板消息的公众号是绑定关联关系）
pagepath	是
所需跳转到小程序的具体页面路径，支持带参数,（示例index?foo=bar）
data	是	模板数据
 */

$json = <<<EOT
{
   "touser":"oQjWLxJyfW4XHNfBD4RoPZAD7gy8",
   "template_id":"M7BF-JloPJ-KBW583F75PDoNYc9PAW0xBehYaC9OiCI",
   "data":{
           "first": {
               "value":"恭喜你购买成功！",
               "color":"#173177"
           },
           "keynote1":{
               "value":"巧克力",
               "color":"#173177"
           },
           "keynote2": {
               "value":"39.8元",
               "color":"#173177"
           },
           "keynote3": {
               "value":"2014年9月22日",
               "color":"#173177"
           },
           "remark":{
               "value":"欢迎再次购买！",
               "color":"#173177"
           }
   }
}
EOT;

/*
1、模板消息调用时主要需要模板ID和模板中各参数的赋值内容；
2、模板中参数内容必须以".DATA"结尾，否则视为保留字；
3、模板保留符号"{{ }}"。



购买成功通知
{{first.DATA}}
商品名称：{{keynote1.DATA}}
消费金额：{{keynote2.DATA}}
购买时间：{{keynote3.DATA}}
{{remark.DATA}}
 */

$arr = json_decode($json, 1);

dump($arr);

