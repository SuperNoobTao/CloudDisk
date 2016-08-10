<?php
namespace Admin\Controller;
use Think\Controller;
class CastManagerController extends BaseController
{
    public function castlist()
    {
        $castinfo = M('cast')->select();
        $this->assign('castinfo', $castinfo);

        $this->display();
    }

    public function add()
    {
        //新增案例
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data=$_POST;
            $upload=new \Think\Upload();
            $upload->maxsize   =     314572811 ;
            //$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =     './Public/Home/images/'; // 设置附件上传根目录
            $upload->savePath  =     ''; // 设置附件上传（子）目录
            $upload->saveName  =     '';// 设置上传后的名字

            // 上传文件
            $info   =   $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功
                dump($info);
                $data['siteimg']='images/'.$info['siteimg']['savepath'].$info['siteimg']['savename'];
                $save=M('cast')->add($data);
                if($save){
                    $this->success('添加成功',U('castlist'));
                }
                else{
                    $this->error('添加失败',U(''));
                }
            }
        } else {
            $this->display();
        }
    }

    public function changeStatus()
    {
        $id['id']=I('get.id');
        $castmes=M('cast')->where($id)->find();
        if ($castmes) {
            //存在记录
            if ($castmes['status'] == 1) {
                $save['status'] = 0;
                $mess="禁用成功";
            } else {
                $save['status'] = 1;
                $mess="启用成功";
            }
            $saveresult=M('cast')->where($id)->save($save);
            if ($saveresult) {
                $this->success($mess,U('castlist'));
            }else{
                $this->error('修改状态失败');
            }
        }else{
            $this->error('该记录不存在，请刷新重试');
        }


    }



}