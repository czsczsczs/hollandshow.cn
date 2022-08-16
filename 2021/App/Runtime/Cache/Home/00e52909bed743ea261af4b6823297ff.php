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
<style type="text/css">
	#index_overflow {
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
	}
	.headline{
		display: flex;
		justify-content: space-between;
		margin: 50px 0 25px 0;
		border-bottom: 2px solid #385A9F;
		align-items: center;
		text-decoration: none;
	}
	.headline h4 a{
		color: #585f69;
		margin: 0 0 -2px 0;
		padding-right: 10px;
		display: inline-block;
		text-shadow: 0 0 1px #f6f6f6;
	}
	.imga{
		width: 100%;
		height: 192px;
		margin-top: 2px !important;
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
		/* border: 2px solid #ccc; */
		width: 283px;
		height: 100px;
	}
	.logodiv2{
		/* border: 2px solid #ccc; */
		width: 283px;
		height: 100px;
	}
	.logodiv3{
		/* border: 2px solid #ccc; */
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
	.index-activity{
		position: relative;
	}
	.swiper-button-prev{
		left: -70px !important;
	}
	.swiper-button-next{
		right: -70px !important;
	}
	.swiper-slide{
		margin-bottom: 0 !important;
	}
	@media (max-width: 768px){
		.index-activity .imgsize {
			height: 217px;
		}
		.swiper-button-prev,.swiper-button-next{
			display: none;
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
			width: 115px;
			margin-right: 10px;
		}
		.logodiv1{
			/* border: 2px solid #ccc; */
			width: 120px;
			height: 40px;
		}
		.logodiv2{
			/* border: 2px solid #ccc; */
    		width: 120px;
    		height: 40px;

		}
		.logodiv3{
			/* border: 2px solid #ccc; */
			width: 110px;
			height: 40px;
		}
		.logo1{
			width: 34%;
			z-index: -100;
			margin-top: 4px;
			position: absolute;
		}
		.logo2{
			width: 35%;
			height: 86%;
			z-index: -100;
			position: absolute;
			margin-top: -7px;
		}
		.logo3{
			width: 25%;
			height: 85%;
			margin-left: 15px;
			margin-top: 4px;
			position: absolute;
		}
	}
	.indexnewtext{
		text-indent: 26px;
		font-size: 16px;
		margin-top: 5px;
	}
	
</style>
<!--=== Slider ===-->
<div class="fullwidthbanner-container">
	<div class="fullwidthabnner">
		<ul>
			<?php if(is_array($pcbanner)): $i = 0; $__LIST__ = $pcbanner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pcbanner_row): $mod = ($i % 2 );++$i;?><li data-transition="pcbannerleft" data-slotamount="1" data-masterspeed="300" data-thumb="/2021/Public/Static/Home/img/sliders/revolution/thumbs/thumb1.jpg">
					<a href="<?php echo ($pcbanner_row['url']); ?>" target="_blank">
						<img src="<?php echo ($pcbanner_row['image']); ?>" alt="" style="object-fit: contain;" />
					</a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>

		<div class="tp-bannertimer tp-bottom"></div>
	</div>
</div>
<!--/slider-->
<!--=== End Slider ===-->

<!--=== Purchase Block ===-->
<!-- <div class="row-fluid purchase margin-bottom-30">
    <div class="container">
		<div class="span9">
            <span>Unify is a clean and fully responsive incredible Template.</span>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi  vehicula sem ut volutpat. Ut non libero magna fusce condimentum eleifend enim a feugiat.</p>
        </div>
        <a href="http://sc.chinaz.com/moban/" class="btn-buy hover-effect">Purchase Now</a>
    </div>
</div> -->
<!--/row-fluid-->
<!-- End Purchase Block -->


<!-- Recent Works -->
<div class="container">
	<!-- Recent Works -->
	<div class="index-activity">
		<div class="headline">
			<h3><a style="text-decoration: none;" href="<?php echo U('Active/index');?>">巡禮活動</a></h3>
			<h4><a href="<?php echo U('Active/index');?>">查看更多>></a> </h4>
		</div>
		<div class="swiper-container  swiper-con-shop" style="position: static;">
			<ul class="thumbnails swiper-wrapper ulc">
				<?php if(is_array($active)): $i = 0; $__LIST__ = $active;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$active_row): $mod = ($i % 2 );++$i;?><li class="swiper-slide" link="<?php echo U('Active/detail',array('id'=>$active_row['id']));?>">
						<div class="thumbnail-style" >
							<div class="thumbnail-img acthumnail-img">
								<!-- <div class="imgsize"> -->
									<img style="width: 100%;" src="<?php echo ($active_row['cover']); ?>" alt=""/>
								<!-- </div> -->
								<!-- <a class="btn-more hover-effect" href="<?php echo U('Active/detail',array('id'=>$active_row['id']));?>">查看詳情+</a> -->
							</div>
						<div class="activemodel">
							<h3 style=" white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align: center;">
								<a class="hover-effect" href="<?php echo U('Active/detail',array('id'=>$active_row['id']));?>"><?php echo ($active_row['title']); ?></a>
							</h3>
							<?php if($active_row['time']): ?><p style="color: #385A9F;" id="index_overflow" title="<?php echo ($active_row['time']); ?>">活動時間：</p>
								<p><?php echo ($active_row['time']); ?></p>
								<?php else: ?>
								<p>活動時間：暫無</p><?php endif; ?>
							<?php if($active_row['address']): ?><p style="color: #385A9F;" id="index_overflow" title="<?php echo ($active_row['address']); ?>">活動地點：</p>
								<p><?php echo ($active_row['address']); ?></p>
								<?php else: ?>
								<p>活動地點：暫無</p><?php endif; ?>
							<p style="text-align: right;"><a class="btn-more hover-effect" href="<?php echo U('Active/detail',array('id'=>$active_row['id']));?>"><img style="width: 25px;" src="/Public/Static/Home/img/eye.png" alt=""> 查看詳情</a></p>
						</div>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
	</div>
	<!--/thumbnails-->
	<!-- //End Recent Works -->


	<div class="index-activity">
		<div class="headline">
			<h3><a href="<?php echo U('News/index');?>">新聞資訊</a></h3>
			<h4><a href="<?php echo U('News/index');?>">查看更多>></a> </h4>
		</div>
		<div id="swiper-con-newac" class="swiper-container " style="position: static;">
			<ul class="thumbnails swiper-wrapper ulc">
				<?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><li class="swiper-slide" link="<?php echo U('News/detail',array('id'=>$new['id']));?>">
						<div class="thumbnail-style">
							<div class="thumbnail-img">
									<img src="<?php echo ($new['cover']); ?>" alt=""/>
							</div>
							<div class="right-style">
								<h3 id="index_overflow" title="<?php echo ($new['title']); ?>">
									<a class="hover-effect" href="<?php echo U('News/detail',array('id'=>$new['id']));?>"><?php echo ($new['title']); ?></a>
								</h3>
								<p class="indexnewtext">
								<?php echo mb_substr(strip_tags(str_replace(array(" ","&nbsp;","&amp;"),"",htmlspecialchars_decode($new['content']))),0,50,"utf-8");?>...
								</p>
								<p style="width: 100%;text-align: right;"><a class="btn-more hover-effect" href="<?php echo U('News/detail',array('id'=>$new['id']));?>"><img style="width: 25px;" src="/Public/Static/Home/img/eye.png" alt=""> 查看詳情</a></p>
							</div>
							
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
	</div>


	<div class="index-activity">
		<div class="headline">
			<h3><a class="titlecolor">社區魅力</a></h3>
			
		</div>
		<div class="shopcategory streenmeili swiper-container swiper-con-meili" style="background-color: #385A9F;">
			<ul class="thumbnails swiper-wrapper ulc">

				<?php if(is_array($streetHistory)): $i = 0; $__LIST__ = array_slice($streetHistory,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$streetHistory_row): $mod = ($i % 2 );++$i;?><li  class="swiper-slide" link="<?php echo U('StreetHistory/index');?>">
						<div class="thumbnail-style">
							<div class="thumbnail-img" style="display: flex;justify-content: center;">
									<img src="<?php echo ($streetHistory_row['cover']); ?>" alt="" />
							</div>

								<h3 style="text-align: center;" id="index_overflow" title="街道故事">
								<a style="color: white;" class="hover-effect" href="<?php echo U('StreetHistory/index');?>">街道故事</a>
								<!-- <a style="color: white;" class="hover-effect" href="https://www.hollandshow.cn/StreetHistory/index.html">街道故事</a> -->
							</h3>

							<p></p>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>

				<?php if(is_array($post)): $i = 0; $__LIST__ = array_slice($post,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p_row): $mod = ($i % 2 );++$i;?><li  class="swiper-slide" link="<?php echo U('Posts/index');?>">
						<div class="thumbnail-style">
							
							<div class="thumbnail-img" style="display: flex;justify-content: center;">
								
									<img src="<?php echo ($p_row['cover']); ?>" alt="" />
							</div>
								<h3 style="text-align: center;" id="index_overflow" title="特色景点">
								<a style="color: white;"  class="hover-effect" href="<?php echo U('Posts/index');?>">特色景点</a>
							</h3>
							<p></p>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>

			</ul>
			<!-- <div class="swiper-button-prev">&lt;</div>
			<div class="swiper-button-next">&gt;</div> -->
		</div>
	</div>
	<!--/thumbnails-->
	<!-- //End Recent Works -->
	
	<div class="index-activity " style="margin-bottom: 30px;">
		<!-- Recent Works -->
		<div class="headline">
			<h3><a >社區美食</a></h3>  
			
		</div>
		<div class="shopcategory row-fluid margin-bottom-40 swiper-container swiper-con-scenic" style="background-color: #385A9F;">
			<ul class="thumbnails swiper-wrapper ulc">

				<?php if(is_array($shop)): $i = 0; $__LIST__ = array_slice($shop,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s_row1): $mod = ($i % 2 );++$i;?><li class="swiper-slide " link="<?php echo U('Shop/categroy','shoptype=discount');?>">
						<div class="thumbnail-style">
							<div class="thumbnail-img">
								<img src="<?php echo ($s_row1['cover']); ?>" alt="" />

							</div>
							<h3 style="text-align: center;" id="index_overflow" title="優惠" style="text-align: center;">
								<a style="color: white;" class="hover-effect" href="<?php echo U('Shop/categroy','shoptype=discount');?>">優惠</a>
							</h3>

							<p></p>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				<?php if(is_array($shop)): $i = 0; $__LIST__ = array_slice($shop,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s_row2): $mod = ($i % 2 );++$i;?><li class="swiper-slide " link="<?php echo U('Shop/categroy','shoptype=food');?>">
						<div class="thumbnail-style ">
							<div class="thumbnail-img">
								<img src="<?php echo ($s_row2['cover']); ?>" alt="" />

							</div>
							<h3 id="index_overflow" title="美食" style="text-align: center;">
								<a style="color: white;" class="hover-effect" href="<?php echo U('Shop/categroy','shoptype=food');?>">美食</a>
							</h3>

							<p></p>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>

                <?php if(is_array($shop)): $i = 0; $__LIST__ = array_slice($shop,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s_row3): $mod = ($i % 2 );++$i;?><li class="swiper-slide " link="<?php echo U('Shop/categroy','shoptype=fashion');?>">
						<div class="thumbnail-style ">
							<div class="thumbnail-img">
								<img src="<?php echo ($s_row3['cover']); ?>" alt="" />

							</div>
							<h3 id="index_overflow" title="潮店" style="text-align: center;">
								<a style="color: white;" class="hover-effect" href="<?php echo U('Shop/categroy','shoptype=fashion');?>">潮店</a>
							</h3>

							<p></p>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div class="swiper-button-prev">&lt;</div>
			<div class="swiper-button-next">&gt;</div>
		</div>
		<!--/row-->
		<!-- //End Recent Works -->
	</div>
	<!-- <div class="index-activity " style="margin-bottom: 30px;">
		<div class="headline">
			<h3><a href="/Media/index.html">精彩瞬間</a></h3>
		</div>
		<div class="row-fluid margin-bottom-40 swiper-container swiper-con-scenic">
			<ul class="thumbnails swiper-wrapper ulc">
				<?php if(is_array($media)): $i = 0; $__LIST__ = $media;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$media_c): $mod = ($i % 2 );++$i;?><li class="swiper-slide" link="<?php echo U('Media/detail',array('id'=>$media_c['id']));?>">
						<div class="thumbnail-style">
							<div class="thumbnail-img">
								<div class="overflow-hidden imgsize">
									<img style="" src="<?php echo ($media_c['cover_width_300']); ?>" alt="" />
									
								</div>                                   
								<a class="btn-more hover-effect" href="<?php echo U('Media/detail',array('id'=>$media_c['id']));?>">查看詳情+</a>
							</div>
							<h3 id="index_overflow" title="<?php echo ($media_c['title']); ?>">
								<a class="hover-effect" href="<?php echo U('Media/detail',array('id'=>$media_c['id']));?>"><?php echo ($media_c['title']); ?></a>
							</h3>
							<p></p>                               
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			
			</ul>
			<div class="swiper-button-prev">&lt;</div>
			<div class="swiper-button-next">&gt;</div>
		</div>
	
	</div> -->
	<!--<div class="index-activity">
		&lt;!&ndash; Recent Works &ndash;&gt;
		<div class="headline">
			<h3><a href="#">友情鏈接</a></h3>
		</div>
		<div>
			<ul class="logo">
				<a href="https://10fantasia.com/">
				<li class="logoli">
						<div class="logodiv1">
							<img class="logo1" src="/2021/Public/Static/Home/img/footer/logo1.jpg" alt="" />
						</div>
					</li>
				</a>
				<a href="https://www.macaoevent.com/">
				<li class="logoli">
					<div class="logodiv2">
						<img class="logo2" src="/2021/Public/Static/Home/img/footer/logo2.jpg" alt="" />
					</div>
				</li>
				</a>
				<a href="https://fantasiamacau.com/">
				<li class="logoli">
					<div class="logodiv3">
						<img class="logo3" src="/2021/Public/Static/Home/img/footer/logo3.jpg" alt="" />
					</div>
				</li>
		</a>
			</ul>
		</div>
	</div>-->
</div>

<script type="text/javascript">
	var wz = "https://www.hollandshow.cn/2021/index.php/Index/index.html"
	
</script>

<!--/container-->

<!-- Information Blokcs -->
<!-- 	<div class="container">
		<div class="headline">
			<h3>地圖</h3>
		</div>

		<div id="map"></div>
	</div> -->
<!--/container-->
<!-- End Content Part -->



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