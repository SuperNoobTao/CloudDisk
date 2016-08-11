<?php
namespace Admin\Controller;
use Think\Controller;
class CastManagerController extends BaseController
{
    public function castlist()
    {
        $castinfo = M('file')->select();
        $this->assign('castinfo', $castinfo);

        $this->display();
    }

    public function add()
    {
        //新增资源
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
                $data['path']='images/'.$info['siteimg']['savepath'].$info['siteimg']['savename'];
                $data['filename']=$info['siteimg']['savename'];
                $data['size']=$info['siteimg']['size'];
                $data['uploadtime'] = date('Y-m-d H:i:s',time());
                $save=M('file')->add($data);
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



   /**
    *下载资源
    **/
    public function download(){
        $uploadpath='./Public/Home/';//设置文件上传路径，服务器上的绝对路径

        $id=$_GET['id'];//GET方式传到此方法中的参数id,即文件在数据库里的保存id.根据之查找文件信息。
        if($id=='') //如果id为空而出错时，程序跳转到项目的Index/index页面。或可做其他处理。
        {$this->error('id为空',U('castlist'));
        }
        $file=D('file');//利用与表file对应的数据模型类FileModel来建立数据对象。
        $result= $file->find($id);//根据id查询到文件信息
        if($result==false) //如果查询不到文件信息而出错时，程序跳转到项目的Index/index页面。或可做其他处理
        {$this->error('查询不到文件信息',U('castlist'));
        }
        $path=$file->path;//文件保存名
        $filename=$file->filename;//文件原名
        $totalPath=$uploadpath.$path;//完整文件名（路径加名字）
        $http = new \Org\Net\Http;
        $http->download($totalPath, $filename);

    }


    /**
     * 获取一个资源的分享码 持续5秒
     * */
    public function share()
    {
        $id['id']=$_GET['id'];//GET方式传到此方法中的参数id,即文件在数据库里的保存id.根据之查找文件信息。
        $share = random(6,string,0);

        $filemes=M('file')->where($id)->find();
        if ($filemes) {
            $save[share]=$share;
        }else{
            $this->error('没有此文件',U('castlist'));
        }
        M('file')->where($id)->save($save);
        $this->success('分享码:'.$share,U('castlist'),5);
    }


    /**
     *根据分享码下载资源
     *
     * */
    public function downloadforshare()
    {
        $uploadpath='./Public/Home/';//设置文件上传路径，服务器上的绝对路径
        $share['share'] = I('post.share');
       //POST方式传到此方法中的参数share,即文件在数据库里保存的share.根据之查找文件信息。
        if($share['share']=='') //如果id为空而出错时，程序跳转到项目的Index/index页面。或可做其他处理。
        {$this->error('请输入分享码',U('castlist'));;
        }


        $file=D('file');//利用与表file对应的数据模型类FileModel来建立数据对象。
        $result= $file->where($share)->find();//根据分享码查询到文件信息

        if($result==false) //如果查询不到文件信息而出错时，程序跳转到项目的Index/index页面。或可做其他处理
        {$this->error('查询不到文件信息',U('castlist'));;
        }
        $path=$file->path;//文件保存名
        $filename=$file->filename;//文件原名
        $totalPath=$uploadpath.$path;//完整文件名（路径加名字）
        $http = new \Org\Net\Http;
        $http->download($totalPath, $filename);
    }







}