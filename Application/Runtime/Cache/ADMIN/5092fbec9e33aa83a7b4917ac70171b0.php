<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js fixed-layout">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/yun/Public/Admin/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/yun/Public/Admin/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/yun/Public/Admin/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/yun/Public/Admin/css/admin.css">
</head>




<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->
<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <strong>Amaze UI</strong> <small>后台管理模板</small>
    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
                    <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                    <li><a href="<?php echo U('Public/Logout') ;?>"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
        </ul>
    </div>
</header>
<div class="am-cf admin-main">
    <!-- sidebar start -->
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
        <div class="am-offcanvas-bar admin-offcanvas-bar">
            <ul class="am-list admin-sidebar-list">
                <li><a href="<?php echo U('Index/index');?>"><span class="am-icon-home"></span> 首页</a></li>
                <li><a href=""><span class="am-icon-home"></span> 代理商管理</a></li>
                <li class="admin-parent">
                    <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 客户案例管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                    <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
                        <li><a href="<?php echo U('CastManager/add') ;?>"><span class="am-icon-bug"></span> 新增案例</a></li>
                        <li><a href="<?php echo U('CastManager/castlist') ;?>"><span class="am-icon-bug"></span> 案例列表</a></li>
                    </ul>
                </li>

                <li><a href=""><span class="am-icon-table"></span> 友情链接管理</a></li>

                <li><a href="<?php echo U('Site/index');?>"><span class="am-icon-pencil-square-o"></span> 站点设置</a></li>

                <li><a href=""><span class="am-icon-sign-out"></span> 注销</a></li>
            </ul>

            <div class="am-panel am-panel-default admin-sidebar-panel">
                <div class="am-panel-bd">
                    <p><span class="am-icon-bookmark"></span> 当前系统时间</p>
                    <p><?php echo date('Y-m-d H:m:s',strtotime('now'));?></p>
                </div>
            </div>


        </div>
    </div>
    <!-- sidebar end -->





    <!-- content start -->
    <div class="admin-content">

	<div class="am-cf am-padding am-padding-bottom-0">
		<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">客户案例管理</strong> / <small>站点配置</small></div>
	</div>

	<hr>

	<form class="am-form" method="post" action="<?php echo U('Site/config') ;?>" >

		<div class="am-g am-margin-top">
			<div class="am-u-sm-4 am-u-md-2 am-text-right">
				站点名称
			</div>
			<div class="am-u-sm-8 am-u-md-4">
				<input type="text" class="am-input-sm" name="sitename" value="<?php echo $sitemess['sitename'];?>">
			</div>
			<div class="am-u-sm-12 am-u-md-6">*必填，不可重复</div>
		</div>

		<div class="am-g am-margin-top">
			<div class="am-u-sm-4 am-u-md-2 am-text-right">
				站点描述
			</div>
			<div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
				<input type="text" class="am-input-sm" name="discript" value="<?php echo $sitemess['discript'] ;?>">
			</div>
		</div>

		<div class="am-g am-margin-top">
			<div class="am-u-sm-4 am-u-md-2 am-text-right">
				关键字
			</div>
			<div class="am-u-sm-8 am-u-md-4">
				<input type="text" class="am-input-sm" name="keywords" value="<?php echo $sitemess['keywords'] ;?>">
			</div>
			<div class="am-u-sm-12 am-u-md-6">使用英文半角逗号隔开</div>
		</div>

		<div class="am-g am-margin-top">
			<div class="am-u-sm-4 am-u-md-2 am-text-right">
				站点版权
			</div>
			<div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
				<input type="text" class="am-input-sm" name="copyright" value="<?php echo $sitemess['copyright'] ;?>">
			</div>
		</div>

		<div class="am-g am-margin-top">
			<div class="am-u-sm-4 am-u-md-2 am-text-right">
				ICP备案
			</div>
			<div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
				<input type="text" class="am-input-sm" name="icp" value="<?php echo $sitemess['icp'] ;?>">
			</div>
		</div>

		<div class="am-g am-margin-top">
			<div class="am-u-sm-8 am-u-sm-offset-2">
				<button type="submit" class="am-btn am-btn-primary">保存修改</button>
			</div>
		</div>
	</form>


<footer class="admin-content-footer">
    <hr>
    <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>
</div>
<!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/yun/Public/Admin/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/yun/Public/Admin/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="/yun/Public/Admin/js/amazeui.min.js"></script>
<script src="/yun/Public/Admin/js/app.js"></script>
</body>
</html>