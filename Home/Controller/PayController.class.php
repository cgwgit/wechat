<?php
//曹国伟
//2017年1月11日08:42:42
namespace Home\Controller;
use Think\Controller;
class PayController extends Controller {
	//展示支付订单页面
	public function getpay(){
	   $post = I('post.');
       $info = M('chargedetail')->where(array('cid' => $post['cid'], 'order_status' =>'0'))->find();
       $this->assign('info', $info);
       $this->display();
	}
	//支付宝
	public function alipay(){
		// $post = I('post.');
        $rst = M('chargedetail')->where(array('order_sn' => '300537461160735000'))->find();
        if($rst){
        	$config = array(
        		'alipay_service' => C('alipay_service'),
                'alipay_account' =>C('alipay_account'),
                'alipay_key' => C('alipay_key'),
                'alipay_partner' => C('alipay_partner')
        		);
		    $rst['payment_config'] = $config;
		    $order_info['subject'] = '前程保保单支付';
		    $order_info['order_type'] = 'qiancheng';
		    $order_info['api_pay_amount'] = $rst['allcount'];
		    $order_info['pay_sn'] = $rst['order_sn'];
		    $order_info['body'] = "参保用户ID：{$rst['cid']}, 金额：{$rst['allcount']},订单生成时间：" . time();
		    $payment_api = new \Think\Pay\alipay($rst,$order_info);
		    @header("Location: ".$payment_api->get_payurl()); 
        }
	    
	}

	//支付宝异步通知回调(在支付宝类中设置改毁掉地址)
    public function notify(){
        if(I('trade_status') == 'TRADE_SUCCESS'){
        	//取出查看支付的这条订单
			$check = M('chargedetail')->where(array('order_sn' => I('out_trade_no')))->find();
			//如果没有支付，修改支付状态，支付成功
			if(!$check['paystatus']){
				$data['payid'] = I('trade_no');
				$data['order_status'] = 1;
				$data['paytime'] = time();
				$res = M('chargedetail')->where(array('order_sn' => I('out_trade_no')))->save($data);
				if(res){
					echo 'success';exit();
				}
			}
        }
		
	}
	//微信支付
	public function wxpay(){
		$rst = M('chargedetail')->where(array('order_sn' => '590537445684296000'))->find();
		if($rst){
			$config = array(
        		'appid' => C('appid'),
                'mchid' =>C('mchid'),
                'key' => C('key')
        		);
		    $rst['payment_config'] = $config; 
	    	$order_info['subject'] = '前程保保单支付'.$rst['order_sn'];
	        $order_info['order_type'] = 'baodan_order';
	        $order_info['pay_sn'] = $rst['order_sn'];
	        $order_info['api_pay_amount'] = $rst['allcount'];
	        // Vendor('wxpay.wxpay');
	        Vendor('wx.example.wxpay');
	        $payment_api = new \wxpay($rst,$order_info);//使用构造方法初始化一些变量
	        // $this->assign('pay_url',base64_encode(encrypt($payment_api->get_payurl(),MD5_KEY)));
	        // $this->display();
	        $payment_api->getPay();
		}
	}
	  //微信二维码
	  public function qrcode(){
        $data = base64_decode($_GET['data']);
        $data = decrypt($data,MD5_KEY,30);
        // var_dump($data);die;
        Vendor('wxpay.phpqrcode.phpqrcode');
        \QRcode::png($data);
    }
         //微信回调
    	public function wxnotify(){
		$xml = $GLOBALS['HTTP_RAW_POST_DATA'];
		$array = $this->xmlToArray($xml);
		file_put_contents('text.txt', json_encode($array));
		if($array['result_code'] == 'SUCCESS'){
			$check = M('zxzq_wallet_record')->where(array('paysn' => $array['out_trade_no']))->find();
			if(!$check['paystatus']){
				$data['payid'] = $array['transaction_id'];
				$data['paystatus'] = 1;
				$data['paytime'] = date('Y-m-d H:i:s');
				
				$res = M('zxzq_wallet_record')->data($data)->where(array('paysn' => $array['out_trade_no']))->save();
				$redata = M('zxzq_wallet_record')->where(array('paysn' => $array['out_trade_no']))->find();
				$wall_data = M('zxzq_wallet')->where(array('memberid'=>$redata['memberid']))->find();
				$savedata = array(
					'money' => $wall_data['money'] + $redata['paymoney']
				);
				$wres = M('zxzq_wallet')->data($savedata)->where(array('memberid'=>$redata['memberid']))->save();
				if(res && $wres){
					echo 'success';exit();
				}
			}
		}
	}
	
	//将XML转为array
    public function xmlToArray($xml)
    {    
        //禁止引用外部xml实体
        libxml_disable_entity_loader(true);
        $values = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);        
        return $values;
    }
}