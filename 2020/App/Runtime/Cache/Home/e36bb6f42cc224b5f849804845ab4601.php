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
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <!-- <h1 class="color-green pull-left">Portfolio</h1> -->
        <ul class="pull-right breadcrumb">
            <li><a href="index.html">首頁</a> <span class="divider">/</span></li>
            <li class="active">史話街道</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container"> 	
	<div class="row-fluid"> 
        <div id="w">    
            <!-- <div class="sort" id="sort">
				<ul class="unstyled inline">
                	<li><a href="#" class="all selected">全部</a></li> -->
                    <!-- <?php if(is_array($street_list)): $i = 0; $__LIST__ = $street_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$street): $mod = ($i % 2 );++$i;?><li><a href="#" class="street<?php echo ($street['id']); ?>"><?php echo ($street['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?> -->
            <!--     </ul>
            </div> -->
            
            <ul class="portfolio recent-work clearfix"> 
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li data-id="id-1" class="street<?php echo ($row['street_id']); ?>">
                    <a href="<?php echo U('StreetHistory/detail',array('id'=>$row['id']));?>">
                    	<em class="overflow-hidden imgsize"><img src="<?php echo ($row['cover_width_300']); ?>" alt="" /></em>
                        <span>
                            <strong><?php echo ($row['title']); ?></strong>
                        </span>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="pagination pagination-large pagination-centered">
                <ul><?php echo ($page); ?></ul>
            </div>
        </div>                
    </div><!--/row-fluid-->         
</div><!--/container-->	 	
<!--=== End Content Part ===-->

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