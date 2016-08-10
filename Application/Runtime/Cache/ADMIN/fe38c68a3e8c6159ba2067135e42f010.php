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
    <link rel="icon" type="image/png" href="/CloudDisk/Public/Admin/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/CloudDisk/Public/Admin/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/CloudDisk/Public/Admin/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/CloudDisk/Public/Admin/css/admin.css">
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

                <li><a href="<?php echo U('Site/config');?>"><span class="am-icon-pencil-square-o"></span> 站点设置</a></li>

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

	<form class="am-form">
		<table class="am-table am-table-striped am-table-hover table-main">
			<thead>
				<tr>
					<th class="table-check"><input type="checkbox"></th>
					<th class="table-id">ID</th>
					<th class="table-title">站点名称</th>
					<th class="table-type">站点网址</th>
					<th class="table-author am-hide-sm-only">站点图片</th>
					<th class="table-date am-hide-sm-only">站点状态</th>
					<th class="table-set">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($castinfo)): $i = 0; $__LIST__ = $castinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
						<td><input type="checkbox"></td>
						<td><?php echo $vo['id'] ;?></td>
						<td>
							<?php echo $vo['sitename'] ;?>
						</td>
						<td>
							<a href="<?php echo $vo[siteurl] ;?>"><?php echo $vo['siteurl'] ;?></a>
						</td>
						<td class="am-hide-sm-only"> <img src="/CloudDisk/Public/Home/<?php echo $vo['siteimg'];?>" style="height: 30px;" /></td>
						<td class="am-hide-sm-only"><?php echo checkStatus($vo['status']) ;?></td>
						<td>
							<div class="am-btn-toolbar">
								<div class="am-btn-group am-btn-group-xs">
									<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
									<?php if($vo['status'] == 1): ?><button class="am-btn am-btn-default am-btn-xs am-hide-sm-only" onclick="location.href='<?php echo U('changeStatus',array('id'=>$vo['id'],'status'=>$vo['status'])) ;?>';return false;"><span class="am-icon-copy"></span> 启用</button>
										<?php else: ?>
										<button class="am-btn am-btn-default am-btn-xs am-hide-sm-only" onclick="location.href='<?php echo U('changeStatus',array('id'=>$vo['id'],'status'=>$vo['status'])) ;?>';return false;"><span class="am-icon-copy"></span> 禁用</button><?php endif; ?>
									<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
								</div>
							</div>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
		<div class="am-cf">
			共
			<?php echo count($castmess);?> 条记录
			<div class="am-fr">
				<ul class="am-pagination">
					<li class="am-disabled">
						<a href="#">«</a>
					</li>
					<li class="am-active">
						<a href="#">1</a>
					</li>
					<li>
						<a href="#">2</a>
					</li>
					<li>
						<a href="#">3</a>
					</li>
					<li>
						<a href="#">4</a>
					</li>
					<li>
						<a href="#">5</a>
					</li>
					<li>
						<a href="#">»</a>
					</li>
				</ul>
			</div>
		</div>
		<hr>
		<p>注：.....</p>
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
<script src="/CloudDisk/Public/Admin/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/CloudDisk/Public/Admin/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="/CloudDisk/Public/Admin/js/amazeui.min.js"></script>
<script src="/CloudDisk/Public/Admin/js/app.js"></script>
</body>
</html>