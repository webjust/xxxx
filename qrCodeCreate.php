<?php
include './wxModel.php';
include './vendor/autoload.php';

$wxObj = new wxModel();
//dump($wxObj->getQrCode());

/*
扫描微信二维码，接收到的xml数据格式
<xml><ToUserName><![CDATA[gh_0383b7e5223f]]></ToUserName>
<FromUserName><![CDATA[oQjWLxJyfW4XHNfBD4RoPZAD7gy8]]></FromUserName>
<CreateTime>1496716442</CreateTime>
<MsgType><![CDATA[event]]></MsgType>
<Event><![CDATA[SCAN]]></Event>
<EventKey><![CDATA[777]]></EventKey>
<Ticket><![CDATA[gQHk7zwAAAAAAAAAAS5odHRwOi8vd2VpeGluLnFxLmNvbS9xLzAyV05zWjV6MlJlYjQxb194dE5wMTUAAgQ-FDZZAwQAjScA]]></Ticket>
</xml>
*/