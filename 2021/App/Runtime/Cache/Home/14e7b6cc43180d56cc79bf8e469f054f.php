<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->

	<head>
		<title>荷蘭園巡禮</title>

		<!-- Meta -->
		<meta charset="utf-8" />
		<meta name="viewport" id="viewport" http-equiv="Content-Type" content="initial-scale=1.0,width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no,text/html,charset=utf-8"/>
		<meta name="description" content="" />
		<meta name="author" content="" />

		<!-- CSS Global Compulsory-->
		<link rel="stylesheet" href="/2021/Public/Static/Home/plugins/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/2021/Public/Static/Home/css/style.css" />
		<link rel="stylesheet" href="/2021/Public/Static/Home/css/headers/header1.css" />
		<link rel="stylesheet" href="/2021/Public/Static/Home/plugins/bootstrap/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="/2021/Public/Static/Home/css/style_responsive.css" />
		<link rel="stylesheet" href="/2021/Public/Static/Home/css/iconfont.css" />
		<link rel="shortcut icon" href="https://www.hollandshow.cn/2021/favicon.ico" />
		<!-- CSS Implementing Plugins -->
		<link rel="stylesheet" href="/2021/Public/Static/Home/plugins/revolution_slider/css/rs-style.css" media="screen" />
		<link rel="stylesheet" href="/2021/Public/Static/Home/plugins/revolution_slider/rs-plugin/css/settings.css" media="screen" />
		<link rel="stylesheet" href="/2021/Public/Static/Home/plugins/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="/2021/Public/Static/Home/plugins/flexslider/flexslider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="/2021/Public/Static/Home/plugins/parallax-slider/css/parallax-slider.css" type="text/css" />
		<link rel="stylesheet" href="/2021/Public/Static/Home/plugins/bxslider/jquery.bxslider.css" />
		<link rel="stylesheet" href="/2021/Public/Static/Home/plugins/swiper/swiper-4.4.1.min.css" />
		<link rel="stylesheet" href="/2021/Public/Static/Home/plugins/portfolioSorting/css/sorting.css" />
		<!-- CSS Theme -->
		<link rel="stylesheet" href="/2021/Public/Static/Home/css/themes/default.css" id="style_color" />
		<link rel="stylesheet" href="http://api.map.baidu.com/library/TrafficControl/1.4/src/TrafficControl_min.css"/>
<!--	<meta name="viewport" id="viewport" http-equiv="Content-Type" content="initial-scale=1.0;minimum-scale=1.0;maximum-scale=1.0;text/html; charset=utf-8" />-->
		<script type="text/javascript" src="https://map.qq.com/api/js?v=2.exp&key=EOABZ-6CX65-4UIIM-QRI2W-YEXOO-ORB2Q"></script>
		<script type="text/javascript" src="../../../../Public/Static/Home/js/jquery.min.js"></script>
		<script type="text/javascript" src="../../../../Public/Static/Home/js/qrcode.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../../../../Public/Static/Home/js/qrcodebox-master/qrcodebox/css/qrcode.box.css">
		<script src="../../../../Public/Static/Home/js/qrcodebox-master/qrcodebox/js/jquery.min.js"></script>
		<script src="../../../../Public/Static/Home/js/qrcodebox-master/qrcodebox/js/jquery.qrcode.js"></script>
		<script src="../../../../Public/Static/Home/js/qrcodebox-master/qrcodebox/js/qrcode.js"></script>
		<script src="../../../../Public/Static/Home/js/qrcodebox-master/qrcodebox/js/jquery.qrcode.box.js"></script>
<style>
	@media (min-width: 979px){
	
	/* 下拉按钮样式 */
	.dropbtn {
		
		color: white;
		padding: 16px;
		font-size: 16px;
		/* border: none; */
		cursor: pointer;
	}
	
	/* 容器 <div> - 需要定位下拉内容 */
	.dropdown {
		position: relative;
		display: inline-block;
	}
	
	/* 下拉内容 (默认隐藏) */
	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	}
	
	/* 下拉菜单的链接 */
	.dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}
	
	/* 鼠标移上去后修改下拉菜单链接颜色 */
	.dropdown-content a:hover {
		background-color: #f1f1f1}
	
	/* 在鼠标移上去后显示下拉菜单 */
	.dropdown:hover .dropdown-content {
		display: block;
	}
	
	/* 当下拉内容显示后修改下拉按钮的背景颜色 */
	.hhhh{
		margin-top: 20px;
		border: solid 2px transparent;
		/* border-radius: 15px !important; */
		background: none;  
		display: block;
		font-size: 18px;
		font-weight: 400;
		color: #687074;
		text-shadow: none;
		padding: 0px 20px;
		text-transform: uppercase;
		font-family: 'Open Sans', sans-serif;
		-webkit-transition: all 0.3s ease-in-out;
		-moz-transition: all 0.3s ease-in-out;
		-o-transition: all 0.3s ease-in-out;
		transition: all 0.3s ease-in-out;
		padding: 10px 15px 10px;
	}
	.hhhh:hover{
		color: #385A9F;
		text-decoration: none;
		border-bottom: solid 4px #385A9F;
		border-radius: 4px !important;
	}
	
	}
	.logoscale{
		position: absolute;
		top: -5px;
		left: -2%;
		display: flex;
		flex-direction: initial;
	}
	@media screen and (min-width: 979px) and (max-width: 1199px){
		.logoscale{
			left: -3.1% !important;
			transform: scale(0.7) !important;
		}
	}

	</style>
	</head>

	<body>

	<script type="text/javascript">

		/*function mbar(sobj) {
			var docurl =sobj.options[sobj.selectedIndex].value;
			if (docurl != "") {
				open(docurl,'_self');
				sobj.selectedIndex=1;
				sobj.blur();
			}
		}
*/
	</script>

	<div class="fiexd_code">
			<!-- <img src="/2021/Public/Static/Home/img/code.png"> -->
		</div>
		<!--=== Style Switcher ===-->
		<!-- <i class="style-switcher-btn icon-cogs"></i>
    <div class="style-switcher">
        <div class="theme-close">
            <i class="icon-remove"></i>
        </div>
        <div class="theme-heading">Theme Colors</div>
        <ul class="unstyled">
            <li class="theme-default theme-active" data-style="default" data-header="light"></li>
            <li class="theme-blue" data-style="blue" data-header="light"></li>
            <li class="theme-orange" data-style="orange" data-header="light"></li>
            <li class="theme-red" data-style="red" data-header="light"></li>
            <li class="theme-light" data-style="light" data-header="light"></li>
        </ul>
    </div> -->
		<!--/style-switcher-->
		<!--=== End Style Switcher ===-->

		<!--=== Top ===-->
		<div class="top">
			<!-- <div class="container">
            <ul class="loginbar pull-right">
                <li>
                    <i class="icon-globe"></i>
                    <a>語言
                        <i class="icon-sort-up"></i>
                    </a>
                    <ul class="nav-list">
                        <li class="active">
                            <a href="#">繁體</a>
                            <i class="icon-ok"></i>
                        </li>
                        <li>
                            <a href="#">簡體</a>
                        </li>

                    </ul>
                </li>
                <li class="devider">&nbsp;</li>
                <li>
                    <a href="page_faq.html" class="login-btn">幫助</a>
                </li>
                <li class="devider">&nbsp;</li>
                <li>
                    <a href="page_login.html" class="login-btn">登錄</a>
                </li>
            </ul>
        </div> -->
		</div>
		<!--/top--> 
		<!--=== End Top ===-->

		<!--=== Header ===-->
		<div class="header">
			<div class="container" style="height: 100px;">
				<!-- Logo -->
				<div class="logoscale">
					<a href="<?php echo U('Index/index');?>">
						<img id="logo-header" src="/2021/Public/Static/Home/img/logo1-default.png" alt="Logo" />
					</a>
				</div>
				<!-- /logo -->

				<!-- Menu -->

				<div class="navbar">
					<div class="navbar-inner">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<!-- /nav-collapse -->
						<div class="nav-collapse collapse">
							<ul class="nav top-2" style="position: relative;left: 4%;display: block;float: left;">
								<li <?php if($Method == 'Index'): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Index/index');?>" class="dropdown-toggle" data-toggle="">首頁
									</a>
								</li>
								<li <?php if($Method == 'Active'): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Active/index');?>" class="dropdown-toggle" data-toggle="">巡禮活動
									</a>
									<b class="caret-out"></b>
								</li>
								<!-- <li <?php if($Method == 'Active'): ?>class="active"<?php endif; ?>>
							    <a href="<?php echo U('Active/index');?>" class="dropdown-toggle" data-toggle="">活動花絮
							    </a>
							    <b class="caret-out"></b>
							</li> -->
								<li <?php if($Method == 'News'): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('News/index');?>" class="dropdown-toggle" data-toggle="">新聞資訊
									</a>

									<b class="caret-out"></b>
								</li>
								<!-- <li <?php if($Method == 'StreetHistory'): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('StreetHistory/index');?>" class="dropdown-toggle" data-toggle="">街道故事
									</a>

									<b class="caret-out"></b>
								</li>
								<li <?php if($Method == 'Posts'): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Posts/index');?>" class="dropdown-toggle" data-toggle="">特色景點
									</a>

									<b class="caret-out"></b>
								</li> -->











								<!-- 社區魅力 -->
								<li id="mk">	
									<div class="dropdown">
										  <div class="hhhh">
											  <a href="javascript:volid(0)" class="dropdown-toggle" data-toggle="" style="text-decoration:none">
												  <span style="color: #687074;">
												  社區魅力
												 </span>
											  </a>
											  <b class="caret-out"></b>
										  </div>
									  <div class="dropdown-content">
											  <a href="<?php echo U('StreetHistory/index');?>" class="dropdown-toggle" data-toggle="">街道故事
											  </a>
											  <b class="caret-out"></b>
											  <a href="<?php echo U('Posts/index');?>" class="dropdown-toggle" data-toggle="">特色景點
											  </a>
											  <b class="caret-out"></b>
									  </div>
									</div>
								  </li>

								<!-- 当窗口宽度小于979px的社區魅力 -->
								<li id="mtd" onclick="showhide()" <?php if($Method == 'StreetHistory'): ?>class="active"<?php endif; ?> style="display:none">
									<a href="javascript:volid(0)" class="dropdown-toggle" data-toggle="">社區魅力
									</a>

									<b class="caret-out"></b>
								</li>
								<li id="mtg" <?php if($Method == 'StreetHistory'): ?>class="active"<?php endif; ?> style="display:none">
									<a href="<?php echo U('StreetHistory/index');?>" class="dropdown-toggle" data-toggle="">街道故事
									</a>

									<b class="caret-out"></b>
								</li>
								<li id="mtgg" <?php if($Method == 'Posts'): ?>class="active"<?php endif; ?> style="display:none">
									<a href="<?php echo U('Posts/index');?>" class="dropdown-toggle" data-toggle="">特色景點
									</a>

									<b class="caret-out"></b>
								</li>

















                            <!-- 社區商業 -->
							<li id="k">	
								<div class="dropdown">
									  <div class="hhhh">
										  <a href="javascript:volid(0)" class="dropdown-toggle" data-toggle="" style="text-decoration:none">
											<!-- <a href="<?php echo U('Shop/index');?>" class="dropdown-toggle" data-toggle="" style="text-decoration:none"> -->

											  <span style="color: #687074;">
												社區商業
											 </span>
										  </a>
										  <b class="caret-out"></b>
									  </div>
								  <div class="dropdown-content" name="shoptype" id="shoptype">
										  <a href="<?php echo U('Shop/categroy','shoptype=discount');?>" <?php if($shoptype == 'discount'): ?>selected="selected"<?php endif; ?>value="discount" class="dropdown-toggle" data-toggle="">優惠
										  </a>
										  <b class="caret-out"></b>
										  <a href="<?php echo U('Shop/categroy','shoptype=food');?>" <?php if($shoptype == 'food'): ?>selected="selected"<?php endif; ?>value="food" class="dropdown-toggle" data-toggle="">美食
										  </a>
										  <b class="caret-out"></b>
										  <a href="<?php echo U('Shop/categroy','shoptype=fashion');?>" <?php if($shoptype == 'fashion'): ?>selected="selected"<?php endif; ?>value="fashion" class="dropdown-toggle" data-toggle="">潮店
										</a>
										<b class="caret-out"></b>
								  </div>
								</div>
							  </li>

							<!-- 当窗口宽度小于979px的社區商業 -->
							<li id="td" onclick="showhide2()" <?php if($Method == 'Shop'): ?>class="active"<?php endif; ?> style="display:none">
								<a href="javascript:volid(0)" class="dropdown-toggle" data-toggle="">社區商業
								</a>

								<b class="caret-out"></b>
							</li>
							<li id="tg" <?php if($Method == 'StreetHistory'): ?>class="active"<?php endif; ?> style="display:none">
								<a href="<?php echo U('Shop/categroy','shoptype=discount');?>" <?php if($shoptype == 'discount'): ?>selected="selected"<?php endif; ?>value="discount" class="dropdown-toggle" data-toggle="">優惠
								</a>

								<b class="caret-out"></b>
							</li>
							<li id="tgg" <?php if($Method == 'Posts'): ?>class="active"<?php endif; ?> style="display:none">
								<a href="<?php echo U('Shop/categroy','shoptype=food');?>" <?php if($shoptype == 'food'): ?>selected="selected"<?php endif; ?>value="food" class="dropdown-toggle" data-toggle="">美食
								</a>

								<b class="caret-out"></b>
							</li>
							<li id="tggg" <?php if($Method == 'Posts'): ?>class="active"<?php endif; ?> style="display:none">
								<a href="<?php echo U('Shop/categroy','shoptype=fashion');?>" <?php if($shoptype == 'fashion'): ?>selected="selected"<?php endif; ?>value="fashion" class="dropdown-toggle" data-toggle="">潮店
								</a>

								<b class="caret-out"></b>
							</li>














								<!-- <li <?php if($Method == 'Shop'): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Shop/index');?>" class="dropdown-toggle" data-toggle="">社區美食
									</a>
								<b class="caret-out"></b> -->

								<li <?php if($Method == 'Media'): ?>class="active"<?php endif; ?>>
								<a href="<?php echo U('Media/index');?>" class="dropdown-toggle" data-toggle="">精彩瞬間
								</a>

								<b class="caret-out"></b>
									<!-- <ul class="dropdown-menu">
                                    <li><a href="<?php echo U('Shop/index',array('type'=>'craft'));?>">手工技藝</a></li>
                                    <li><a href="<?php echo U('Shop/index',array('type'=>'create'));?>">新興文創</a></li>
                                    <li><a href="<?php echo U('Shop/index',array('type'=>'cate'));?>">特色飲食</a></li>
                                    <li><a href="<?php echo U('Shop/index',array('type'=>'antique'));?>">古玩收藏</a></li>
                                    <li><a href="<?php echo U('Shop/index',array('type'=>'dress'));?>">精品服飾</a></li>
                                    <li><a href="<?php echo U('Shop/index',array('type'=>'other'));?>">其他店鋪</a></li>
                                </ul> -->
									<!-- <b class="caret-out"></b> -->
								</li>
								<li style="margin-right: 20px"><a class="search" style="margin: 16px 0 0px">
									<!-- <i class="icon-search search-btn"></i> -->
									<img class="icon-search search-btn" style="width:30px" src="/Public/Static/Home/img/xun.png" alt="">

								</a></li>
								<li class="selectbox" style="margin-left: 15px">
									<div class="select">
											<select id="selectbox2" onchange="window.location.href=options[selectedIndex].value">
												<option id="sb1" style="display:none;" value="" >2021</option>
												<option id="sb2" value="" >2021</option>
												<option id="sb3" value="">2020</option>


											</select>
									</div>
								</li>
							</ul>
							<div class="search-open">
								<div class="input-append"> 
									<form action="<?php echo U('Search/index');?>" method="get">

										<input type="text" name="keyword" class="span3" placeholder="請輸入關鍵詞搜索" />
										<button style="border: none;background-color: #385A9F;padding: 5px 10px;color: white;" type="submit" class="">Go</button>
									</form>
								</div>
							</div>


						</div>
						<!-- /nav-collapse -->
					</div>
					<!-- /navbar-inner -->

				</div>
				<!-- /navbar -->
			</div>
			<!-- /container -->
		</div>
		<!--/header -->
		<script type="text/javascript">

			if(document.body.scrollWidth < 979){
			  document.getElementById('mk').style.display = 'none';
			  document.getElementById('mtd').style.display = 'block';
		
			}
			function showhide(){
				var div=document.getElementById('mtg');
				var divv=document.getElementById('mtgg');
				if(div.style.display=='block'&& divv.style.display=='block'){ // == 判断div.display是否为显示
							div.style.display='none'; //= 赋值也可了解成改变
							divv.style.display='none';
						}
						else{
							div.style.display='block';
							divv.style.display='block';
							
						} 
			}
			if(document.body.scrollWidth < 979){
			  document.getElementById('k').style.display = 'none';
			  document.getElementById('td').style.display = 'block';
		
			}
			function showhide2(){
				var div=document.getElementById('tg');
				var divv=document.getElementById('tgg');
				var divvv=document.getElementById('tggg');
				if(div.style.display=='block'&& divv.style.display=='block'&& divvv.style.display=='block'){ // == 判断div.display是否为显示
							div.style.display='none'; //= 赋值也可了解成改变
							divv.style.display='none';
							divvv.style.display='none';
						}
						else{
							div.style.display='block';
							divv.style.display='block';
							divvv.style.display='block';
						} 
			}
				var hp = window.location.protocol;
			var yu=document.domain;
			document.getElementById("sb1").value=hp+"//"+yu+"/2020/index.php/Index/index.html";
			document.getElementById("sb2").value=hp+"//"+yu+"/index.php/Index/index.html";
			document.getElementById("sb3").value=hp+"//"+yu+"/2020/index.php/Index/index.html";
		</script>
<!--=== End Header ===-->
<style type="text/css">
    .ji{
            width: 66px;
        }
   .newul{
        padding: 0;
        margin: 0;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        top: 0;
   }
   .breadcrumbs{
       height: auto;
   }
   .container{
       padding: 0!important;
   }
   .titlesp{
        margin-left: 25px;
        margin-right: 25px;
        margin-top: -20px;
        width: 200px;
        position: relative;
        background-color: white;
        box-shadow: darkgrey 0px 0px 6px 2px;
    }
	.recent-work li:hover{
		box-shadow: darkgrey 0px 0px 6px 2px;
	}
	.recent-work li:hover .titlesp{
        /* border-bottom: 2px solid #385A9F; */
		box-shadow: #385A9F 0px 6px 6px 2px;
    }
	.memod {
		margin-top: -25px;
		box-shadow: #385a9f 0px 0px 6px 1px;
		border: 1px solid #385A9F;
		font-size: 15px;
		border-bottom: 1px solid #385A9F !important;
	}
	.qrcode {
		margin-left: -37px;
		margin-top: -300%;
	}

	.map {
		width: 40%;
		height: 300px;
		margin-left: 15px;
		top: 20px;
		left: 30px;
	}

	.weixin {
		position: relative;
		top: 0.86rem;
	}



	.weixin div.qrcode {
		position: absolute;
		z-index: 99;
		top: -6px;
		left: -120px;
		max-width: none;
		transform-origin: top right;
		opacity: 0;
		border: 1px solid #DDDDDD;
		border-radius: .25rem;
		-webkit-transition: all .4s ease-in-out;
		-o-transition: all .4s ease-in-out;
		transition: all .4s ease-in-out;

	}

	.weixin:hover div.qrcode {
		transform: scale(1);
		opacity: 1;
	}

	.line_02 {
		margin-top: 51px;
		/* margin-left: 362px;margin-right: 362px; */
		height: 1px;
		border-top: 1px solid #ddd;
		text-align: center;
	}
	.line_02 a {
		position: relative;
		top: -15px;
		background: #fff;
		padding: 0 20px;
	}

	.line_02 button {
		position: relative;
		top: -15px;
		background: #fff;
		padding-right: 26px;
	}

	.active-share-facebook {
		width: 30px;
		height: 30px;
		border: none;
		background-color: white;
	}

	#tag {
		display: flex;
		position: relative;
		left: -40px;
		float: left;
	}

	#tag li {
		width: 120px;
		height: 32px;
		padding-top: 5px;
		border-radius: 6px !important;
		border: 1px solid rgb(56 90 159);
		margin-left: 20px;
		color: rgb(56 90 159);
		font-size: 16px;
		list-style-type: none;
		text-align: center;

	}

	@media (max-width: 768px) {
	
		.line_02 {
			margin-bottom: 30px;
		}

		.weixin div.qrcode {
			margin-top: -145px;
			position: absolute;
			margin-right: auto;
			margin-left: auto;
		}

		.titlesp {
			margin-left: 25px;
			margin-right: 25px;
			margin: 0 auto;
			margin-top: -20px;
			width: 200px;
			position: relative;
			background-color: white;
			box-shadow: darkgrey 0px 0px 6px 2px;
		}
	}
	.imgsize{
		display: flex;
		justify-content: center;
		align-items: center;
		overflow: hidden;
	}
	.imgsize img{
		width: 100% !important;
		height: auto !important;
		margin-left: 0 !important;
		margin-right: 0 !important;
		
	}
	.mediatransform{
		transform: scale(1.6);
	}
	@media (max-width: 979px) {
		.newproimg{
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}
	}

</style>
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
		<!-- <h1 class="color-green pull-left">Portfolio</h1> -->
		<ul class="pull-left breadcrumb newul">
			<li><img class="ji" src="/Public/Static/Home/img/ji.png"/></li>
			<li ><a href="<?php echo U('Index/index');?>">首頁</a> <span class="divider">/</span></li>
			<li  class="active" style="color: #555;">精彩瞬間</li>
		</ul>
	</div>
	<!--/container-->
</div>
<!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->
<!--=== Content Part ===-->
<!-- <ul id="myTab" class="nav nav-tabs">
	<li class="active"><a href="#photo" data-toggle="tab">圖片集</a></li>
	<li><a href="#video" data-toggle="tab">視頻影集</a></li>
</ul>
<div id="myTabContent" class="tab-content">
	<div class="tab-pane fade in active" id="photo">

	</div>
	<div class="tab-pane fade" id="video">
	</div>
</div> -->

<!--/container-->
<!--=== End Content Part ===-->
<!-- <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<!--=== Footer ===-->
<div class="wrap">

	<div id="tagContent">
		<div class="container">

			<div class="row-fluid">
				<ul id="tag">
					<li><a style="color: #385A9F;text-decoration:none;" href="<?php echo U('Media/index');?>">圖片集</a></li>
					<li style="background-color:#385A9F;"  ><a style="color: white;text-decoration:none;"  href="<?php echo U('Media2/index');?>">視頻集</a></li>
				</ul>
				<div id="w">

					<ul class="portfolio recent-work clearfix newproimg">
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li data-id="id-1" class="street<?php echo ($row['street_id']); ?>">
								<a href="<?php echo U('Media2/detail',array('id'=>$row['id']));?>">
									<em class="overflow-hidden imgsize"><img class="mediatransform" src="<?php echo ($row['cover']); ?>" alt="" /></em>
									<span class="titlesp memod" style="transition: all 0s">
										<strong style="color: #385A9F;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;"><?php echo ($row['title']); ?></strong>
									</span>
								</a>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<div class="pagination pagination-large pagination-centered">
						<ul><?php echo ($page); ?></ul>
					</div>
				</div>
			</div>
			<!--/row-fluid-->
		</div>

	</div>


	<script type="text/javascript">
		//右下角分享地址
			var wz = "https://www.hollandshow.cn<?php echo U('Media2/index');?>"       
	</script>
	
<!--=== Footer ===-->
<div class="container">
	<div class="index-activity " style="margin-bottom: -10px;">
		<!-- Recent Works --> 
		<div class="headline" style="margin: 50px 0 0 0;">
			<h3><a href="javascript:volid(0)" style="font-weight: 600;color: #385A9F;">合作夥伴</a></h3>
		</div>
		<div class="row-fluid">
			<div id="w">
				<ul class="portfolio clearfix" style="margin-top: 0px;" id="por">
					<?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$links): $mod = ($i % 2 );++$i;?><li data-id="id-1" link="<?php echo ($links['url']); ?>">
							<div class="thumbnail-style" style="border: 1px solid #ccc !important;">
							<div class="thumbnail-img">
								<div class="overflow-hidden imgsize" style="height: 51px;width: 163px;">
							<a href="<?php echo ($links['url']); ?>" target="_blank">
								<em class="overflow-hidden">
									<img class="img123456" src="<?php echo ($links['image']); ?>" alt="" />
								</em>
							</a>
							</div>
							</div>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
	</div>
	
	<style>
		.img123456{
			margin-top: 0px !important;
			margin-left: 0px !important;
		}
	</style>

<div class="footer">



	<img src="/2021/Public/Static/Home/img/footer/footer.jpg" class="footer-img footer-img-pc" alt="" />
	<img src="/2021/Public/Static/Home/img/footer/footer-mod.jpg" class="footer-img footer-img-mod" alt="" />

	<div class="footer-share">

		<button type="button" class="footer-share-wechat" style="background-image: url(/2021/Public/Static/Home/img/footer/IC-200-WeChat.png);background-size:30px 30px;"
				onclick="shareWechat()"></button>

		<div id="myModal" class="modal" style="display:none;">
			<!-- 弹窗内容 -->
			<span class="close">&times;</span>
			<div class="footer-text">掃碼進入小程序</div>
			<img src="/2021/Public/Static/Home/img/footer/wx.jpg" class="footer-share-wx">
		</div>
		<br>
		<button type="button" class="footer-share-weibo" style="background-image: url(/2021/Public/Static/Home/img/footer/IC-200-WB.png);background-size:30px 30px;"
				onclick="shareWeibo()"></button>
		<br>
		<button type="button" class="footer-share-facebook" style="background-image: url(/2021/Public/Static/Home/img/footer/IC-200-facebook.png);background-size:30px 30px;" onclick="shareFacebook()"></button>

</div>



	<a style="color: beige;left: 16px; text-decoration:underline;position: relative;" href="http://www.macautech.net/">普及科技（澳門）有限公司</a>
	<span style="color: beige;left: 16px; position: relative;">提供技術支持
		<script type="text/javascript">document.write(unescape("%3Cspan id='cnzz_stat_icon_1280479663'%3E%3C/span%3E%3Cscript src='https://s9.cnzz.com/stat.php%3Fid%3D1280479663%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
	</span>
</div>
<!--/footer-->
<!--=== End Footer ===-->

<!--=== Copyright ===-->
<!-- <div class="copyright">
        <div class="container">
            <div class="row-fluid">
                <div class="span8">

                </div>
                <div class="span4">
                    <a href="<?php echo U('Index/index');?>">
                        <img id="logo-footer" src="/2021/Public/Static/Home/img/logo2-default.png" class="pull-right" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div> -->
<!--/copyright-->
<!--=== End Copyright ===-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="/2021/Public/Static/Home/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/library/TrafficControl/1.4/src/TrafficControl_min.js"></script>
<!-- <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=PSGDO96ZzxBUijinzhN6PajEn75enP1c" /> -->
<script type="text/javascript" src="/2021/Public/Static/Home/js/modernizr.custom.js"></script>
<script type="text/javascript" src="/2021/Public/Static/Home/plugins/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="http://developer.baidu.com/map/jsdemo/demo/convertor.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="/2021/Public/Static/Home/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="/2021/Public/Static/Home/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="/2021/Public/Static/Home/plugins/swiper/swiper-4.4.1.min.js"></script>
<script type="text/javascript" src="/2021/Public/Static/Home/plugins/bxslider/jquery.bxslider.js"></script>
<script type="text/javascript" src="/2021/Public/Static/Home/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="/2021/Public/Static/Home/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="/2021/Public/Static/Home/plugins/parallax-slider/js/jquery.cslider.js"></script>
<script type="text/javascript" src="/2021/Public/Static/Home/plugins/portfolioSorting/js/jquery.quicksand.js"></script>
<script type="text/javascript" src="/2021/Public/Static/Home/plugins/portfolioSorting/js/sorting.js"></script>
<script type="text/javascript" src="/2021/Public/Static/Home/plugins/back-to-top.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="/2021/Public/Static/Home/js/app.js"></script>
<script type="text/javascript" src="/2021/Public/Static/Home/js/pages/index.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		$(".ulc").on("click", "li", function() {
			var link = $(this).attr("link");
			window.parent.location.href = link;
		})

		var winWidth = $("html").width();
								   
		if (winWidth > 767) {
			$(".footer-img-pc").show();
			$(".footer-img-mod").hide();
		} else {
			$(".footer-img-mod").show();
			$(".footer-img-pc").hide();				   
			$(".footer-share").hide();
		}
		
		var mySwiper = new Swiper('.swiper-con-activity', {									 
			//loop: true,
							
			slidesPerView: 4,
			slidesPerGroup: 4,
			spaceBetween: 10,
			breakpoints: {
				1200: {
					slidesPerView: 4,
					slidesPerGroup: 4,
				},
				979: {
					slidesPerView: 3,
					slidesPerGroup: 3,
				},
				767: {
					slidesPerView: 2,
					slidesPerGroup: 2,
				},
				460: {
					slidesPerView: 1,
					slidesPerGroup: 1,
				}
			},
			// 如果需要前进后退按钮					
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			}
		});
		var mySwiper6 = new Swiper('#swiper-con-newac', {
			//loop: true,
			slidesPerView: 2,//一行显示3个
    		slidesPerColumn: 2,//显示2行
			slidesPerGroup: 2,
			spaceBetween: 30,
			breakpoints: {
				1200: {
					slidesPerView: 2,
					slidesPerGroup: 2,
				},
				979: {
					slidesPerView: 1,
					slidesPerGroup: 2,
					slidesPerColumn: 2,
				},
				767: {
					slidesPerView: 1,
					slidesPerGroup: 2,
					slidesPerColumn: 2,
				},
				460: {
					slidesPerView: 1,
					slidesPerGroup: 1,
				}
			},
			// 如果需要前进后退按钮
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			}
		});
		var mySwiper = new Swiper('.swiper-con-newactivity', {
                // loop: true,
                mousewheels: false,
				autoplay : false, 
                slidesPerView: 4,
                slidesPerGroup: 4,
                spaceBetween: 10,
                breakpoints: {
                    1200: {
                        slidesPerView: 4,
                        slidesPerGroup: 4,
                    },
                    979: {
                        slidesPerView: 3,
                        slidesPerGroup: 3,
                    },
                    767: {
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                    },
                    460: {
                        slidesPerView: 1,
                        slidesPerGroup: 1,
                    }
                },
                // 如果需要前进后退按钮
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                }
            });

		var mySwiper = new Swiper('.swiper-con-scenic', {
												   
			// loop: true,
			slidesPerView: 3,
			slidesPerGroup: 5,
			spaceBetween: 10,
			breakpoints: {
				1200: {
					slidesPerView: 3,
					slidesPerGroup: 3,
				},
				979: {
					slidesPerView: 2,
					slidesPerGroup: 2,
				},
				767: {
					slidesPerView: 2,
					slidesPerGroup: 2,
				},
				530: {
					slidesPerView: 1,
					slidesPerGroup: 1,
				}
			},
			// 如果需要前进后退按钮
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			}
		});


		var mySwiper = new Swiper('.swiper-con-shop', {
			slidesPerView: 2,//一行显示2个
    		slidesPerColumn: 2,//显示2行
			slidesPerGroup: 2,
			spaceBetween: 40,
			breakpoints: {
				1200: {
					slidesPerView: 2,
					slidesPerGroup: 2,
				},
				979: {
					slidesPerView: 2,
					slidesPerGroup: 2,
				},
				767: {
					slidesPerView: 1,
					slidesPerGroup: 1,
				},
				460: {
					slidesPerView: 1,
					slidesPerGroup: 1,
				}
			},
			// 如果需要前进后退按钮
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			}
		});
		var mySwiper7 = new Swiper('.swiper-con-meili', {
			// loop: true,
			slidesPerView: 3,
			slidesPerGroup: 3,
			spaceBetween: 10,
			breakpoints: {
				1200: {
					slidesPerView: 3,
					slidesPerGroup: 3,
				},
				979: {
					slidesPerView: 2,
					slidesPerGroup: 2,
				},
				767: {
					slidesPerView: 2,
					slidesPerGroup: 2,
				},
				530: {
					slidesPerView: 1,
					slidesPerGroup: 1,
				}
			},
			// 如果需要前进后退按钮
			// navigation: {
			// 	nextEl: '.swiper-button-next',
			// 	prevEl: '.swiper-button-prev',
			// }
		});

		App.init();
		App.initBxSlider1();
		App.initSliders();
		// Index.initParallaxSlider();
		Index.initRevolutionSlider();
	});

	// var map = new BMap.Map("map");
	// var point = new BMap.Point(116.404, 39.915);
	// map.centerAndZoom(point, 15);
	// var marker = new BMap.Marker(point); // 创建标注
	// map.addOverlay(marker); // 将标注添加到地图中
	// marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
	jQuery(document).ready(function() {
		App.init();
	});
	jQuery(document).ready(function() {
		App.init();
		App.initBxSlider1();
		App.initSliders();
		Index.initParallaxSlider();
	});

	//分享到新浪微博
	function shareToXl(title, url, picurl) {
		var sharesinastring =
			'https://service.weibo.com/share/share.php?title=' + title + '&url=' + url + '&content=utf-8&sourceUrl=' + url +
			'&pic=' + picurl;
		window.open(sharesinastring, 'newwindow', 'height=400,width=400,top=100,left=100');

	}
	//分享到facebook
	/*function shareToFB(title, url,picurl) {
		var sharesinastring =
			'http://www.facebook.com/sharer/sharer.php?title=' + title + '&url=' + url + '&content=utf-8&sourceUrl=' + url+'&pic=' + picurl;;
		window.open(sharesinastring, 'newwindow', 'height=400,width=400,top=100,left=100');

	}*/
    function shareToFB(title, url) {
        var sharesinastring =
            "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(url)+ "&title=" + encodeURIComponent(title)+ "&display=popup&ref=plugin&src=share_button";
        window.open(sharesinastring, 'newwindow', 'height=400,width=400,top=100,left=100');

    }
	// 分享到微信
	// 获取弹窗
	var modal = document.getElementById('myModal');

	// 打开弹窗的按钮对象


	// 获取 <span> 元素，用于关闭弹窗
	var span = document.querySelector('.close');

	// 点击按钮打开弹窗
	function shareWechat() {
		modal.style.display = "block";
	}

	// 点击 <span> (x), 关闭弹窗
	span.onclick = function() {
		modal.style.display = "none";
	}

	// 在用户点击其他地方时，关闭弹窗

	//点击空白处隐藏弹出层，下面为滑动消失效果和淡出消失效果。

	$(document).mouseup(function(event){
		var _con = $(modal); // 设置目标区域

		if(!_con.is(event.target) && _con.has(event.target).length === 0){ // Mark 1

		//$('#divTop').slideUp('slow'); //滑动消失
		$(modal).hide(1000); //淡出消失

		}
	});




	/*window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}*/

	function shareWeibo() {
		shareToXl("荷蘭園巡禮", wz);

	}
	function shareFacebook() {
        shareToFB("荷蘭園巡禮", wz);

	}
</script>
<!--[if lt IE 9]>
    <script src="/2021/Public/Static/Home/js/respond.js"></script>
<![endif]-->

</body>
<style type="text/css">
	.footer1{
		/*margin-top: 100px;*/
		/* padding: 20px 10px; */
		background: #585f69;
		color: #dadada;
		z-index: -10;
		zoom: 1;
		text-align: center;
		vertical-align: 1000px;
	}
	.footer-share-wx {
		/*width: 30%;*/
		/*margin: 5px 5px 5px 5px;*/
		padding-bottom: 0px;
		padding-top: 0px;
		padding-right: 0px;
		padding-left: 0px;
	}

	.footer-logo{
		position: relative;
		bottom: 51px;
		width: 600px;
		left: -32px;
		opacity: 1;
		cursor: pointer;
		z-index: 999;
	}
	.footer-share {
		/*background-color: rgb(66, 71, 74);
		width: 135px;
		height: 40px;*/
		position: fixed;
		bottom: 76px;
		right: 5px;
		z-index: 99;
		opacity: 1;
		cursor: pointer;

		/*position: inherit;
		margin-left: 392px;
		margin-top: -220px;
		float: right;*/

	}

	.footer-share-facebook {
		background-color: rgb(213 222 203 / 0%);
		width: 30px;
		height: 30px;
		border: none;
		border-radius: 10px;
		position: fixed;
		bottom: 76px;
		right: 20px;
		opacity: 1;
		cursor: pointer;
	}

	.footer-share-wechat {
		background-color: rgb(213 222 203 / 0%);
		width: 30px;
		height: 30px;
		border: none;
		border-radius: 10px;
		position: fixed;
		bottom: 165px;
		right: 20px;
		opacity: 1;
		cursor: pointer;
	}


	.footer-share-weibo {
		background-color: rgb(213 222 203 / 0%);
		width: 30px;
		height: 30px;
		border: none;
		border-radius: 10px;
		position: fixed;
		bottom: 120px;
		right: 20px;
		opacity: 1;
		cursor: pointer;
	}

	.footer-text {
		color: black;
		font-size: 20px;
		font-weight: bolder;
		padding-top: 25px;
		padding-bottom: 20px;
		text-align: center;
		margin: auto;
	}

	@media (max-width: 767px) {
		.clearfix{
			display: flex;
			flex-wrap: wrap;
			
		}
		.clearfix li{
			margin-right: 6px;
		}
		.footer-share {
			margin-top: -41px;
			float: right;
			margin-right: 80px;
			width: 65px;
			height: 25px;
			overflow: hidden;
		}

		.footer-share-facebook {
			margin-top: -30px;
			transform: scale(0.6);
			margin-left: 38px;
		}

		.footer-share-weibo {

			margin-top: -30px;
			transform: scale(0.6);
			margin-left: 18px;
		}

		.footer-share-wechat {
			transform: scale(0.6);
			margin-top: -2px;

			margin-left: -4px;

		}
		.modal {
		    top: 130px !important;
			left: 180px !important;
		}
	}

	/* 弹窗 (background) */
	.modal {
		width: 350px;
    margin-top: 5%;
    margin-left: -10%;
		display: none;
		/* 默认隐藏 */
		position: fixed;
		/* 固定定位 */
		z-index: 1;
		/* 设置在顶层 */
		/*left: 0;*/
		/*top: 0;*/
		/*margin:auto;*/
		text-align:center;

		/*background-color: rgb(0, 0, 0);*/
		/*background-color: rgb(169 169 169);*/
	}

	/* 弹窗内容 */
	.modal-content {
		background-color: #fefefe;
		margin: 15% auto;
		padding: 20px;
		border: 1px solid #888;
		width: 80%;
	}

	/* 关闭按钮  #aaa*/
	.close {
		color: #1f1c1c;
		float: right;
		font-size: 40px;
    	font-weight: initial;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
	.logo{
		margin: 0;
		position: relative;
		width: 100%;
		height: 100%;
		z-index: 1;
		display: flex;
		transition-property: transform,-webkit-transform;
		box-sizing: content-box;
		list-style: none;
		padding: 0;
	}
	.logoli{
		width: 285px;
		margin-right: 10px;
	}
	.logodiv1{

		width: 283px;
		height: 100px;
		margin-right: 6px;
	}
	.logodiv2{

		width: 283px;
		height: 100px;
		margin-right: 6px;
	}
	.logodiv3{

		width: 283px;
		height: 100px;
	}
	.logo1{
		width:100%;
		margin-top: 6px;
		margin-left: 1px;
	}
	.logo2{
		width:100%;
		padding-top: 8px;
	}
	.logo3{
		width: 65%;
		height: 96%;
		z-index: -100;
		margin-left: 47px;
		margin-top: 4px;
		position: relative;
	}
	@media (max-width: 768px){
		.index-activity .imgsize {
			height: 217px;
		}
		.logo{
			margin: 0;
			position: relative;
			width: 100%;
			height: 100%;
			z-index: 1;
			display: flex;
			transition-property: transform,-webkit-transform;
			box-sizing: content-box;
			list-style: none;
			padding: 0;
		}
		.logoli{
			position: relative;
			width: 115px;
			margin-right: 10px;
		}
		.logodiv1{
			margin-right: 1px;
			position: relative;

			width: 80px;
			height: 30px;

		}
		.logodiv2{
			margin-right: 1px;
			position: relative;

			width: 80px;
			height: 30px;

		}
		.logodiv3{
			position: relative;

			width: 80px;
			height: 30px;
		}
		.logo1{
			width: 80px;
			z-index: -100;
			margin-top: 3px;
		}
		.logo2{
			width: 80px;
			z-index: -100;
		}
		.logo3{
			margin-left: 15px;
			z-index: -100;
		}
	}
</style>
<script type="text/javascript">

		var url = window.location.pathname;

		if(url.indexOf('detail')>= 0){
			document.getElementById("por").style.marginTop='unset';

		}

	</script>
</html>