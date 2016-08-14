<?php
namespace Home\Controller;
use Think\Controller;
class CaseController extends BaseController {
    public function index(){
     $castinfo  = M('cast')->select();
        $this->assign('castinfo',$castinfo);

     $this->display();

    }

}