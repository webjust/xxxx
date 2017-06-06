<?php
include './wxModel.php';
include './vendor/autoload.php';

$wxObj = new wxModel();
$appid = $wxObj->appid;
$time = time();
$nonceStr = $wxObj->createNonceStr();
$signature = $wxObj->getJsApiTicket();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>分享到朋友圈</title>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
</head>
<body>
<script>
    wx.config({
        debug: true, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: '<?php echo $appid; ?>', // 必填，公众号的唯一标识
        timestamp: <?php echo $time; ?>, // 必填，生成签名的时间戳
        nonceStr: '<?php echo $nonceStr; ?>', // 必填，生成签名的随机串
        signature: '<?php echo $signature; ?>',// 必填，签名，见附录1
        jsApiList: [
            'onMenuShareTimeline'
        ] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
    });

    wx.ready(function(){
        // config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready函数中。
    });

    wx.error(function(res){
        // config信息验证失败会执行error函数，如签名过期导致验证失败，具体错误信息可以打开config的debug模式查看，也可以在返回的res参数中查看，对于SPA可以在这里更新签名。
    });

    wx.onMenuShareTimeline({
        title: '最近微信加了一个妹子，妹子看了我的帅照，然后说想睡我', // 分享标题
        link: 'http://qq.bls666.com/share.php', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
        imgUrl: 'http://n.sinaimg.cn/sports/20170606/Bqqv-fyfuzmy2122558.jpg', // 分享图标
        success: function () {
            // 用户确认分享后执行的回调函数
        },
        cancel: function () {
            // 用户取消分享后执行的回调函数
        }
    });
</script>
</body>
</html>