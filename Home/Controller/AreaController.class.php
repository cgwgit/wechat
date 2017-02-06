<?php
//曹国伟
//2017年1月14日10:02:31
namespace Home\Controller;
use Think\Controller;
class AreaController extends Controller{
	    //三级联动地区
    //得到所有的省份(一级)
    public function getProvinces(){
       $provinces = M('area')->where(array('type' =>1))->field('id,name')->select();
       echo json_encode($provinces);
    }
    //得到城市(二级)
    public function getCitys(){
       $pid = I('get.pid');
       $citys = M('area')->where(array('parent_id' => $pid))->field('id,name')->select();
       echo json_encode($citys);
    }
    //得到县(三级)
    public function getCountys(){
       $xpid = I('get.xpid');
       $countys = M('area')->where(array('parent_id' => $xpid))->field('id,name')->select();
       echo json_encode($countys);  
    }
}