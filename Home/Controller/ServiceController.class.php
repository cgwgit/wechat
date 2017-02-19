<?php
//曹国伟
//2017年2月7日10:31:23
namespace Home\Controller;
use Think\Controller;
class ServiceController extends Controller {
    public function index(){
    	$this->display();
    }
    //服务内容
    public function fuwuneirong(){
    	$this->display();
    }

    //关于我们
    public function guanyuwomen(){
        $this->display();
    }
    //联系我们
    public function lianxiwomen(){
        $this->display();
    }
    //首次参保问题
    public function shoucicanbaowenti(){
       $this->display();
    }
    //退款问题
    public function tuikuanwenti(){
       $this->display();
    }
    //续保问题
    public function xubaowenti(){
       $this->display();
    }
    //支付问题
    public function zhifuwenti(){
       $this->display();
    }
        //选择参保城市
    public function selectCity(){
        $id = I('get.cid');
        if(IS_POST){
          $post = I('post.');
          $area = M('area')->where(array('id' => $post['city']))->find();
          if($post['jid']==2){
            $this->assign('city',$area['name']);
            $this->display('Socialfare/jisuan');exit;
          }
          $rst = M('city')->where(array('cid' =>$id))->find();
          if($rst){
           $data = array(
             'id' => $rst['id'],
             'city' => $area['name']
            );
          $result = M('city')->save($data);
          if($result){
            $this->redirect('Social/social_buy',array('cid' => $id));exit;
          }
          }else{
            $data = array('cid' => $id,'city' => $area['name']);
            $result = M('city')->add($data);
            if($result){
                $this->redirect('Social/social_buy',array('cid' => $id));exit;
            }
          }
        }
          if(I('get.jid')==2){
            $this->assign('jid',I('get.jid'));
             $this->display();exit;     
          }
          if(empty($id)){
            $this->error('请添加参保人信息',U('Social/social_buy'), 1);exit;
          }
          $this->assign('id', $id);
          $this->display();
    }

    //协议
    public function qianchenbaofuwuxieyi(){
      $this->display();
    }

    //服务说明
    public function fuwushuoming(){
      $this->display();
    }

    //前程保必读
    public function bidu(){
      $this->display();
    }
    //社保周刊
    public function shebaozhoukan(){
      $this->display();
    }

    //我的反馈
    public function woyaofankui(){
    	if(IS_POST){
          $post = I('post.');
          !empty($post['content']) ? $content = substr($post['content'],0,50) : $err = '反馈内容不能为空';
          $pattern = "/[a-zA-Z0-9][a-zA-Z0-9_\\-\\.]{5,19}@(?:[a-zA-Z0-9\\-]+\\.)+[a-zA-Z]+/";
           preg_match("/^1[3578][0-9]{9}$/", $post['tel']) || preg_match($pattern, $post['tel']) ? $tel = trim($post['tel']) : $err = '请填写正确的手机号或邮箱';
           if($err){
           	$this->error($err, U('woyaofankui'), 1);exit;
           }
           $data = array(
                   'tel' => $tel,
                   'neirong' => $content
           	);
           $rst = M('fankui')->add($data);
           if($rst){
           	$this->success('提交成功，我们会及时处理',U('Index/index'),1);exit;
           }else{
           	$this->error('输入信息格式不正确，请认真填写',U('woyaofankui'),1);exit;
           }

    	}else{
    	  $this->display();
    	}
    	 
    }
}