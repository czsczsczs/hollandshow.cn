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
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="" />
		<meta name="author" content="" />

		<!-- CSS Global Compulsory-->
		<link rel="stylesheet" href="/2020/Public/Static/Home/plugins/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/2020/Public/Static/Home/css/style.css" />
		<link rel="stylesheet" href="/2020/Public/Static/Home/css/headers/header1.css" />
		<link rel="stylesheet" href="/2020/Public/Static/Home/plugins/bootstrap/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="/2020/Public/Static/Home/css/style_responsive.css" />
		<link rel="stylesheet" href="/2020/Public/Static/Home/css/iconfont.css" />
		<link rel="shortcut icon" href="https://www.hollandshow.cn/favicon2020.ico" />
		<!-- CSS Implementing Plugins -->
		<link rel="stylesheet" href="/2020/Public/Static/Home/plugins/revolution_slider/css/rs-style.css" media="screen" />
		<link rel="stylesheet" href="/2020/Public/Static/Home/plugins/revolution_slider/rs-plugin/css/settings.css" media="screen" />
		<link rel="stylesheet" href="/2020/Public/Static/Home/plugins/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="/2020/Public/Static/Home/plugins/flexslider/flexslider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="/2020/Public/Static/Home/plugins/parallax-slider/css/parallax-slider.css" type="text/css" />
		<link rel="stylesheet" href="/2020/Public/Static/Home/plugins/bxslider/jquery.bxslider.css" />
		<link rel="stylesheet" href="/2020/Public/Static/Home/plugins/swiper/swiper-4.4.1.min.css" />
		<link rel="stylesheet" href="/2020/Public/Static/Home/plugins/portfolioSorting/css/sorting.css" />
		<!-- CSS Theme -->
		<link rel="stylesheet" href="/2020/Public/Static/Home/css/themes/default.css" id="style_color" />
		<link rel="stylesheet" href="http://api.map.baidu.com/library/TrafficControl/1.4/src/TrafficControl_min.css"/>
<!--		<meta name="viewport" id="viewport" http-equiv="Content-Type" content="initial-scale=1.0;minimum-scale=1.0;maximum-scale=1.0;text/html; charset=utf-8" />-->
		<meta name="viewport" id="viewport" http-equiv="Content-Type" content="initial-scale=1.0,width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no,text/html,charset=utf-8"/>
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
			<!-- <img src="/2020/Public/Static/Home/img/code.png"> -->
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
			<div class="container">
				<!-- Logo -->
				<div class="logo">
					<a href="<?php echo U('Index/index');?>">
						<img id="logo-header" src="/2020/Public/Static/Home/img/logo1-default.png" alt="Logo" />
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
							<ul class="nav top-2">
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
								<li <?php if($Method == 'StreetHistory'): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('StreetHistory/index');?>" class="dropdown-toggle" data-toggle="">街道故事
									</a>

									<b class="caret-out"></b>
								</li>
								<li <?php if($Method == 'Posts'): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Posts/index');?>" class="dropdown-toggle" data-toggle="">特色景點
									</a>

									<b class="caret-out"></b>
								</li>
								<li <?php if($Method == 'Shop'): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Shop/index');?>" class="dropdown-toggle" data-toggle="">社區美食
									</a>
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
								<li style="margin-right: 20px"><a class="search"><i class="icon-search search-btn"></i></a></li>
								<li class="selectbox" style="margin-left: 10px">
									<div class="select">
											<select id="selectbox2" onchange="window.location.href=options[selectedIndex].value">
												<option id="sb1" style="display:none;" value="" >2020荷蘭園巡禮</option>
												<option id="sb2" value="">2020荷蘭園巡禮</option>
												<option id="sb3" value="" >2021荷蘭園巡禮</option>

											</select>
									</div>
								</li>
							</ul>
							<div class="search-open">
								<div class="input-append">
									<form action="<?php echo U('Search/index');?>" method="get">

										<input type="text" name="keyword" class="span3" placeholder="Search" />
										<button type="submit" class="btn-u">Go</button>
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
<script>
var hp = window.location.protocol;
			var yu=document.domain;
			document.getElementById("sb1").value=hp+"//"+yu+"/2020/index.php/Index/index.html";
			document.getElementById("sb2").value=hp+"//"+yu+"/index.php/Index/index.html";
			document.getElementById("sb3").value=hp+"//"+yu+"/2021/index.php/Index/index.html";
</script>
<!--=== End Header ===-->

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-20">
	<div class="container">
		<h1 class="color-green pull-left"></h1>
		<ul class="pull-right breadcrumb">
			<li><a href="<?php echo U('Index/index');?>">首頁</a> <span class="divider">/</span></li>
			<li><a href="<?php echo U('Shop/index');?>">社區美食</a> <span class="divider">/</span></li>
			<li class="active"><?php echo ($shop['title']); ?></li>
		</ul>
	</div>
	<!--/container-->
</div>
<!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">
	<div class="row-fluid blog-page portflio_details">
		<!-- Left Sidebar -->
		<!-- <div class="span9"> -->
		<!-- <div class="blog margin-bottom-30"> -->
		<!-- <h3 class="text-center"><?php echo ($shop['title']); ?></h3> -->
		<!-- <div class="text-center">作者：</div> -->
		<!-- <div class="blog-img" style="font-size: 20px;"></div> -->
		<!-- <p><?php echo (htmlspecialchars_decode($shop['content'])); ?></p> -->
		<!-- <?php if($shop['business_hours']): ?><p style="color: rgb(51, 51, 51);">開店時間 : <?php echo ($shop['business_hours']); ?></p><?php endif; ?>
                    <?php if($shop['address']): ?><p style="color: rgb(51, 51, 51);">地址 : <?php echo ($shop['address']); ?></p><?php endif; ?> -->
		<!-- </div> -->
		<!--/blog-->
		<!-- <ul class="unstyled" style="font-size: 16px">
                <li><i class="icon-time color-green"></i> 開放時間:<?php echo ($post['business_hours']); ?></li>
                <li><i class="icon-calendar color-green"></i> 地點:<?php echo ($post['address']); ?></li>
            </ul> -->



		<!-- </div> -->
		<!--/span9-->

		<div class="conment">

			<div class="span7" style="clear: right;">
				<div id="myCarousel" class="carousel slide">
					<div class="carousel-inner">
						<?php if($images): if(is_array($images)): $key = 0; $__LIST__ = $images;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($key % 2 );++$key;?><div class="item <?php if($key == 1): ?>active<?php endif; ?>">
									<img src="<?php echo ($row['savepath']); ?>" alt="" />
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
							<?php else: ?>
							<div class="item active">
								<img src="<?php echo ($shop['cover']); ?>" alt="" />
							</div><?php endif; ?>
					</div>
					<div class="carousel-arrow">
						<a data-slide="prev" href="#myCarousel" class="left carousel-control"><i class="icon-angle-left"></i></a>
						<a data-slide="next" href="#myCarousel" class="right carousel-control"><i class="icon-angle-right"></i></a>
					</div>
				</div>
			</div>
			<!--/span7-->
			<!-- //End Tabs and Carousel -->

			<div class="span5" style="width: 37.5%;">
				<h3><?php echo ($shop['title']); ?></h3>
				<p><?php echo (htmlspecialchars_decode($shop['content'])); ?></p>

				<ul class="unstyled" style="font-size: 16px;width: 350px;">
					<li>
						<span style="width:80px;display: inline-block;vertical-align: top;"><i class="icon-phone color-green"></i> 電話：</span>
						<span style="width:210px;display: inline-block;vertical-align: top;"><?php echo ($shop['phone']); ?></span>
					</li>
					<li>
						<span style="width:80px;display: inline-block;vertical-align: top;"><i class="icon-map-marker color-green"></i>
							地點：</span>
						<span style="width:210px;display: inline-block;vertical-align: top;"><?php echo ($shop['address']); ?></span>
					</li>
					<li id="none" style="display: none">
						<span style="width:80px;display: inline-block;vertical-align: top;"><img src="/2020/Public/Static/Home/img/yh.png"/ style="width: 20px;">
							優惠：</span>
						<span style="width:210px;display: inline-block;vertical-align: top;"><?php echo ($shop['special_offer']); ?></span>
					</li>
				</ul>
			</div>
			<div id="allmap" class="map"></div>
			<div class="title">
				<a class="social weixin" href="javascript:">
					<div class="qrcode" id="qrcode"></div>
					<!-- <div class="bigqrcode" id="bigqrcode" style="display: none;"></div> -->
					<!--				<img src="/2020/Public/Static/Home/img/footer/wechat.png">-->
					<svg t="1628480769448" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="8759" width="32" height="32"><path d="M302.787561 407.585224a37.1 37.1 0 1 0 72.214041-17.052045 37.1 37.1 0 1 0-72.214041 17.052045Z" p-id="8760" fill="#707070"></path><path d="M512 0C230.4 0 0 230.4 0 512s230.4 512 512 512 512-230.4 512-512S793.6 0 512 0z m-87.24 683.75c-33.7 0-65.84-5.66-95.2-15.9l-83.11 45.57 25.1-74.03c-59.59-39.07-97.99-100.39-97.99-169.35 0-118.03 112.47-213.71 251.21-213.71 122.97 0 225.28 75.16 246.96 174.43-3.41-0.12-6.83-0.2-10.27-0.2-126.04 0-228.22 86.64-228.23 193.51 0 20.6 3.81 40.44 10.84 59.06-6.38 0.41-12.81 0.62-19.31 0.62z m358.31 87.68l21.08 62.17-72.52-39.77c-21.96 6.53-45.57 10.09-70.17 10.09-117.14 0-212.1-80.52-212.1-179.84s94.96-179.84 212.1-179.84 212.1 80.52 212.1 179.84c0 60.95-35.77 114.82-90.49 147.35z" p-id="8761" fill="#707070"></path><path d="M595.2 568.57m-29.7 0a29.7 29.7 0 1 0 59.4 0 29.7 29.7 0 1 0-59.4 0Z" p-id="8762" fill="#707070"></path><path d="M511.46 436.18c20.49 0 37.1-16.61 37.1-37.1s-16.61-37.1-37.1-37.1c-20.48 0-37.09 16.61-37.1 37.1 0 20.49 16.61 37.1 37.1 37.1z" p-id="8763" fill="#707070"></path><path d="M733.38 568.57m-29.7 0a29.7 29.7 0 1 0 59.4 0 29.7 29.7 0 1 0-59.4 0Z" p-id="8764" fill="#707070"></path></svg>
				</a>
				<!--<button type="button" class="active-share-facebook" style="background-image: url(/2020/Public/Static/Home/img/footer/facebook.png);"
                        onclick="shareFacebook()"></button>-->
				<button type="button" class="active-share-facebook" onclick="shareFacebook()">
					<svg t="1628480645627" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2921" width="32" height="32"><path d="M588.288 998.912V651.776h114.176l17.408-137.728H588.288v-88.064c0-22.528 4.608-38.912 13.312-50.176 9.216-11.264 26.112-16.896 52.224-16.896h70.656V235.52c-24.064-3.584-58.368-5.632-102.4-5.632-51.712 0-93.184 15.872-124.416 47.616s-46.592 76.8-46.592 134.656v101.376H336.384v137.728H450.56v349.696C207.36 970.752 18.944 763.392 18.944 512c0-272.384 220.672-493.568 493.568-493.568S1006.08 239.104 1006.08 512c0 246.784-181.248 450.56-417.792 486.912z m-75.264 6.656H512h1.024z" p-id="2922" fill="#707070"></path></svg>
				</button>
			</div>
			<div style="font-size: 18px">
				<span style="width: 100%;display: inline-block;">上一篇：
					<?php if($before['title'] != NULL): ?><a href="<?php echo U(Shop/detail,array('id'=>$before['id']));?>" class="handover"><?php echo ($before['title']); ?></a>
						<?php else: ?>
						<a class="no">無</a><?php endif; ?>
				</span>
				<span>下一篇：
					<?php if($later['title'] != NULL): ?><a href="<?php echo U(Shop/detail,array('id'=>$later['id']));?>" class="handover"><?php echo ($later['title']); ?></a>
						<?php else: ?>
						<a class="no">無</a><?php endif; ?>
				</span>
			</div>
			<div class="headline" style="display:block;margin:40px 0 25px 0;border-bottom:1px dotted #e4e9f0;clear: left;">
				<h3>猜你喜歡</h3>
				<div class="recent-work-btn">
					<div class="swiper-button-prev recent-work-prev"></div>
					<div class="swiper-button-next recent-work-next"></div>
				</div>
			</div>
			<div class="swiper-container swiper-con-shop">
				<ul class="thumbnails swiper-wrapper ulc">
					<?php if(is_array($re_shop)): $i = 0; $__LIST__ = $re_shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shop_re): $mod = ($i % 2 );++$i;?><li class="swiper-slide">
							<a class="shop_a" href="<?php echo U(Shop/detail,array('id'=>$shop_re['id']));?>" style="text-align:center;background:#fcfcfc;display:inline-block;">
								<em class="overflow-hidden"><img class="shop-qt" src="<?php echo ($shop_re['cover_width_300']); ?>" alt="" /></em>
								<span style="display: block;padding: 10px;border-bottom: solid 2px #eee;">
									<strong><?php echo ($shop_re['title']); ?></strong>
									<i></i>
								</span>
							</a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>

		<!-- Right Sidebar -->
		<div class="span3">
            <!-- Search Bar -->
            <div class="headline"><h3>搜索內容</h3></div>
            <div class="input-append  margin-bottom-20">
                <form action="<?php echo U('Search/index');?>" method="get">
                    <input type="text" name="keyword" class="span9" />
                    <button type="submit" class="btn-u">搜索</button>
                </form>

            </div>

            <!-- Posts -->
            <div class="posts margin-bottom-20">
                <div class="headline"><h3>最新活動</h3></div>
                <?php if(is_array($new_active)): $i = 0; $__LIST__ = $new_active;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$active): $mod = ($i % 2 );++$i;?><dl class="dl-horizontal">
                    <dt><a href="<?php echo U('Active/detail',array('id'=>$active['id']));?>"><img src="<?php echo ($active['cover']); ?>" alt="" /></a></dt>
                    <dd>
                        <p><a href="<?php echo U('Active/detail',array('id'=>$active['id']));?>"><?php echo ($active['title']); ?></a></p>
                    </dd>
                </dl><?php endforeach; endif; else: echo "" ;endif; ?>
            </div><!--/posts-->


    <!-- Posts -->
    <div class="posts margin-bottom-20">
        <div class="headline"><h3>圖集推薦</h3></div>
        <?php if(is_array($new_news)): $i = 0; $__LIST__ = $new_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><dl class="dl-horizontal">
                <dt><a href="<?php echo U('News/detail',array('id'=>$news['id']));?>"><img src="<?php echo ($news['cover']); ?>" alt="" /></a></dt>
                <dd>
                    <p><a href="<?php echo U('News/detail',array('id'=>$news['id']));?>"><?php echo ($news['title']); ?></a></p>
                </dd>
            </dl><?php endforeach; endif; else: echo "" ;endif; ?>
    </div><!--/posts-->



            <!-- Posts -->
            <div class="posts margin-bottom-20">
                <div class="headline"><h3>最新資訊</h3></div>
                <?php if(is_array($right_data)): $i = 0; $__LIST__ = $right_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$right_data_row): $mod = ($i % 2 );++$i;?><dl class="dl-horizontal">
                    <dt>
                        <?php if($right_data_row['type'] == 'shop'): ?><a href="<?php echo U('Shop/detail',array('id'=>$right_data_row['id']));?>">
                        <?php elseif($right_data_row['type'] == 'posts'): ?>
                        <a href="<?php echo U('Posts/detail',array('id'=>$right_data_row['id']));?>">
                        <?php else: ?>
                        <a href="<?php echo U('StreetHistory/detail',array('id'=>$right_data_row['id']));?>"><?php endif; ?>
                        <img src="<?php echo ($right_data_row['cover_width_300']); ?>" alt="" />
                        </a>
                    </dt>
                    <dd>
                        <p>
                        <?php if($right_data_row['type'] == 'shop'): ?><a href="<?php echo U('Shop/detail',array('id'=>$right_data_row['id']));?>">
                        <?php elseif($right_data_row['type'] == 'posts'): ?>
                        <a href="<?php echo U('Posts/detail',array('id'=>$right_data_row['id']));?>">
                        <?php else: ?>
                        <a href="<?php echo U('StreetHistory/detail',array('id'=>$right_data_row['id']));?>"><?php endif; echo ($right_data_row['title']); ?></a>
                        </p>
                    </dd>
                </dl><?php endforeach; endif; else: echo "" ;endif; ?>

            </div><!--/posts-->
            <!-- Photo Stream -->
            <!-- <div class="headline"><h3>社區美圖</h3></div>
            <ul class="unstyled blog-ads">
                <li><a href="photo_details.html"><img src="/2020/Public/Static/Home/img/sliders/elastislide/5.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/2020/Public/Static/Home/img/sliders/elastislide/6.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/2020/Public/Static/Home/img/sliders/elastislide/8.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/2020/Public/Static/Home/img/sliders/elastislide/10.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/2020/Public/Static/Home/img/sliders/elastislide/11.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/2020/Public/Static/Home/img/sliders/elastislide/1.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/2020/Public/Static/Home/img/sliders/elastislide/2.jpg" alt="" class="hover-effect" /></a></li>
                <li><a href="photo_details.html"><img src="/2020/Public/Static/Home/img/sliders/elastislide/7.jpg" alt="" class="hover-effect" /></a></li>
            </ul> -->

            <!-- Blog Tags -->

        </div>
		<!--/span3-->

		<!-- Recent Works -->
		<!-- <div class="headline1">
            <h3>其他店鋪</h3>
            <div class="recent-work-btn">
                <div class="swiper-button-prev recent-work-prev"></div>
                <div class="swiper-button-next recent-work-next"></div>
            </div>
        </div>
        <div class="swiper-container swiper-con-activity">
            <ul class="thumbnails swiper-wrapper ulc">
                <?php if(is_array($re_shop)): $i = 0; $__LIST__ = $re_shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shop_re): $mod = ($i % 2 );++$i;?><li class="swiper-slide" style="height:250px;">
                    <a href="<?php echo U(Shop/detail,array('id'=>$shop_re['id']));?>">
                        <em class="overflow-hidden"><img style="height:180px;" src="<?php echo ($shop_re['cover']); ?>" alt="" /></em>
                        <span>
                            <strong><?php echo ($shop_re['title']); ?></strong>
                            <i></i>
                        </span>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div> -->
	</div>
	<!--/row-fluid-->
</div>
<!--/container-->
<!--=== End Content Part ===-->
<style type="text/css">

	.map {
		width: 37.5%;
		height: 200px;
		left: 15px;
		top: 15px;
	}

	.conment {
		display: block;
		float: left;
		width: 74.3%
	}


	.qrcode{
		    margin-left: -37px;
		    margin-top: -300%;
	}
	.weixin {
		position: relative;
		top: 0.86rem;
	}
	.weixin div.qrcode {
		position: absolute;
		z-index: 99;
		top: -96px;
		left: -9px;
		max-width: none;
		/* transform-origin: top right; */
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
		margin-left: 535px;
		height: 1px;
		border-top: 1px solid #ddd;
		text-align: center;
	}
	.title{color: #dddddd;text-align: center;margin-right: -2%;margin-top: 3%;margin-bottom: 3%;}
	.title:before,.title:after{content: "";width: 15%;border-top: 0.01rem #dddddd solid; display: inline-block;
		vertical-align: middle;}
	.title:before{margin-right: 1%;}
	.title:after{margin-left: 1.5%;}
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

	.headline {
		margin: 0px;
	}

	.handover {
		padding: 3px;
		color: #cc9966;
		font-size: 18px;
	}

	.handover:hover {
		color: #fcd600;
		text-decoration: none;
	}

	.no {
		pointer-events: none;
		color: #ddd;
		font-size: 18px;
	}

	.swiper-slide {
		height: 250px;
		width: 285px;
		margin-right: 10px;
	}
	.shop-qt{
		width:265px;
		height:180px;
	}

	@media (max-width: 768px) {
		.line_02 {
			margin-left: 0;
			margin-bottom: 30px;
		}
		.weixin div.qrcode {
			left: -33px;
			margin-top: -145px;
			position: absolute;
			margin-right: auto;
			margin-left: auto;
		}
		.conment {
			width: 100%;
		}

		.span5 p {
			width: 200px;
		}

		.span5 h3 {
			width: 200px;
		}

		.map {
			left: 0px;
			width: 100%;
			margin: auto;
		}

		.span5 {
			width: 374px;
			margin: 0px;
		}
		.swiper-slide{
			width: 100%;
			height: 100%;
		}
		.shop_a{
			width: 100%;
			height: 100%;
		}
		.shop-qt{
			width: 100%;
			height: 200px;
		}
	}

	@media (max-width: 425px) {
		.span5 {
			width: 335px;
			margin: 0px;
		}
	}

	@media (max-width: 320px) {
		.span5 {
			width: 280px;
			margin: 0px;
		}
	}
</style>
<script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=YucscdufpGHjsbbnhrjhrLBWFWsulcMq&s=1"></script>
<script type="text/javascript" src="../../../../Public/Static/Home/js/jquery.min.js"></script>
<script type="text/javascript" src="../../../../Public/Static/Home/js/qrcode.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../../../Public/Static/Home/js/qrcodebox-master/qrcodebox/css/qrcode.box.css">
<script src="../../../../Public/Static/Home/js/qrcodebox-master/qrcodebox/js/jquery.min.js"></script>
<script src="../../../../Public/Static/Home/js/qrcodebox-master/qrcodebox/js/jquery.qrcode.js"></script>
<script src="../../../../Public/Static/Home/js/qrcodebox-master/qrcodebox/js/qrcode.js"></script>
<script src="../../../../Public/Static/Home/js/qrcodebox-master/qrcodebox/js/jquery.qrcode.box.js"></script>
<script type="text/javascript">
	//分享二维码
	var wz = "https://www.hollandshow.cn/Shop/detail/id/<?php echo ($shop['id']); ?>.html"
	new QRCode(document.getElementById("qrcode"), wz); // 设置要生成二维码的链接
	$(".qrcode").qrcodeBox({
	  title: "分享到微信朋友圈",
	  des: "“扫一扫” 即可分享",
	  width: 128,
	  height: 128,
	  qrcodeText: wz,
	  offsetX: 70,
	  offsetY: 100
	});

	// 使用 API
	qrcode.clear();
	qrcode.makeCode('new content');

</script>
<script type="text/javascript" src="https://map.qq.com/api/js?v=2.exp&key=EOABZ-6CX65-4UIIM-QRI2W-YEXOO-ORB2Q"></script>
<script type="text/javascript">


	var map = new qq.maps.Map(document.getElementById("allmap"), {
		center: new qq.maps.LatLng(<?php echo ($shop['latitude']); ?>,<?php echo ($shop['longitude']); ?>),      // 地图的中心地理坐标。
		zoom: 30                                                // 地图的中心地理坐标。
	});
	//设置Marker自定义图标的属性，size是图标尺寸，该尺寸为显示图标的实际尺寸，origin是切图坐标，该坐标是相对于图片左上角默认为（0,0）的相对像素坐标，anchor是锚点坐标，描述经纬度点对应图标中的位置
	var anchor = new qq.maps.Point(25, 40),
			size = new qq.maps.Size(42, 50),
			origin = new qq.maps.Point(0, 0),
			icon = new qq.maps.MarkerImage(
					"/2020/Public/Static/Home/img/biaozhu.png",
					size,
					origin,
					anchor
			);
	var marker = new qq.maps.Marker({
		map: map,
		position: new qq.maps.LatLng(<?php echo ($shop['latitude']); ?>,<?php echo ($shop['longitude']); ?>)
	});
	marker.setIcon(icon);

	//分享到facebook
	function shareToFB(title, url, picurl) {
		var sharesinastring =
			'http://www.facebook.com/sharer.php?title=' + title + '&url=' + url + '&content=utf-8&sourceUrl=' + url +
			'&pic=' + picurl;
		window.open(sharesinastring, 'newwindow', 'height=400,width=400,top=100,left=100');

	}

	function shareFacebook() {
		shareToFB("荷蘭園巡禮", wz);
	}
</script>
<!--//优惠为空隐藏-->
<script type="text/javascript">
	window.onload=function (){
		if ('<?php echo ($shop['special_offer']); ?>'!=''){
			document.getElementById('none').innerHTML='<?php echo ($shop['special_offer']); ?>';
		}else {
			document.getElementById('none').style.display='none';
		}
	}
</script>
<!--=== Footer ===-->
<!--=== Footer ===-->
<div class="footer">
	<img src="/2020/Public/Static/Home/img/footer/footer.jpg" class="footer-img footer-img-pc" alt="" />
	<img src="/2020/Public/Static/Home/img/footer/footer-mod.jpg" class="footer-img footer-img-mod" alt="" />
	<!--<div class="footer-share">
		<button type="button" class="footer-share-wechat" style="background-image: url(/2020/Public/Static/Home/img/footer/wechat.png);"
		 onclick="shareWechat()"></button>

		<div id="myModal" class="modal" style="display:none;">
			&lt;!&ndash; 弹窗内容 &ndash;&gt;
			<span class="close">&times;</span>
			<div class="footer-text">掃碼進入小程序</div>
			<img src="/2020/Public/Static/Home/img/footer/wx.jpg" class="footer-share-wx">
		</div>
		<button type="button" class="footer-share-weibo" style="background-image: url(/2020/Public/Static/Home/img/footer/weibo.png);"
		 onclick="shareWeibo()"></button>
		<button type="button" class="footer-share-facebook" style="background-image: url(/2020/Public/Static/Home/img/footer/facebook.png);"
		 onclick="shareFacebook()"></button>
	</div>-->
	<div class="footer-share">

				<button type="button" class="footer-share-wechat" style="background-image: url(/2020/Public/Static/Home/img/footer/IC-200-WeChat.png);background-size:30px 30px;"
						onclick="shareWechat()"></button>

				<div id="myModal" class="modal" style="display:none;">
					<!-- 弹窗内容 -->
					<span class="close">&times;</span>
					<div class="footer-text">掃碼進入小程序</div>
					<img src="/2020/Public/Static/Home/img/footer/wx.jpg" class="footer-share-wx">
				</div>
				<br>
				<button type="button" class="footer-share-weibo" style="background-image: url(/2020/Public/Static/Home/img/footer/IC-200-WB.png);background-size:30px 30px;"
						onclick="shareWeibo()"></button>
				<br>
				<button type="button" class="footer-share-facebook" style="background-image: url(/2020/Public/Static/Home/img/footer/IC-200-facebook.png);background-size:30px 30px;" onclick="shareFacebook()"></button>

	</div>
	<!-- <img src="/2020/Public/Static/Home/img/footer/wechat.png" class="footer-share-wechat">
	<img src="/2020/Public/Static/Home/img/footer/icon_weibo_24.png" class="footer-share-weibo">
	<img src="/2020/Public/Static/Home/img/footer/facebook.png" class="footer-share-facebook"> -->
	<a style="color: #696969;text-decoration:underline;position: relative;top:-20px;" href="http://www.macautech.net/">普及科技（澳門）有限公司</a><span
	 style="color: #696969;position: relative;top:-20px;">提供技術支持</span>
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
                        <img id="logo-footer" src="/2020/Public/Static/Home/img/logo2-default.png" class="pull-right" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div> -->
<!--/copyright-->
<!--=== End Copyright ===-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="/2020/Public/Static/Home/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/library/TrafficControl/1.4/src/TrafficControl_min.js"></script>
<!-- <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=PSGDO96ZzxBUijinzhN6PajEn75enP1c" /> -->
<script type="text/javascript" src="/2020/Public/Static/Home/js/modernizr.custom.js"></script>
<script type="text/javascript" src="/2020/Public/Static/Home/plugins/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="http://developer.baidu.com/map/jsdemo/demo/convertor.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="/2020/Public/Static/Home/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="/2020/Public/Static/Home/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="/2020/Public/Static/Home/plugins/swiper/swiper-4.4.1.min.js"></script>
<script type="text/javascript" src="/2020/Public/Static/Home/plugins/bxslider/jquery.bxslider.js"></script>
<script type="text/javascript" src="/2020/Public/Static/Home/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="/2020/Public/Static/Home/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="/2020/Public/Static/Home/plugins/parallax-slider/js/jquery.cslider.js"></script>
<script type="text/javascript" src="/2020/Public/Static/Home/plugins/portfolioSorting/js/jquery.quicksand.js"></script>
<script type="text/javascript" src="/2020/Public/Static/Home/plugins/portfolioSorting/js/sorting.js"></script>
<script type="text/javascript" src="/2020/Public/Static/Home/plugins/back-to-top.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="/2020/Public/Static/Home/js/app.js"></script>
<script type="text/javascript" src="/2020/Public/Static/Home/js/pages/index.js"></script>
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

		var mySwiper = new Swiper('.swiper-con-scenic', {
			loop: true,
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

		var mySwiper = new Swiper('.swiper-con-shop', {
			slidesPerView: 3,
			slidesPerGroup: 4,
			spaceBetween: 5,
			breakpoints: {
				1200: {
					slidesPerView: 3,
					slidesPerGroup: 3,
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
			'http://v.t.sina.com.cn/share/share.php?title=' + title + '&url=' + url + '&content=utf-8&sourceUrl=' + url +
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
		shareToXl("荷蘭園巡禮", "https://www.hollandshow.cn/Index/index.html");

	}
	function shareFacebook() {
        shareToFB("荷蘭園巡禮", wz);

	}
</script>
<!--[if lt IE 9]>
    <script src="/2020/Public/Static/Home/js/respond.js"></script>
<![endif]-->

</body>
<style type="text/css">
	.footer-share-wx {
		/*width: 30%;*/
		/*margin: 5px 5px 5px 5px;*/
		padding-bottom: 0px;
		padding-top: 0px;
		padding-right: 0px;
		padding-left: 0px;
	}

	.footer-share {
		position: fixed;
    		bottom: 76px;
    		right: 1px;
    		opacity: 1;
		z-index:99;
    		cursor: pointer;	
	}

	.footer-share-facebook {
		background-color: rgb(213 222 203 / 0%);
    		width: 30px;
   		 height: 30px;
   		 border: none;
    		position: fixed;
    		bottom: 56px;
   		 right: 20px;
    		opacity: 1;
    		cursor: pointer;	}

	.footer-share-wechat {
		background-color: rgb(213 222 203 / 0%);
    		width: 30px;
   		 height: 30px;
   		 border: none;
   		 position: fixed;
   		 bottom: 112px;
   		 right: 20px;
  		  opacity: 1;
   		 cursor: pointer;	
}

	.footer-share-weibo {
		background-color: rgb(213 222 203 / 0%);
    		width: 30px;
    		height: 30px;
    		border: none;
    		position: fixed;
    		bottom: 83px;
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
@media (min-width: 767px) {
.footer-share-wechat {
   		 bottom: 134px;	
}

	.footer-share-weibo {
    		bottom: 95px;	
}


}
	@media (max-width: 767px) {
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
	}


	/* 弹窗 (background) */
	.modal {
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
</style>

</html>