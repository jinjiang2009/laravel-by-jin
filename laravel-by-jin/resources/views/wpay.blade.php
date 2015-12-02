<button type="button" onclick="WXPayment()">
    支付 ￥<?php echo 1; ?> 元
</button>
<script>
    var WXPayment = function () {
        if (typeof WeixinJSBridge === 'undefined') {
            alert('请在微信在打开页面！');
            return false;
        }
        WeixinJSBridge.invoke(
                'getBrandWCPayRequest', <?php echo $payment->getConfig(); ?>, function (res) {
                    switch (res.err_msg) {
                        case 'get_brand_wcpay_request:cancel':
                            alert('用户取消支付！');
                            break;
                        case 'get_brand_wcpay_request:fail':
                            alert('支付失败！（' + res.err_desc + '）');
                            break;
                        case 'get_brand_wcpay_request:ok':
                            alert('支付成功！');
                            break;
                        default:
                            alert(JSON.stringify(res));
                            break;
                    }
                }
        );
    }
</script>