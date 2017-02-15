<?php
namespace Home\Controller;
use Think\Controller;
// use Think\Lib\Alidayu\SendMSM;
class ManagerController extends Controller {
	//用户登录页面
    public function login(){
       if(IS_POST){
	       trim(I('post.username')) ? $username = trim(I('post.username')) : $err = '用户名格式不正确';
	       trim(I('post.pwd')) ? $pwd = trim(I('post.pwd')) : $err = '密码格式不正确';
	       if($err){
	       	$this->error($err, U('login'), 2);exit;
	       }
	       if(is_numeric($username)){
	       $where = array(
	                'tel' => $username,
	                'pwd' => $pwd,
	       	);
	        }else{
            $where = array(
	                'username' => $username,
	                'pwd' => $pwd,
	       	);
	        }
	       $rst = M('user')->where($where)->find();
	       if($rst){
	       	 $re = M('login')->where(array('uname' => $rst['username']))->find();
	       	 //判断用户是否是首次登陆
	       	 if($re){
	       	 	$data = array(
	       	 		'id' => $re['id'],
	       	 		'logintime' => time()
	       	 		);
	       	 	M('login')->save($data);
	       	 }else{
               $datas = array(
               	     'logintime' => time(),
               	     'tel' => $rst['tel'],
                     'uname' => $rst['username'],  
               	);	
               M('login')->add($datas);
	       	 }
	         session('username', $username);
	         session('uid', $rst['id']);
	         $this->success('登录成功', U('Index/index'),2);
	         // $this->redirect('Index/index');
	       }else{
	         $this->error('用户名或密码不正确,请重新输入', U('login'), 2);
	       }
       }else{
       	$this->display();
       }
    }
    //用户注册
    public function register(){
       if(IS_POST){
       	   preg_match("/^1[3578][0-9]{9}$/", I('post.telphone')) ? $tel = trim(I('post.telphone')) : $err = '请填写正确的手机号';
       	   if($err){
       	   	   $this->error($err, U('register'), 1);exit;
       	   }
       	   // trim(I('post.telphone')) ? $tel = trim(I('post.telphone')) : $err = '输入的电话号码不正确';
       	   //判断用户手机号码是否注册过
       	   $result = M('user')->where(array('tel' => $tel))->find();
       	   if($result){
              $this->error('手机号码已注册过', U('register'), 1);exit;	
       	   }else{
       	   	if(trim(I('post.checkcode')) == cookie('code') && I('post.checkcode') !=NULL){
			     trim(I('post.pwd')) ? $pwd = trim(I('post.pwd')) : $err = '密码格式不正确';
		         if($err){
		       	   $this->error($err, U('register'), 1);exit;
		         }else{
		         	//传入要输出的位数
		           $username = GetfourStr(4);
		       	   $data = array(
		       		'tel' => $tel,
		       		'pwd' => $pwd,
		       		'username' => $username,
		       		'retime' => time()
		       		);
			       	$res = M('user')->add($data);
			       	if($res){
			       		$this->success('注册成功', U('login'), 1);exit;
			       	}else{
			       		$this->error('注册失败', U('register'), 1);exit;
			       	}
		         }
	       	  }else{
	       	   	$this->error('验证码不正确或已过期', U('register'), 1);exit;
	       	  }
       	   } 
       }else{
       	$this->display();
       }
    }

        //修改登录密码
    public function editpwd(){
    	if(IS_POST){
            preg_match("/^1[3578][0-9]{9}$/", I('post.telphone')) ? $telphone = trim(I('post.telphone')) : $err = '请填写正确的手机号';
            if($err){
                $this->error($err, U('editpwd'),1);exit;
            }
		   $telrst = M('user')->where(array('tel' => $telphone))->find();
		   if($telrst){
	           if(trim(I('post.checkcode')) == cookie('code') && I('post.checkcode') !=NULL){
	              $result = M('user')->where(array('tel' => $telphone))->find();
	              $pwd = I('post.pwd');
	              $data = array(
	                 'id' => $result['id'],
	                 'pwd' => $pwd
	              	);
	              $rst = M('user')->save($data);
	              if($rst){
	              	$this->success('密码修改成功', U('Manager/login'), 1);exit;
	              }else{
	              	$this->error('请输入注册手机号', U('Manager/editpwd'),1);exit;
	              }
	           }else{
	           	 $this->error('验证码不正确',U('Manager/editpwd'), 1);exit;
	           }
            }else{
            	$this->error('手机号不正确',U('Manager/editpwd'),1);exit;
            }	
    	}else{
    		$this->display();
    	}
    }

    //获取验证码的接口
    public function checkcode(){
    	$code = rand(1000,9999);
        session('code', $code);
        $to = $_GET['telphone'];
        // $code需要发送的验证码，1为验证码失效的时间为1分钟
        $datas = array($code,1);
        $tempId = 1;
        $accountSid= '8aaf070855c4a7270155ca34b0be09e6';
		//主帐号令牌,对应官网开发者主账号下的 AUTH TOKEN
		$accountToken= 'd85d9b1323a04280aa8921e2b5c1a2c8';
		//应用Id，在官网应用列表中点击应用，对应应用详情中的APP ID
		//在开发调试的时候，可以使用官网自动为您分配的测试Demo的APP ID
		$appId='8aaf070855c4a7270155ca34b11b09ec';
		//请求地址
		//沙盒环境（用于应用开发调试）：sandboxapp.cloopen.com
		//生产环境（用户应用上线使用）：app.cloopen.com
		$serverIP='sandboxapp.cloopen.com';
		//请求端口，生产环境和沙盒环境一致
		$serverPort='8883';
		//REST版本号，在官网文档REST介绍中获得。
		$softVersion='2013-12-26';
		/**
		  * 发送模板短信
		  * @param to 手机号码集合,用英文逗号分开
		  * @param datas 内容数据 格式为数组 例如：array('Marry','Alon')，如不需替换请填 null
		  * @param $tempId 模板Id,测试应用和未上线应用使用测试模板请填写1，正式应用上线后填写已申请审核通过的模板ID
		  */
        Vendor('duanxin.duanxin');
        $rest = new \REST($serverIP,$serverPort,$softVersion);
	    $rest->setAccount($accountSid,$accountToken);
	    $rest->setAppId($appId);
	    // 发送模板短信
	    $result = $rest->sendTemplateSMS($to,$datas,$tempId);
	    // var_dump($result);die;
	    if($result == NULL ) {
	       return false;
	    }
	    if($result->statusCode!=0) {
	       return false;
	    }else{
	        return true;
	    }
	}
    //用户找回密码
	public function forgetpwd(){
		if(IS_POST){
           if(trim(I('post.checkcode')) == cookie('code')){
             $tel = I('post.telphone');
             $xpwd = I('post.xpwd');
             $rst = M('user')->where(array('tel' => $tel))->save(array('pwd' => $xpwd));
             if($rst){
             	$this->success('密码修改成功', U('login'), 2);exit;
             }else{
             	$this->error('手机号不存在，请重新输入', U('forgetpwd'), 1);
             }
           }else{
           	 $this->error('验证码不正确或已过期，请重新输入', U('forgetpwd'), 1);
           }
		}else{
			$this->display();
		}
	}

	//阿里大鱼短信调用方法
	public function aliduanxin(){
		$code = rand(1000,9999);
		//code为要发送的验证码，product为模板内容中的标签
		$data = array('code' => "{$code}",'product' => '前程保');
		cookie('code', $code,3600);
		$datas = json_encode($data);
        $to = $_GET['telphone'];
        $alidayu = new \Think\Lib\Alidayu\SendMSM();
        $result = $alidayu->send($to,$datas);
        if($result->err_code == 0){
        	echo 1;
        }else{
        	echo $result->err_code;
        }
    }
    //用户退出页面
    public function loginout(){
    	session(null);
    	$this->redirect('login');
    }  
    
}