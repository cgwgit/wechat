<?php if (!defined('THINK_PATH')) exit();?>		<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Xenon Boostrap Admin Panel" />
        <meta name="author" content="" />
        <title>前程保</title>
        <link rel="stylesheet" href="/Public/assets/css/fonts/linecons/css/linecons.css">
        <link rel="stylesheet" href="/Public/assets/css/fonts/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/Public/assets/css/bootstrap.css">
        <link rel="stylesheet" href="/Public/assets/css/xenon-core.css">
        <link rel="stylesheet" href="/Public/assets/css/xenon-forms.css">
        <link rel="stylesheet" href="/Public/assets/css/xenon-components.css">
        <link rel="stylesheet" href="/Public/assets/css/xenon-skins.css">
        <link rel="stylesheet" href="/Public/assets/css/custom.css">
        <script src="/Public/assets/js/jquery-1.11.1.min.js"></script>
    </head>
    <body class="page-body">
        <div class="page-container">
            <div class="sidebar-menu toggle-others fixed">			
                <div>		
                    <!-- 首页导航 -->
                    <!-- 左侧菜单 -->
                    <ul id="main-menu" class="main-menu">
                        <li>
                            <a href="/index.php/Admin/Search/index" style="color:#fff;">
                               <i class="linecons-star"></i>
                                <span class="title">注册用户信息表</span>
                            </a>
                        </li>
                          <li>
                            <a href="/index.php/Admin/Search/cinfo" style="color:#fff;">
                               <i class="linecons-star"></i>
                                <span class="title">参保人信息表</span>
                            </a>
                        </li>
                        <li>
                            <a href="/index.php/Admin/Search/tinfo" style="color:#fff;">
                               <i class="linecons-star"></i>
                                <span class="title">投保人信息表</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-content">
                <!-- User Info, Notifications and Menu Bar -->
                <nav class="navbar user-info-navbar" role="navigation">
                    <!-- Left links for user info navbar -->
                    <ul class="user-info-menu left-links list-inline list-unstyled">
                        <!-- 菜单隐藏与显示 -->
                        <li class="hidden-sm hidden-xs">
                            <a href="#" data-toggle="sidebar">
                                <i class="fa-bars"></i>
                            </a>
                        </li>				
                    </ul>
                    <!-- 检索 -->
                    <ul class="user-info-menu right-links list-inline list-unstyled">
                        <!-- 用户信息 -->
                        <li class="dropdown user-profile">
                            <a href="/index.php/Admin/Manager/loginlogout" >
                                <span>
                                    安全退出
                                    <i class="fa-lock"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
			<div class="page-title">
				<div class="title-env">
					<h1 class="title">前程保相关信息查询</h1>
					<p class="description"></p>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="row">
					<div class="col-md-12">
						<form role="form" class="form-horizontal" name="frm" action="/index.php/Admin/Search/cinfo" method="post">
							<div class="panel-body">
								<div class="form-group">
										<label class="col-sm-1 control-label" for="username">身份证号码：</label>
									<div class="col-sm-2">
									       <input type="text" class="form-control" id="username" name="idnumber" placeholder="请输入"  >
									</div>
										<label class="col-sm-1 control-label" for="username">用户名：</label>
									<div class="col-sm-2">
									       <input type="text" class="form-control" id="username" name="cname" placeholder="请输入"  >
									</div>
									<label class="col-sm-1 control-label" for="username">参保状态：</label>
									<div class="col-sm-1">
									<select class="form-control" name="status">
									      <option value="">请选择</option>
									      <option value="1">已支付</option>
									      <option value="2">未支付</option>
									</select>
									</div>
							
								
								</div>
							</div>
									<label class="col-sm-1 control-label" for="bankno">
									 社保参保月份：</label>
									<div class="col-sm-2">
										<input id="finishdate" name="sdate" class="form-control daterange" data-format="YYYY-MM-DD" data-start-date="2016-11-01 13:18:45" data-end-date="2016-11-01 13:18:45" data-separator=" 至 " value="<?php echo ($date); ?>" type="text">
									</div>
						            <label class="col-sm-1 control-label" for="bankno">
									 公积金参保月份：</label>
									<div class="col-sm-2">
										<input id="finishdate" name="gdate" class="form-control daterange" data-format="YYYY-MM-DD" data-start-date="2016-11-01 13:18:45" data-end-date="2016-11-01 13:18:45" data-separator=" 至 " value="<?php echo ($date); ?>" type="text">
									</div>
										<button class="btn btn-secondary col-sm-1">查询</button>
						</form>
					</div>
				</div>
				<div class="row" >					
					<div class="panel-body">
						<table class="table table-striped table-bordered" cellspacing="0" style="font-size: 90%;" width="100%">
							<thead>
								<tr>
									<th>序号</th>
									<th>参保人员姓名</th>
									<th>身份证号码</th>
									<th>手机号</th>
									<!-- <th>户口所在地</th> -->
									<th>参保类型</th>
									<th>参保状态</th>
									<th>社保基数</th>
									<th>公积金基数</th>
									<th>公积金</th>
									<th>五险</th>
									<th>社保参保月份</th>
									<th>公积金参保月份</th>
								</tr>
							</thead>
							<tbody>
                               <?php if(is_array($cinfo)): foreach($cinfo as $key=>$vo): ?><tr>
										<td><?php echo ($vo["id"]); ?></td>
										<td><?php echo ($vo["cname"]); ?></td>
										<td><?php echo ($vo["idnumber"]); ?></td>
										<td><?php echo ($vo["mphone"]); ?></td>
										<!-- <td><?php echo ($vo["city"]); ?></td> -->
										<td><?php if($vo["htype"] == 1): ?>农村<?php else: ?>城市<?php endif; ?></td>
										<td><?php if($vo["status"] == 1): ?>已支付<?php else: ?>未支付<?php endif; ?></td>
										<td><?php echo ($vo["sbase"]); ?></td>
										<td><?php echo ($vo["gbase"]); ?></td>
										<td><?php echo ($vo["gjj"]); ?></td>
										<td><?php echo ($vo["wuxian"]); ?></td>
										<td><?php echo ($vo["stime"]); ?>-<?php echo ($vo["etime"]); ?></td>
										<td><?php echo ($vo["gstime"]); ?>-<?php echo ($vo["getime"]); ?></td>
								    </tr><?php endforeach; endif; ?>
							</tbody>
						</table>
					                                <div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example-1_info" role="status" aria-live="polite"></div></div><div class="col-xs-6"><div class="dataTables_paginate paging_simple_numbers" id="example-1_paginate"><?php echo ($page); ?></div></div></div>
					</div>
				</div>
			</div>
			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
		</div>			
	</div>
	<!-- 界面加载效果 -->
	<!-- -->
	<div class="page-loading-overlay">
		<div class="loader-2"></div>
	</div>
	
	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="/Public/assets/js/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="/Public/assets/js/daterangepicker/daterangepicker-bs3.css">

	<!-- Bottom Scripts -->
	<script src="/Public/assets/js/bootstrap.min.js"></script>
	<script src="/Public/assets/js/TweenMax.min.js"></script>
	<script src="/Public/assets/js/resizeable.js"></script>
	<script src="/Public/assets/js/joinable.js"></script>
	<script src="/Public/assets/js/xenon-api.js"></script>
	<script src="/Public/assets/js/xenon-toggles.js"></script>
	<script src="/Public/assets/js/datatables/js/jquery.dataTables.min.js"></script>
	<script src="/Public/assets/js/moment.min.js"></script>

	<!-- Imported scripts on this page -->
	<script src="/Public/assets/js/datatables/dataTables.bootstrap.js"></script>
	<script src="/Public/assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
	<script src="/Public/assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script>
	<script src="/Public/assets/js/daterangepicker/daterangepicker.js"></script>

	<!-- JavaScripts initializations and stuff -->
	<script src="/Public/assets/js/xenon-custom.js"></script>
</body>
</html>