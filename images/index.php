<!doctype html>
<html lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>_【商品 报价 图片 行情 评测 】 -  淘库商城</title>
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="keywords" content="淘库商城" />
<meta name="description" content="淘库商城" />
<style type="text/css">
body {
_behavior: url(https://www.taokubuy.com/shop/templates/default/css/csshover.htc);
}
</style>
<link rel="shortcut icon" href="https://www.taokubuy.com/favicon.ico" />
<link href="https://www.taokubuy.com/shop/templates/default/css/base.css" rel="stylesheet" type="text/css">
<link href="https://www.taokubuy.com/shop/templates/default/css/home_header.css" rel="stylesheet" type="text/css">
<link href="https://www.taokubuy.com/shop/resource/font/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="https://www.taokubuy.com/shop/resource/font/font-awesome/css/font-awesome-ie7.min.css">
<![endif]-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://www.taokubuy.com/data/resource/js/html5shiv.js"></script>
      <script src="https://www.taokubuy.com/data/resource/js/respond.min.js"></script>
<![endif]-->
<!--[if IE 6]>
<script src="https://www.taokubuy.com/data/resource/js/IE6_PNG.js"></script>
<script>
DD_belatedPNG.fix('.pngFix');
</script>
<script>
// <![CDATA[
if((window.navigator.appName.toUpperCase().indexOf("MICROSOFT")>=0)&&(document.execCommand))
try{
document.execCommand("BackgroundImageCache", false, true);
   }
catch(e){}
// ]]>
</script>
<![endif]-->
<script>
var COOKIE_PRE = 'B713_';var _CHARSET = 'utf-8';var SITEURL = 'https://www.taokubuy.com/shop';var SHOP_SITE_URL = 'https://www.taokubuy.com/shop';var RESOURCE_SITE_URL = 'https://www.taokubuy.com/data/resource';var RESOURCE_SITE_URL = 'https://www.taokubuy.com/data/resource';var SHOP_TEMPLATES_URL = 'https://www.taokubuy.com/shop/templates/default';
</script>
<script src="https://www.taokubuy.com/data/resource/js/jquery.js"></script>
<script src="https://www.taokubuy.com/data/resource/js/common.js" charset="utf-8"></script>
<script src="https://www.taokubuy.com/data/resource/js/jquery-ui/jquery.ui.js"></script>
<script src="https://www.taokubuy.com/data/resource/js/jquery.validation.min.js"></script>
<script src="https://www.taokubuy.com/data/resource/js/jquery.masonry.js"></script>
<script src="https://www.taokubuy.com/data/resource/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>
<script type="text/javascript" src="https://www.taokubuy.com/data/resource/js/jquery.lazyload.js"></script>
<script type="text/javascript">
var PRICE_FORMAT = '&yen;%s';
$(function(){
	//首页左侧分类菜单
	$(".category ul.menu").find("li").each(
		function() {
			$(this).hover(
				function() {
				    var cat_id = $(this).attr("cat_id");
					var menu = $(this).find("div[cat_menu_id='"+cat_id+"']");
					menu.show();
					$(this).addClass("hover");					
					var menu_height = menu.height();
					if (menu_height < 60) menu.height(80);
					menu_height = menu.height();
					var li_top = $(this).position().top;
					$(menu).css("top",-li_top + 38);
				},
				function() {
					$(this).removeClass("hover");
				    var cat_id = $(this).attr("cat_id");
					$(this).find("div[cat_menu_id='"+cat_id+"']").hide();
				}
			);
		}
	);
	$(".head-user-menu dl").hover(function() {
		$(this).addClass("hover");
	},
	function() {
		$(this).removeClass("hover");
	});
	$('.head-user-menu .my-mall').mouseover(function(){// 最近浏览的商品
		load_history_information();
		$(this).unbind('mouseover');
	});
	$('.head-user-menu .my-cart').mouseover(function(){// 运行加载购物车
		load_cart_information();
		$(this).unbind('mouseover');
	});
	$('#button').click(function(){
	    if ($('#keyword').val() == '') {
		    return false;
	    }
	});
    	$("img[rel='lazy']").lazyload({
		threshold: 200,
        failure_limit: 10,
		skip_invisible : false,
        effect: "fadeIn"
	});
});
</script>
</head>
<body>
<!-- 顶部广告展开效果-->
<div class="wrapper" id="top-banner" style="width:100%">
<a href="javascript:void(0);" title="关闭"></a>
</div>
<!-- 顶部广告展开效果-->
<!-- PublicTopLayout Begin -->
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div id="vToolbar" class="nc-appbar">
	<div class="nc-appbar-tabs" id="appBarTabs">
        <div class="user ta_delay" nctype="a-barLoginBox">
			<div class="avatar">
				<img src="https://www.taokubuy.com/data/upload/shop/common/05728119946145412.jpg" />
			</div>
			<p>未登录</p>
		</div>
		<div class="user-login-box" nctype="barLoginBox"
			style="display: none;">
			<i class="arrow"></i> <a href="javascript:void(0);" class="close-a"
				nctype="close-barLoginBox" title="关闭">X</a>
			<form id="login_form" method="post"
				action="index.php?act=login&op=login"
				onsubmit="ajaxpost('login_form', '', '', 'onerror')">
        <input type='hidden' name='formhash' value='Q1KLaEM0sDva0FB6oZE-FeJL9enEbMx' />        <input type="hidden" name="form_submit" value="ok" /> <input
					name="nchash" type="hidden"
					value="7802773a" />
				<dl>
					<dt>
						<strong>登录名</strong>
					</dt>
					<dd>
						<input type="text" class="text" tabindex="1" autocomplete="off"
							name="user_name" autofocus> <label></label>
					</dd>
				</dl>
				<dl>
					<dt>
						<strong>登录密码</strong><a
							href="index.php?act=login&op=forget_password" target="_blank">忘记登录密码？</a>
					</dt>
					<dd>
						<input tabindex="2" type="password" class="text" name="password"
							autocomplete="off"> <label></label>
					</dd>
				</dl>
                <dl>
					<dt>
						<strong>验证码</strong><a href="javascript:void(0)" class="ml5"
							onclick="javascript:document.getElementById('codeimage').src='https://www.taokubuy.com/shop/index.php?act=seccode&op=makecode&nchash=7802773a&t=' + Math.random();">更换验证码</a>
					</dt>
					<dd>
						<input tabindex="3" type="text" name="captcha" autocomplete="off"
							class="text w130" id="captcha2" maxlength="4" size="10" /> <img
							src="" name="codeimage" border="0" id="codeimage" class="vt"> <label></label>
					</dd>
				</dl>
                <div class="bottom nc-login-api">
					<input type="submit" class="submit" value="确认"> <input
						type="hidden" value="" name="ref_url">

			<div class="bottomthird">

          

			  
			  <a
				  class="mr10 qq" title="QQ账号登录"
				  href="https://www.taokubuy.com/shop/api.php?act=toqq"><i></i>QQ账号</a>		  
                    <a class="mr10 wx" title="微信账号登录"
						onclick="ajax_form('weixin_form', '微信账号登录', 'https://www.taokubuy.com/shop/index.php?act=connect_wx&op=index', 360);"
						href="javascript:void(0);"><i></i>微信</a>
          

          
		 <!-- <a
						class="mr10" title="支付宝登录"
						href="/api.php?act=toalipay">支付宝登录</a>-->

				<span class="newreg">
					<b></b><a class=""
					href="https://www.taokubuy.com/shop/index.php?act=login&op=register&ref_url=https%3A%2F%2Fwww.taokubuy.com%2Fshop%2Findex.php%3Fact%3Dshow_groupbuy%26op%3Dindex"
					target="_blank" style="padding-top:5px">注册新用户</a>
         	 </span>

			</div>
          </div>
			</form>
		</div>
        <ul class="tools">
    
      <li><a href="http://www.v5kf.com/public/chat/chat?sid=146733&entry=5&ref=link"
				class="chat ta_delay" target="_blank"><div class="tools_img"></div>
					<span>聊天</span></a></li>
      
            <li><a href="javascript:void(0);" id="rtoolbar_cart"
				class="cart ta_delay"><div class="tools_img"></div>
					<span>购物车</span><i id="rtoobar_cart_count" class="new_msg"
					style="display: none;"></i></a></li>
                  <li><a href="javascript:void(0);" id="compare"
				class="compare ta_delay"><div class="tools_img"></div>
					<span>对比</span></a></li>
            <li><a href="javascript:void(0);" id="gotop"
				class="gotop ta_delay"><div class="tools_img"></div>
					<span>顶部</span></a></li>
		</ul>
		<div class="content-box" id="content-compare">
			<div class="top">
				<h3>商品对比</h3>
				<a href="javascript:void(0);" class="close" title="隐藏"></a>
			</div>
			<div id="comparelist"></div>
		</div>
		<div class="content-box" id="content-cart">
			<div class="top">
				<h3>我的购物车</h3>
				<a href="javascript:void(0);" class="close" title="隐藏"></a>
			</div>
			<div id="rtoolbar_cartlist"></div>
		</div>
		<a id="activator" href="javascript:void(0);" class="nc-appbar-hide"></a>
	</div>
	<div class="nc-hidebar" id="ncHideBar">
		<div class="nc-hidebar-bg">
            <div class="user-avatar">
				<img src="https://www.taokubuy.com/data/upload/shop/common/05728119946145412.jpg" />
			</div>
            <div class="frame"></div>
			<div class="show"></div>
		</div>
	</div>
</div>
<div class="public-top-layout w">
	<div class="topbar wrapper">
		<div class="user-entry">
            Hi，欢迎来 <a
				href="https://www.taokubuy.com"
				title="首页"
				alt="首页">淘库商城</a>
			<a
				href="https://www.taokubuy.com/shop/index.php?act=login&op=index&ref_url=https%3A%2F%2Fwww.taokubuy.com%2Fshop%2Findex.php%3Fact%3Dshow_groupbuy%26op%3Dindex">请登录</a></span>
			<span><a
				href="https://www.taokubuy.com/shop/index.php?act=login&op=register&ref_url=https%3A%2F%2Fwww.taokubuy.com%2Fshop%2Findex.php%3Fact%3Dshow_groupbuy%26op%3Dindex">免费注册</a></span>
	  	<span class="other" style="display: none;">
            <a href="https://www.taokubuy.com/shop/api.php?act=toqq"
				title="QQ账号登录" class="qq"><i></i></a>
                           <a href="javascript:void(0);"
				onclick="ajax_form('weixin_form', '微信账号登录', 'https://www.taokubuy.com/shop/index.php?act=connect_wx&op=index', 360);"
				title="微信账号登录" class="wx"><i></i></a>      </span>
                </div>
		<div class="quick-menu">
			<dl class="invite">
				<dt>
				</dt>
			</dl>

	<dl>
				<dt>
					<em class="ico_shop"></em><a
						href="https://www.taokubuy.com/shop" title="淘库首页">淘库首页</a><i></i>
				</dt>
				<dd>
					<ul>
						<li><a
							href="https://www.taokubuy.com/shop/index.php?act=show_joinin&op=index"
							title="商家入驻">商家入驻</a></li>

						<li><a
								href="https://www.taokubuy.com/shop/index.php?act=login&op=register&ref_url=https://www.taokubuy.com/shop/index.php?act=show_joinin"
								title="商家注册">商家注册</a></li>
						<li><a href="https://www.taokubuy.com/shop/index.php?act=seller_login&op=show_login"
							target="_blank" title="登录商家管理中心">商家登录</a></li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>
					<em class="ico_order"></em><a
						href="https://www.taokubuy.com/shop/index.php?act=member_order">我的订单</a><i></i>
				</dt>
				<dd>
					<ul>
						<li><a
							href="https://www.taokubuy.com/shop/index.php?act=member_order&state_type=state_new">待付款订单</a></li>
						<li><a
							href="https://www.taokubuy.com/shop/index.php?act=member_order&state_type=state_send">待确认收货</a></li>
						<li><a
							href="https://www.taokubuy.com/shop/index.php?act=member_order&state_type=state_noeval">待评价交易</a></li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>
					<em class="ico_store"></em><a
						href="https://www.taokubuy.com/shop/index.php?act=member_favorites&op=fglist">我的收藏</a><i></i>
				</dt>
				<dd>
					<ul>
						<li><a
							href="https://www.taokubuy.com/shop/index.php?act=member_favorites&op=fglist">商品收藏</a></li>
						<li><a
							href="https://www.taokubuy.com/shop/index.php?act=member_favorites&op=fslist">店铺收藏</a></li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>
					<em class="ico_service"></em>客户服务<i></i>
				</dt>
				<dd>
					<ul>
						<li><a
							href="https://www.taokubuy.com/shop/index.php?act=article&op=article&ac_id=2">帮助中心</a></li>
						<li><a
							href="https://www.taokubuy.com/shop/index.php?act=article&op=article&ac_id=5">售后服务</a></li>
						<li><a
							href="https://www.taokubuy.com/shop/index.php?act=article&op=article&ac_id=6">客服中心</a></li>
					</ul>
				</dd>
			</dl>
            <dl>
				<dt>
					<em class="ico_order"></em>站点导航<i></i>
				</dt>
				<dd>
					<ul>
                        <li><a
							 target="_blank" href="https://www.taokubuy.com/shop/index.php?act=article&amp;op=article&amp;ac_id=1">网站公告</a></li>
                        <li><a
							 target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index">商家入驻</a></li>
                        <li><a
							 target="_blank" href="https://www.taokubuy.com/shop/index.php?act=article&amp;op=show&amp;article_id=27">联系我们</a></li>
                      </ul>
				</dd>
			</dl>
      
							<dl class="down_app">
					<dt>
						<em class="ico_tel"></em><a href="https://www.taokubuy.com/wap">手机移动端</a><i></i>
					</dt>
					<dd>
						<div class="qrcode">
							<img
								src="https://www.taokubuy.com/data/upload/shop/common/mb_app.png">
						</div>
						<div class="hint">
							<h4>扫描二维码</h4>
							下载手机客户端
						</div>
						<div class="addurl">
															<a href="http://a.app.qq.com/o/simple.jsp?pkgname=com.shopmobile.taokubuy" target="_blank"><i
										class="icon-android"></i>Android</a>
																						<a href="https://itunes.apple.com/cn/app/%E6%B7%98%E5%BA%93%E5%95%86%E5%9F%8E/id1273674803?mt=8" target="_blank"><i
										class="icon-apple"></i>iPhone</a>
													</div>
					</dd>
				</dl>
			
	  <dl class="weixin">
				<dt>
					关注我们<i></i>
				</dt>
				<dd>
					<h4>
						扫描二维码<br /> 关注商城微信号
					</h4>
					<img
						src="https://www.taokubuy.com/data/upload/shop/common/05573365386758555.jpg">
				</dd>
			</dl>
		</div>
	</div>
</div>
<script type="text/javascript">
/*点击回到顶部*/
    $('#gotop').click(function(){
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });

//动画显示边条内容区域
$(function() {
	$(function() {
		$('#activator').click(function() {
			$('#content-cart').animate({'right': '-250px'});
			$('#content-compare').animate({'right': '-250px'});
			$('#vToolbar').animate({'right': '-60px'}, 300,
			function() {
				$('#ncHideBar').animate({'right': '59px'},	300);
			});
	        $('div[nctype^="bar"]').hide();
		});
		$('#ncHideBar').click(function() {
			$('#ncHideBar').animate({
				'right': '-86px'
			},
			300,
			function() {
				$('#content-cart').animate({'right': '-250px'});
				$('#content-compare').animate({'right': '-250px'});
				$('#vToolbar').animate({'right': '6px'},300);
			});
		});
	});
    $("#compare").click(function(){
    	if ($("#content-compare").css('right') == '-250px') {
 		   loadCompare(false);
 		   $('#content-cart').animate({'right': '-250px'});
  		   $("#content-compare").animate({right:'0px'});
    	} else {
    		$(".close").click();
    		$(".chat-list").css("display",'none');
        }
	});
    $("#rtoolbar_cart").click(function(){
        if ($("#content-cart").css('right') == '-250px') {
         	$('#content-compare').animate({'right': '-250px'});
    		$("#content-cart").animate({right:'0px'});
    		if (!$("#rtoolbar_cartlist").html()) {
    			$("#rtoolbar_cartlist").load('index.php?act=cart&op=ajax_load&type=html');
    		}
        } else {
        	$(".close").click();
        	$(".chat-list").css("display",'none');
        }
	});
	$(".close").click(function(){
		$(".content-box").animate({right:'-250px'});
      });

	$(".quick-menu dl").hover(function() {
		$(this).addClass("hover");
	},
	function() {
		$(this).removeClass("hover");
	});

    // 右侧bar用户信息
    $('div[nctype="a-barUserInfo"]').click(function(){
        $('div[nctype="barUserInfo"]').toggle();
    });
    // 右侧bar登录
    $('div[nctype="a-barLoginBox"]').click(function(){
        $('div[nctype="barLoginBox"]').toggle();
        document.getElementById('codeimage').src='https://www.taokubuy.com/shop/index.php?act=seccode&op=makecode&nchash=7802773a&t=' + Math.random();
    });
    $('a[nctype="close-barLoginBox"]').click(function(){
        $('div[nctype="barLoginBox"]').toggle();
    });
    });
</script>
<!-- PublicHeadLayout Begin -->
<div class="header-wrap">
  <header class="public-head-layout wrapper">
    <h1 class="site-logo"><a href="https://www.taokubuy.com"><img src="https://www.taokubuy.com/data/upload/shop/common/05664089558052123.png" class="pngFix"></a></h1>
    <div class="site-ad">
            </div>
    <div class="head-search-bar">
        <div id="search">
          <ul class="tab">
            <li act="search" class="current"><span>商品</span><i class="arrow"></i></li>
            <li act="store_list"><span>店铺</span></li>
          </ul>
        </div>
      <form class="search-form" method="get" action="https://www.taokubuy.com/shop">
        <input type="hidden" value="search" id="search_act" name="act">
         <input placeholder="请输入您要搜索的商品关键字" name="keyword" id="keyword" type="text" class="input-text" value="" maxlength="60" x-webkit-speech lang="zh-CN" onwebkitspeechchange="foo()" x-webkit-grammar="builtin:search" />
        <input type="submit" id="button" value="搜索" class="input-submit">
      </form>
      <!--搜索关键字-->
      <div class="keyword">热门搜索：        <ul>
                    <li><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&keyword=%E5%8F%AF%E5%8F%A3%E5%8F%AF%E4%B9%90">可口可乐</a></li>
                    <li><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&keyword=%E7%99%BE%E4%BA%8B%E5%8F%AF%E4%B9%90">百事可乐</a></li>
                    <li><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&keyword=%E5%86%9C%E5%A4%AB%E5%B1%B1%E6%B3%89">农夫山泉</a></li>
                    <li><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&keyword=%E7%99%BE%E5%A8%81%E5%95%A4%E9%85%92">百威啤酒</a></li>
                    <li><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&keyword=%E7%99%BD%E5%B1%B1%E6%B0%B4">白山水</a></li>
                    <li><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&keyword=%E7%BB%B4%E8%BE%BE">维达</a></li>
                  </ul>
      </div>

    </div>
    
    
    <div class="head-user-menu">
      <dl class="my-mall">
        <dt><span class="ico"></span>我的商城<i class="arrow"></i></dt>
        <dd>
          <div class="sub-title">
            <h4>                        
            </h4>
            <a href="https://www.taokubuy.com/shop/index.php?act=member&op=home" class="arrow">我的用户中心<i></i></a></div>
          <div class="user-centent-menu">
            <ul>
              <li><a href="https://www.taokubuy.com/shop/index.php?act=member_message&op=message">站内消息(<span>0</span>)</a></li>
              <li><a href="https://www.taokubuy.com/shop/index.php?act=member_order" class="arrow">我的订单<i></i></a></li>
              <li><a href="https://www.taokubuy.com/shop/index.php?act=member_consult&op=my_consult">咨询回复(<span id="member_consult">0</span>)</a></li>
              <li><a href="https://www.taokubuy.com/shop/index.php?act=member_favorites&op=fglist" class="arrow">我的收藏<i></i></a></li>
                            <li><a href="https://www.taokubuy.com/shop/index.php?act=member_voucher">代金券(<span id="member_voucher">0</span>)</a></li>
                                          <li><a href="https://www.taokubuy.com/shop/index.php?act=member_points" class="arrow">我的积分<i></i></a></li>
                          </ul>
          </div>
          <div class="browse-history">
            <div class="part-title">
              <h4>最近浏览的商品</h4>
              <span style="float:right;"><a href="https://www.taokubuy.com/shop/index.php?act=member_goodsbrowse&op=list">全部浏览历史</a></span>
            </div>
            <ul>
              <li class="no-goods"><img class="loading" src="https://www.taokubuy.com/shop/templates/default/images/loading.gif" /></li>
            </ul>
          </div>
        </dd>
      </dl>
      <dl class="my-cart">
                <dt><span class="ico"></span>购物车结算<i class="arrow"></i></dt>
        <dd>
          <div class="sub-title">
            <h4>最新加入的商品</h4>
          </div>
          <div class="incart-goods-box">
            <div class="incart-goods"> <img class="loading" src="https://www.taokubuy.com/shop/templates/default/images/loading.gif" /> </div>
          </div>
          <div class="checkout"> <span class="total-price">共<i>0</i>种商品</span><a href="https://www.taokubuy.com/shop/index.php?act=cart" class="btn-cart">结算购物车中的商品</a> </div>
        </dd>
      </dl>
    </div>
  </header>
</div>
<!-- PublicHeadLayout End -->

<!-- publicNavLayout Begin -->
<nav class="public-nav-layout">
  <div class="wrapper">
    <div class="all-category">
      <div class="title"> <i></i>
  <h3><a href="https://www.taokubuy.com/shop/index.php?act=category&op=index">所有分类</a></h3>
</div>
<div class="category">
  <ul class="menu">
            <li cat_id="888" class="odd" >
      <div class="class">
      <span class="arrow"></span>
                <span class="ico"><img src="https://www.taokubuy.com/data/upload/shop/common/category-pic-888.jpg"></span>
                                    <h4><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=888">家用电器</a></h4>
                       </div>
      <div class="sub-class" cat_menu_id="888">
      <div class="sub-class-content">
        <div class="recommend-class">
                                  <span><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1549" title="冰箱">冰箱</a></span>
                    <span><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=895" title="电视">电视</a></span>
                    <span><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=896" title="空调">空调</a></span>
                            </div>
                        <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=889">家用电器</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1549">冰箱</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1595">电热毯</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1599">电熨斗</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1645">取暖器</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1648">除湿机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1665">冷藏柜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=895">电视</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=896">空调</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=897">洗衣机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=898">热水器</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=890">厨房大电</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1642">三件套</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=905">烟灶套装</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=906">油烟机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=907">燃气灶</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=908">消毒柜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=909">洗碗机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1349">集成灶</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=891">中式厨房</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1350">电压力锅/汤锅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1351">电磁炉</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=910">净水器/饮水机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=911">电饭煲</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=912">豆浆机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=913">电热水壶</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1466">电饼铛</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1467">平底锅/炒锅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1468">电煮锅</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=892">西式厨房</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1600">碎冰杯</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1603">打蛋器</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1607">料理碗</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1643">电蒸箱</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1666">烤肉锅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1667">原汁机配件</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1668">厨师机配件</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1669">磨豆机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1670">冰淇淋机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1672">奶泡机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=914">烤箱</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=915">料理机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=916">微波炉</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=917">榨汁机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=918">面包机/面条机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=919">咖啡机</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1546">生活电器</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1570">挂烫机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1571">吸尘器</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1615">床垫护理</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1616">清洁布</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1617">吸尘器配件</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1618">食谱芯片</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1619">清洁机配件</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1620">扫地机器人</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1621">刮刀棒</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1623">网锅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1624">主锅底座</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1673">空气净化器配件</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1547">空气净化器</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1609">个护健康</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1610">体重称</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1611">按摩器械</a>
                                  </dd>
        </dl>
                        </div>
        <div class="sub-class-right">
                    <div class="brands-list">
            <ul>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=459" title="海信"><img src="https://www.taokubuy.com/data/upload/shop/brand/05678693170418852_small.jpg"/>                <span>海信</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=458" title="奥克斯"><img src="https://www.taokubuy.com/data/upload/shop/brand/05678692384251334_small.jpg"/>                <span>奥克斯</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=457" title="美的"><img src="https://www.taokubuy.com/data/upload/shop/brand/05678692189448033_small.jpg"/>                <span>美的</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=456" title="夏普"><img src="https://www.taokubuy.com/data/upload/shop/brand/05678690523495302_small.jpg"/>                <span>夏普</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=452" title="小天鹅"><img src="https://www.taokubuy.com/data/upload/shop/brand/05678689454287528_small.jpg"/>                <span>小天鹅</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=451" title="海尔"><img src="https://www.taokubuy.com/data/upload/shop/brand/05678689227166380_small.jpg"/>                <span>海尔</span>
                </a></li>
                          </ul>
          </div>
                    <div class="adv-promotions">
                    <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706238860080879.jpg" /></a>
                              <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706238860091158.jpg" /></a>
          </div>
        </div>
      </div>
    </li>
        <li cat_id="470" class="even" >
      <div class="class">
      <span class="arrow"></span>
                <span class="ico"><img src="https://www.taokubuy.com/data/upload/shop/common/category-pic-470.jpg"></span>
                                    <h4><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=470">手机/数码/电脑/办公</a></h4>
                       </div>
      <div class="sub-class" cat_menu_id="470">
      <div class="sub-class-content">
        <div class="recommend-class">
                                  <span><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=478" title="新品特卖">新品特卖</a></span>
                    <span><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=479" title="实惠精选">实惠精选</a></span>
                            </div>
                        <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=471">手机</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=478">新品特卖</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=479">实惠精选</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1613">手机配件</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=473">智能设备</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=499">智能手机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=500">智能手表</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=501">智能手环</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1294">VR眼镜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1295">智能摄影</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1296">智能健康</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1813">智能家居</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1814">其他</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=477">摄影摄像</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1545">相机配件</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1572">清洁套装</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1586">光学仪器</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1676">耳机耳麦</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=525">相机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=526">单反</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=528">摄像机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1314">拍立得</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1317">镜头</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1319">自拍杆</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=475">硬件存储</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1630">无线网卡</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=507">显示器</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=508">机械键盘</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=509">固体硬盘</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=510">CPU</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=511">显卡</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=512">主板</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=513">高速U盘</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1313">路由器</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=472">电脑</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=488">笔记本</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=489">平板电脑</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=490">台式机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=491">一体机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=492">DIY</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=493">游戏本</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1557">电脑配件</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1558">鼠标</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1559">键盘</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1560">鼠键套装</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1663">主机</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1823">办公设备</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1829">打印机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1830">保险箱</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1831">保管箱</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1832">多媒体触摸一体机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1833">点验钞机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1834">装订机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1835">考勤机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1836">过塑机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1837">投影仪</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1838">传真机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1839">复印机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1840">碎纸机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1841">扫描仪</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1842">塑封膜一体机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1843">其他</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1824">文具耗材</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1844">笔</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1845">订书机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1846">胶棒/胶水笔</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1847">文件栏</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1848">文件盘</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1849">文件柜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1850">打孔器</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1851">起钉器</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1852">美工刀</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1853">剪刀</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1854">长尾夹</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1855">票夹印台</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1856">印油</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1857">计算器</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1858">轻便夹</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1859">资料册</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1860">文件套</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1861">名片册</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1862">报事贴</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1863">胶装本</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1864">线圈本</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1865">档案袋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1866">皮面本</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1867">硬皮本</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1868">荣誉证书</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1869">白板</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1870">报刊架</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1871">硒鼓</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1872">墨粉</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1873">墨盒色带</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1874">其他</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1826">办公用纸</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1827">复印纸</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1828">打印纸</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1875">标签打印纸/条码纸</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1876">相片纸</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1877">收银纸</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1878">卡纸</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1879">传真纸</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1880">彩激纸</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1881">其他</a>
                                  </dd>
        </dl>
                        </div>
        <div class="sub-class-right">
                    <div class="brands-list">
            <ul>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=455" title="oppo"><img src="https://www.taokubuy.com/data/upload/shop/brand/05678690237137388_small.jpg"/>                <span>oppo</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=454" title="vivo"><img src="https://www.taokubuy.com/data/upload/shop/brand/05678690082995131_small.jpg"/>                <span>vivo</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=453" title="华为"><img src="https://www.taokubuy.com/data/upload/shop/brand/05678689770126943_small.jpg"/>                <span>华为</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=450" title="戴尔"><img src="https://www.taokubuy.com/data/upload/shop/brand/05678613769244112_small.jpg"/>                <span>戴尔</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=449" title="iPhone"><img src="https://www.taokubuy.com/data/upload/shop/brand/05678557468666774_small.jpg"/>                <span>iPhone</span>
                </a></li>
                          </ul>
          </div>
                    <div class="adv-promotions">
                    <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706239376776055.jpg" /></a>
                              <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706239376775011.jpg" /></a>
          </div>
        </div>
      </div>
    </li>
        <li cat_id="1244" class="odd" >
      <div class="class">
      <span class="arrow"></span>
                <span class="ico"><img src="https://www.taokubuy.com/data/upload/shop/common/category-pic-1244.jpg"></span>
                                    <h4><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1244">化妆品/护肤/护理</a></h4>
                       </div>
      <div class="sub-class" cat_menu_id="1244">
      <div class="sub-class-content">
        <div class="recommend-class">
                                  <span><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1315" title="洗发水">洗发水</a></span>
                    <span><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1412" title="牙膏">牙膏</a></span>
                    <span><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1414" title="牙刷">牙刷</a></span>
                            </div>
                        <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1247">护肤品</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1258">面膜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1259">护肤套装</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1260">乳液面霜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1262">护手霜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1263">爽肤水</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1264">洁面</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1265">眼霜/眼膜/眼部精华</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1266">身体乳</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1271">精油芳疗</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1267">卸妆</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1268">身体护理</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1272">面部喷雾</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1273">去角质</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1276">敏感修护</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1261">精华液</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1275">祛痘</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1249">彩妆</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1469">遮瑕</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1277">香水</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1278">BB霜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1279">化妆工具</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1280">口红/唇彩</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1281">防晒/隔离</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1282">粉底</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1283">粉饼</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1285">指甲油</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1286">美甲工具</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1287">眉笔/眉粉</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1288">睫毛膏</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1289">眼线</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1291">眼影</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1292">蜜粉/腮红</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1293">彩妆套装</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1251">男士护肤</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1298">洁面</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1299">爽肤水</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1301">乳液/面霜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1302">护理套装</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1304">面膜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1306">面部精华</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1308">眼部护理</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1309">防晒</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1310">唇部护理</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1252">美发护发</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1315">洗发水</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1316">护发素</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1318">发膜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1320">洗护套装</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1321">护发精油</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1322">头发造型</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1323">弹力素</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1324">染发霜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1325">整顶假发</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1254">口腔护理</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1412">牙膏</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1414">牙刷</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1415">漱口水</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1419">口气清新剂</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1423">口腔美白</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1257">个人护理</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1528">吹风机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1529">直/卷发器</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1594">美容仪</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1426">沐浴露</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1427">香皂</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1428">泡澡浴盐</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1430">洗手液</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1432">剃须刀</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1433">卫生巾</a>
                                  </dd>
        </dl>
                        </div>
        <div class="sub-class-right">
                    <div class="brands-list">
            <ul>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=470" title="佳洁士"><img src="https://www.taokubuy.com/data/upload/shop/brand/05687474168616638_small.jpg"/>                <span>佳洁士</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=469" title="潘婷"><img src="https://www.taokubuy.com/data/upload/shop/brand/05687249536237057_small.jpg"/>                <span>潘婷</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=468" title="海飞丝"><img src="https://www.taokubuy.com/data/upload/shop/brand/05683919686799910_small.jpg"/>                <span>海飞丝</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=467" title="沙宣"><img src="https://www.taokubuy.com/data/upload/shop/brand/05682925768026316_small.jpg"/>                <span>沙宣</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=447" title="九朵云"><img src="https://www.taokubuy.com/data/upload/shop/brand/05677696940883889_small.jpg"/>                <span>九朵云</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=439" title="夏士莲"><img src="https://www.taokubuy.com/data/upload/shop/brand/05652777437700231_small.jpg"/>                <span>夏士莲</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=438" title="力士"><img src="https://www.taokubuy.com/data/upload/shop/brand/05652642061980735_small.jpg"/>                <span>力士</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=437" title="多芬"><img src="https://www.taokubuy.com/data/upload/shop/brand/05651972706719469_small.jpg"/>                <span>多芬</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=436" title="清扬"><img src="https://www.taokubuy.com/data/upload/shop/brand/05651827719513734_small.jpg"/>                <span>清扬</span>
                </a></li>
                          </ul>
          </div>
                    <div class="adv-promotions">
                    <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706239547512353.jpg" /></a>
                              <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706239547529749.jpg" /></a>
          </div>
        </div>
      </div>
    </li>
        <li cat_id="256" class="even" >
      <div class="class">
      <span class="arrow"></span>
                <span class="ico"><img src="https://www.taokubuy.com/data/upload/shop/common/category-pic-256.jpg"></span>
                                    <h4><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=256">女装/内衣/饰品</a></h4>
                       </div>
      <div class="sub-class" cat_menu_id="256">
      <div class="sub-class-content">
        <div class="recommend-class">
                    </div>
                        <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=258">精选上装</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1593">夹克</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1686">羊绒衫</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=265">T恤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=264">衬衫</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=266">毛衣/针织衫</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=268">毛呢外套</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=272">羽绒服</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=267">雪纺衫</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=269">外套/风衣</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=270">小西装</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=271">卫衣</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=273">皮衣/皮草</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=259">浪漫裙装</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1463">印花连衣裙</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1454">A字裙</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=276">蕾丝连衣裙</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=279">牛仔裙</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=280">百褶裙</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=281">包臀裙</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=260">女士下装</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=282">休闲裤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=283">牛仔裤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=284">哈伦裤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=285">背带裤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=286">小脚裤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=287">西装裤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=288">打底裤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=289">阔腿裤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=290">短裤</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=261">文胸塑身</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=294">聚拢文胸</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=295">运动文胸</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=296">性感蕾丝</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=297">无钢圈</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=298">塑身衣</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1034">袜类</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1230">隐形船袜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1233">连裤袜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1236">瘦身袜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1035">男袜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1036">女袜</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1110">特色女装</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1111">职业套装</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1112">大码女装</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1113">旗袍</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1114">礼服</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1115">婚纱</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1156">家居服</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1166">睡衣</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1168">少女居家服</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1173">睡袍</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1176">情侣家居服</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1180">真丝家居服</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1193">男士居家服</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1210">内裤背心</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1213">内裤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1220">吊带背心</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1222">男士背心</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1574">秋衣裤</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1539">服饰配件</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1542">帽子</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1543">丝巾/围巾</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1544">手套</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1540">皮带</a>
                                  </dd>
        </dl>
                        </div>
        <div class="sub-class-right">
                    <div class="brands-list">
            <ul>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=368" title="地素"><img src="https://www.taokubuy.com/data/upload/shop/brand/05271790191199641_sm.jpg"/>                <span>地素</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=367" title="E`LAND"><img src="https://www.taokubuy.com/data/upload/shop/brand/05271789030422482_sm.jpg"/>                <span>E`LAND</span>
                </a></li>
                          </ul>
          </div>
                    <div class="adv-promotions">
                    <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706239961060819.jpg" /></a>
                              <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706239961069141.jpg" /></a>
          </div>
        </div>
      </div>
    </li>
        <li cat_id="1116" class="odd" >
      <div class="class">
      <span class="arrow"></span>
                <span class="ico"><img src="https://www.taokubuy.com/data/upload/shop/common/category-pic-1116.jpg"></span>
                                    <h4><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1116">男装/户外用品/运动</a></h4>
                       </div>
      <div class="sub-class" cat_menu_id="1116">
      <div class="sub-class-content">
        <div class="recommend-class">
                    </div>
                        <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1118">男士外套</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1457">风衣</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1460">皮衣</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1461">夹克/棒球衫</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1458">单西</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1462">大衣/棉服</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1459">西装套装</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1119">男士内搭</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1155">衬衫</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1455">T恤/polo衫</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1161">卫衣</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1169">针织衫/毛衣</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1170">马甲/背心</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1120">男士裤装</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1172">休闲裤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1175">牛仔裤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1178">西裤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1184">小脚裤/紧身裤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1187">短裤</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1121">特色男装</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1203">民族服装</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1205">中山装</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1209">套装</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1123">运动鞋</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1212">运动鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1215">板鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1216">运动拖鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1217">篮球鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1218">足球鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1219">健步鞋</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1125">运动服</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1221">运动套装</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1223">运动T恤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1224">运动裤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1225">运动短裤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1226">运动外套</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1127">户外鞋服</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1227">冲锋衣</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1228">防晒衣</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1229">速干T恤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1231">速干裤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1232">登山鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1234">潜水服</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1129">户外用品</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1541">望远镜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1235">钓竿</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1237">户外包</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1238">帐篷</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1239">手电筒</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1240">防潮垫</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1241">刀具</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1131">运动用品</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1677">美腰机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1678">多功能健身器材</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1679">健身轮</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1680">钢丝绳</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1681">健身椅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1682">动感单车</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1683">户外篮球架</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1242">泳衣</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1243">跑步机/踏步机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1245">篮球/足球</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1246">自行车</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1248">瑜伽垫</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1250">滑轮</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1253">羽毛球拍</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1255">运动护具/配件</a>
                                  </dd>
        </dl>
                        </div>
        <div class="sub-class-right">
                    <div class="adv-promotions">
                    <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706240137025287.jpg" /></a>
                              <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706240137029394.jpg" /></a>
          </div>
        </div>
      </div>
    </li>
        <li cat_id="1117" class="even" >
      <div class="class">
      <span class="arrow"></span>
                <span class="ico"><img src="https://www.taokubuy.com/data/upload/shop/common/category-pic-1117.jpg"></span>
                                    <h4><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1117">女鞋/男鞋/童鞋/皮具</a></h4>
                       </div>
      <div class="sub-class" cat_menu_id="1117">
      <div class="sub-class-content">
        <div class="recommend-class">
                    </div>
                        <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1563">儿童鞋</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1564">雪地靴</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1565">婴儿鞋</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1122">时尚女鞋</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1562">休闲鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1134">短靴</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1135">马丁靴</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1136">雪地靴</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1142">长筒靴</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1137">凉鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1139">拖鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1144">帆布鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1146">平底单鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1147">高跟单鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1148">坡跟单鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1149">豆豆鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1150">乐福鞋</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1124">潮流男鞋</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1152">休闲鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1153">正装皮鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1154">休闲皮鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1158">运动休闲</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1160">高帮鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1162">靴子</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1163">帆布鞋/板鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1164">乐福鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1165">豆豆鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1167">棉鞋</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1126">潮流女包</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1174">女士钱包</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1452">手拿包</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1177">单肩包</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1181">手提包</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1179">斜挎包</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1183">腰包</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1185">胸包</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1188">双肩包</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1186">化妆包</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1128">精品男包</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1191">男士钱包</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1200">斜挎包/单肩包</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1196">腰包</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1199">手提包</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1198">手拿包</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1194">胸包</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1202">双肩包</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1130">功能箱包</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1204">旅行箱</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1206">万向轮箱</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1208">旅行袋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1211">大容量</a>
                                  </dd>
        </dl>
                        </div>
        <div class="sub-class-right">
                    <div class="adv-promotions">
                    <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706240317649581.jpg" /></a>
                              <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706240317647499.jpg" /></a>
          </div>
        </div>
      </div>
    </li>
        <li cat_id="959" class="odd" >
      <div class="class">
      <span class="arrow"></span>
                <span class="ico"><img src="https://www.taokubuy.com/data/upload/shop/common/category-pic-959.jpg"></span>
                                    <h4><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=959">童装/母婴用品/玩具</a></h4>
                       </div>
      <div class="sub-class" cat_menu_id="959">
      <div class="sub-class-content">
        <div class="recommend-class">
                    </div>
                        <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=961">童装</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1448">套装</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=977">连体衣</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=978">内衣裤/袜子</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=979">婴儿礼盒</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1449">棉/羽绒服</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=980">上衣</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1451">裤子</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=982">外套</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=983">居家服</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1450">毛衣</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=985">肚兜/帽子</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=962">童鞋</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=986">运动鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=987">学步鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=988">帆布鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=989">皮鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=990">拖鞋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=991">雨靴</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=992">靴子/雪地靴</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=993">凉鞋</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=963">车床用品</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=996">婴儿推车</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=997">学步车</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=998">安全座椅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=999">婴儿背带/腰凳</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1001">婴儿床/床垫</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1002">餐椅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1003">抱被/床品套件</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1326">推车配件</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=964">喂养</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1004">奶瓶</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1005">奶嘴</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1006">水杯</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1007">餐具</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1008">消毒锅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1009">铺食机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1327">吸奶/暖奶/调奶器</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1329">围嘴</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=965">洗护</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1473">纸尿裤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1533">毛巾/浴巾</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1577">脸盆/脚盆</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1583">尿布/尿片</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1010">洗发/沐浴</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1012">润肤</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1013">浴盆</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1014">湿巾</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1015">洗衣皂/液</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1016">理发器</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1017">驱虫止痒</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=966">玩具</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1019">毛绒/玩具</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1020">自行车/滑板车</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1021">电动车</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1022">积木</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1023">电动遥控</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1024">儿童箱包/文具用品</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1578">其他用品</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1581">奶瓶收纳盒</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1582">儿童小便用品</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1584">清洁棉签</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1585">儿童衣架</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1587">爬行垫</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1589">宝宝坐便器</a>
                                  </dd>
        </dl>
                        </div>
        <div class="sub-class-right">
                    <div class="adv-promotions">
                    <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706240505257118.jpg" /></a>
                              <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706240505260998.jpg" /></a>
          </div>
        </div>
      </div>
    </li>
        <li cat_id="1483" class="even" >
      <div class="class">
      <span class="arrow"></span>
                <span class="ico"><img src="https://www.taokubuy.com/data/upload/shop/common/category-pic-1483.jpg"></span>
                                    <h4><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1483">腕表/眼镜/珠宝首饰</a></h4>
                       </div>
      <div class="sub-class" cat_menu_id="1483">
      <div class="sub-class-content">
        <div class="recommend-class">
                    </div>
                        <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1485">钻石珠宝</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1496">钻戒</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1497">钻石耳饰</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1498">钻石吊坠</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1499">钻石手链</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1500">天然宝石</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1486">珍珠玉翠</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1501">珍珠项链</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1502">珍珠耳钉</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1503">珍珠吊坠</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1504">和田玉</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1505">翡翠摆件</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1506">翡翠手镯</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1507">翡翠项链</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1508">翡翠戒指</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1527">琥珀饰品</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1590">珍珠手链</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1487">潮流饰品</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1509">银饰</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1510">木手串</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1511">石榴石手链</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1512">项链</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1513">发饰</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1514">手镯</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1515">戒指</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1516">吊坠</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1592">合金饰物</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1488">腕表</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1517">机械表</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1518">石英表</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1519">运动手表</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1520">情侣表</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1521">儿童手表</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1489">眼镜</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1522">太阳镜/墨镜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1523">近视眼镜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1524">老花镜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1525">眼镜框</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1530">铂金首饰</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1531">项链吊坠</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1532">手链</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1535">戒指</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1538">耳饰</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1536">水晶宝石</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1537">钻石吊坠</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1591">水晶手链</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1484">黄金首饰</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1490">耳钉</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1491">黄金项链</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1492">黄金对戒</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1493">耳饰</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1494">项链吊坠</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1495">婚嫁套饰</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1526">黄金手镯/手链</a>
                                  </dd>
        </dl>
                        </div>
        <div class="sub-class-right">
                    <div class="adv-promotions">
                    <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706240777324548.jpg" /></a>
                              <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706240777326959.jpg" /></a>
          </div>
        </div>
      </div>
    </li>
        <li cat_id="730" class="odd" >
      <div class="class">
      <span class="arrow"></span>
                <span class="ico"><img src="https://www.taokubuy.com/data/upload/shop/common/category-pic-730.jpg"></span>
                                    <h4><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=730">家纺/布艺/家饰</a></h4>
                       </div>
      <div class="sub-class" cat_menu_id="730">
      <div class="sub-class-content">
        <div class="recommend-class">
                    </div>
                        <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=731">床上用品</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1453">多件套</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=739">被子</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=740">枕芯</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=742">枕套/枕巾</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=743">毯子/床单</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=744">乳胶枕</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=745">席子</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=732">居家布艺</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1561">浴巾</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=753">窗帘</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=754">地毯</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=755">沙发套/巾</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=756">抱枕</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1465">桌布</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=758">门帘</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=759">沙发/椅垫</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1362">毛巾</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1363">防尘罩</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=733">家居饰品</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=760">壁纸</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=761">装饰画</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=762">摆件</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=763">相框</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=764">果盘</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=765">壁饰</a>
                                  </dd>
        </dl>
                        </div>
        <div class="sub-class-right">
                    <div class="adv-promotions">
                    <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706240955909700.jpg" /></a>
                              <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706240955916394.jpg" /></a>
          </div>
        </div>
      </div>
    </li>
        <li cat_id="530" class="even" >
      <div class="class">
      <span class="arrow"></span>
                <span class="ico"><img src="https://www.taokubuy.com/data/upload/shop/common/category-pic-530.jpg"></span>
                                    <h4><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=530">家具/建材/卫浴/灯饰</a></h4>
                       </div>
      <div class="sub-class" cat_menu_id="530">
      <div class="sub-class-content">
        <div class="recommend-class">
                    </div>
                        <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=531">客厅餐厅</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1644">雪茄柜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1649">小凳</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1650">六件套</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1657">斗柜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1658">博古架</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1661">储物柜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=541">沙发</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=542">电视柜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=543">茶几</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=544">鞋柜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=545">餐桌/椅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=546">酒柜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=547">餐边柜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=548">玄关柜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1641">其他</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=532">卧室家具</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=550">衣柜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1474">化妆台</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1475">餐桌/椅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1629">衣柜密码箱</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1636">茶几</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1637">床头柜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1653">衣帽架</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1654">书桌</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1656">床尾凳</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=549">床</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=551">床垫</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=552">乳胶床垫</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=533">书房儿童</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1634">书柜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1635">榻榻米</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1651">画桌</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1652">茶桌/椅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1655">圈椅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1659">太师椅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=553">电脑桌/椅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=554">书桌</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1352">办公桌</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1353">书架</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1357">儿童床</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1356">花架</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1355">折叠床/椅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1358">儿童床垫</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=534">家装主材</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1632">报警器</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1633">实木复合地板</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=555">强化复合地板</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=556">瓷砖</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=558">涂料</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=559">油漆</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=535">厨房卫浴</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1573">排气扇</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1664">水龙头</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=560">浴霸</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=561">吊顶</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=563">马桶</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=564">淋浴花洒</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=565">浴室柜组合</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1359">水槽</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=536">灯饰照明</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1631">落地灯</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=566">吸顶灯</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=567">吊灯</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=568">台灯</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=569">射灯</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=570">灯带</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=571">LED灯泡</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1361">壁灯</a>
                                  </dd>
        </dl>
                        </div>
        <div class="sub-class-right">
                    <div class="adv-promotions">
                    <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706241143956319.jpg" /></a>
                              <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706241143967702.jpg" /></a>
          </div>
        </div>
      </div>
    </li>
        <li cat_id="1057" class="odd" >
      <div class="class">
      <span class="arrow"></span>
                <span class="ico"><img src="https://www.taokubuy.com/data/upload/shop/common/category-pic-1057.jpg"></span>
                                    <h4><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1057">厨具餐具/收纳/清洁</a></h4>
                       </div>
      <div class="sub-class" cat_menu_id="1057">
      <div class="sub-class-content">
        <div class="recommend-class">
                    </div>
                        <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1058">厨房烹饪</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1391">厨房配件</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1566">电饭锅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1063">炒锅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1064">不粘锅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1381">平底锅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1382">高压锅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1383">其他锅</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1384">刀具</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1385">菜板</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1386">厨房置物架</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1387">烧烤用具</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1388">糕点模具</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1389">厨房清洗</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1390">厨房储物</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1059">餐饮具</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1392">水杯</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1393">保温杯</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1394">茶具</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1395">酒具</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1396">咖啡具</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1397">餐具</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1399">保鲜盒</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1400">一次性用品</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1060">居家礼品</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1401">雨伞</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1402">雨衣</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1404">眼罩</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1405">挂/闹钟</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1406">家用梯</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1407">缝纫机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1408">活性炭</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1409">驱蚊用品</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1410">创意礼品</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1411">婚庆用品</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1061">收纳清洁</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1413">晾衣架</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1416">收纳袋/盒/箱</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1420">化妆包</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1422">脏衣篮</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1424">压缩袋</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1429">置物架</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1431">拖把</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1434">垃圾桶/袋</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1062">纸品清洁</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1626">清洁剂</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1437">纸巾</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1438">洗衣液</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1439">洗洁精</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1440">消毒液</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1441">洁厕剂</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1442">驱蚊驱虫</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1443">清洁用品</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1444">管道疏通</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1445">除湿防潮</a>
                                  </dd>
        </dl>
                        </div>
        <div class="sub-class-right">
                    <div class="adv-promotions">
                    <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706241333067590.jpg" /></a>
                              <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706241333060831.jpg" /></a>
          </div>
        </div>
      </div>
    </li>
        <li cat_id="593" class="even" >
      <div class="class">
      <span class="arrow"></span>
                <span class="ico"><img src="https://www.taokubuy.com/data/upload/shop/common/category-pic-593.jpg"></span>
                                    <h4><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=593">食品/酒水/粮油/生鲜</a></h4>
                       </div>
      <div class="sub-class" cat_menu_id="593">
      <div class="sub-class-content">
        <div class="recommend-class">
                                  <span><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1625" title="休闲零食">休闲零食</a></span>
                    <span><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=611" title="饼干">饼干</a></span>
                    <span><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=614" title="巧克力">巧克力</a></span>
                    <span><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1334" title="糕点点心">糕点点心</a></span>
                            </div>
                        <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=594">进口食品</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=604">进口零食</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=605">进口巧克力</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=606">进口牛奶</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=607">进口饮料</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=608">进口酒</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=595">休闲零食</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1614">蜜饯果干</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1625">休闲零食</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1675">海苔</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=609">卤味熟食</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=610">坚果果仁</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=611">饼干</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=613">红枣</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=614">巧克力</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=615">膨化食品</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1330">糖果</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1332">肉脯海味</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1334">糕点点心</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=596">酒类</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1567">冰酒</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1568">干红</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1569">干白</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=616">白酒</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=617">红酒</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=618">洋酒</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=619">啤酒</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=620">黄酒</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=621">保健酒</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=597">茶叶</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1688">普洱</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=622">西湖龙井</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=623">安吉白茶</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1335">铁观音</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1336">大红袍</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=624">绿茶</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=625">红茶</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=626">花茶</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=598">乳品冲饮</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1684">蜂蜜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=628">牛奶/酸奶</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1471">藕粉/芝麻糊</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=630">奶粉</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=631">咖啡</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=632">麦片</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1337">奶茶</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1338">水/果汁/汽水</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1470">柚子茶</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1809">即食食品</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=599">粮油速食</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1808">冻品</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1810">即食食品</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1472">罐头</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=635">五谷杂粮</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=637">南北干货</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=638">方便面/披萨</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1339">粽子/油炸食品</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1340">调味品</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1342">生鲜水果</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1343">新鲜蔬菜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1344">新鲜水果</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1345">蛋类</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1346">肉类</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1347">海鲜水产</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1348">精选干货</a>
                                  </dd>
        </dl>
                        </div>
        <div class="sub-class-right">
                    <div class="brands-list">
            <ul>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=412" title="银鹭"><img src="https://www.taokubuy.com/data/upload/shop/brand/05508510491702032_sm.jpg"/>                <span>银鹭</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=408" title="脉动"><img src="https://www.taokubuy.com/data/upload/shop/brand/05512087233096538_sm.jpg"/>                <span>脉动</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=407" title="加多宝"><img src="https://www.taokubuy.com/data/upload/shop/brand/05508506672092193_sm.jpg"/>                <span>加多宝</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=406" title="惠尔康"><img src="https://www.taokubuy.com/data/upload/shop/brand/05508493196506788_sm.jpg"/>                <span>惠尔康</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=402" title="佰翔空厨"><img src="https://www.taokubuy.com/data/upload/shop/brand/05526520528907864_sm.jpg"/>                <span>佰翔空厨</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=401" title="百事可乐"><img src="https://www.taokubuy.com/data/upload/shop/brand/05507484556551432_small.jpg"/>                <span>百事可乐</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=397" title="可口可乐"><img src="https://www.taokubuy.com/data/upload/shop/brand/05505784626354843_small.jpg"/>                <span>可口可乐</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=396" title="统一"><img src="https://www.taokubuy.com/data/upload/shop/brand/05512002728692244_sm.jpg"/>                <span>统一</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=395" title="农心"><img src="https://www.taokubuy.com/data/upload/shop/brand/05512069181887743_sm.jpg"/>                <span>农心</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=393" title="百威啤酒"><img src="https://www.taokubuy.com/data/upload/shop/brand/05512954147508413_sm.jpg"/>                <span>百威啤酒</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=390" title="可比克"><img src="https://www.taokubuy.com/data/upload/shop/brand/05512967287003183_sm.jpg"/>                <span>可比克</span>
                </a></li>
                            <li> <a href="https://www.taokubuy.com/shop/index.php?act=brand&op=list&brand=376" title="农夫山泉"><img src="https://www.taokubuy.com/data/upload/shop/brand/05526785249914244_sm.png"/>                <span>农夫山泉</span>
                </a></li>
                          </ul>
          </div>
                    <div class="adv-promotions">
                    <a target="_blank" href="https://www.taokubuy.com/shop/?act=search&amp;keyword=%E7%99%BD%E5%B1%B1%E6%B0%B4"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706262683862779.jpg" /></a>
                              <a target="_blank" href="https://www.taokubuy.com/shop/?act=search&amp;keyword=%E7%99%BE%E4%BA%8B"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706261560285849.jpg" /></a>
          </div>
        </div>
      </div>
    </li>
        <li cat_id="825" class="odd" >
      <div class="class">
      <span class="arrow"></span>
                <span class="ico"><img src="https://www.taokubuy.com/data/upload/shop/common/category-pic-825.jpg"></span>
                                    <h4><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=825">保健品/滋补品/礼品</a></h4>
                       </div>
      <div class="sub-class" cat_menu_id="825">
      <div class="sub-class-content">
        <div class="recommend-class">
                    </div>
                        <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=826">保健品</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1674">辣木片</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1685">松花粉片</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1364">减肥</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1365">美容养颜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=838">芦荟</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=839">玛卡</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=840">胶原蛋白</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=841">维生素</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=842">保健食品</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=843">鱼油</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=827">滋补品</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1371">灵芝孢子粉</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=844">滋补养生</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=845">蜂蜜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=846">石斛</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=847">阿胶</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=848">枸杞</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1366">冬虫夏草</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1368">西洋参</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1369">人参</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1370">燕窝</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=828">礼品</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1380">手礼</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=849">地方特产</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1791">旅游纪念品</a>
                                  </dd>
        </dl>
                        </div>
        <div class="sub-class-right">
                    <div class="adv-promotions">
                    <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706241723865866.jpg" /></a>
                              <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706241723876377.jpg" /></a>
          </div>
        </div>
      </div>
    </li>
        <li cat_id="662" class="even" >
      <div class="class">
      <span class="arrow"></span>
                <span class="ico"><img src="https://www.taokubuy.com/data/upload/shop/common/category-pic-662.jpg"></span>
                                    <h4><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=662">汽车/配件/车载电器</a></h4>
                       </div>
      <div class="sub-class" cat_menu_id="662">
      <div class="sub-class-content">
        <div class="recommend-class">
                    </div>
                        <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=663">汽车</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=671">小轿车</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1712">中型车</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1713">MPV</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1714">SUV</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1715">跑车</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1716">新能源汽车</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=664">汽车配件</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=674">坐垫/脚垫</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=676">机油/冷冻液</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=677">轮胎</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=678">行车记录仪</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=679">车载导航</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1627">车载香水</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=665">车载电器</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=691">空气净化器</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=692">吸尘器</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=693">车载冰箱</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=694">车载MP3</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=695">车载蓝牙/充电器</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=666">维修保养</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=698">雨刮器</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=699">空调/机油滤芯</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=700">刹车片/盘</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=701">火花塞</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1628">车膜</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=667">美容清洗</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=702">洗车机</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=703">水枪</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=704">车蜡</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=705">玻璃水/清洁剂</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=706">汽油添加剂</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=707">镀晶</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=708">补漆笔</a>
                                  </dd>
        </dl>
                        </div>
        <div class="sub-class-right">
                    <div class="adv-promotions">
                    <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706241925434553.jpg" /></a>
                              <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706241925444035.jpg" /></a>
          </div>
        </div>
      </div>
    </li>
        <li cat_id="1065" class="odd" >
      <div class="class">
      <span class="arrow"></span>
                <span class="ico"><img src="https://www.taokubuy.com/data/upload/shop/common/category-pic-1065.jpg"></span>
                                    <h4><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1065">全球/跨境/国家馆</a></h4>
                       </div>
      <div class="sub-class" cat_menu_id="1065">
      <div class="sub-class-content">
        <div class="recommend-class">
                    </div>
                        <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1066">美妆个护</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1071">洁面</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1464">乳液/面霜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1073">爽肤水</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1074">面部护理套装</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1075">精华液</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1076">眼部护理</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1077">防晒</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1078">面膜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1079">香水</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1080">口红唇膏</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1081">睫毛膏</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1082">指甲油</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1083">BB霜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1084">腮红</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1085">粉饼</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1086">遮瑕</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1087">眼影</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1088">眼线</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1089">彩妆套装</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1090">个人护理</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1091">美容工具</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1067">食品保健</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1092">膳食保健品</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1093">进口食品</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1094">进口饮料</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1068">母婴用品</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1095">宝宝食品</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1096">宝宝用品</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1097">宝宝洗护用品</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1098">孕产妇用品</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1099">宝宝服饰/玩具</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1069">服饰鞋包</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1100">运动户外</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1101">箱包/鞋靴</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1102">饰品/手表</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1103">女装/女士内衣</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1104">男装/男士内衣</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1070">生活数码</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1105">家用电器</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1106">厨房餐具/烹饪用品</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1107">数码音箱</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1108">家居生活</a>
                                  </dd>
        </dl>
                        </div>
        <div class="sub-class-right">
                    <div class="adv-promotions">
                    <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706242115861798.jpg" /></a>
                              <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706242115866225.jpg" /></a>
          </div>
        </div>
      </div>
    </li>
        <li cat_id="1757" class="even" >
      <div class="class">
      <span class="arrow"></span>
                <span class="ico"><img src="https://www.taokubuy.com/data/upload/shop/common/category-pic-1757.jpg"></span>
                                    <h4><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1757">超市/便利店/生活服务</a></h4>
                       </div>
      <div class="sub-class" cat_menu_id="1757">
      <div class="sub-class-content">
        <div class="recommend-class">
                                  <span><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1763" title="瓶装水">瓶装水</a></span>
                    <span><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1783" title="酒水/饮料">酒水/饮料</a></span>
                    <span><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1799" title="纸品">纸品</a></span>
                            </div>
                        <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1792">便利到家</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1794">零食</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1795">速食</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1796">茶叶</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1797">粮油</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1798">干货</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1799">纸品</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1811">日用品</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1812">其他</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1758">送水到家</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1762">桶装水</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1763">瓶装水</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1782">罐装水</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1783">酒水/饮料</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1784">其他</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1764">鲜花到家</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1772">生日</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1773">节日</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1774">纪念日</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1775">商务/活动</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1776">其他</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1765">蛋糕到家</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1777">生日</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1778">节日</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1779">纪念日</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1780">婚礼/活动</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1781">其他</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1793">生鲜到家</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1800">蔬菜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1801">水果</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1802">蛋类</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1803">肉类</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1804">海鲜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1805">水产</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1806">其他</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1785">外卖到家</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1786">早餐</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1787">中餐</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1788">晚餐</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1789">宵夜</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1790">小吃</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1807">其他</a>
                                  </dd>
        </dl>
                <dl>
          <dt>
                           <h3><a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1815">商务到家</a></h3>
                        </dt>
          <dd class="goods-class">
                                    <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1816">软件服务</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1817">硬件服务</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1818">中介服务</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1819">金融服务</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1820">广告服务</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1821">电信服务</a>
                        <a href="https://www.taokubuy.com/shop/index.php?act=search&op=index&cate_id=1822">其他</a>
                                  </dd>
        </dl>
                        </div>
        <div class="sub-class-right">
                    <div class="adv-promotions">
                    <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706242290429511.jpg" /></a>
                              <a target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/goods_class/05706242290428680.jpg" /></a>
          </div>
        </div>
      </div>
    </li>
          </ul>
</div>
    </div>
    <ul class="site-menu">

    
                        <li><a
         target="_blank" href="https://taobao.taokubuy.com">抢购</a></li>
                        <li><a
         target="_blank" href="https://miaosha.taokubuy.com">秒杀</a></li>
                        <li><a
         target="_blank" href="https://www.taokubuy.com/shop/index.php?act=pointvoucher&amp;op=index">优惠券</a></li>
                        <li><a
         target="_blank" href="https://huodong.taokubuy.com">活动</a></li>
                        <li><a
         target="_blank" href="https://1.taokubuy.com">自营</a></li>
                        <li><a
         target="_blank" href="https://5.taokubuy.com">智能</a></li>
                        <li><a
         target="_blank" href="https://7.taokubuy.com">淘库超市</a></li>
                        <li><a
         target="_blank" href="https://8.taokubuy.com">进口商品</a></li>
                        <li><a
         target="_blank" href="https://9.taokubuy.com">便利店</a></li>
                                                                                                                                                                      </ul>
  </div>
</nav>
<div class="nch-breadcrumb-layout">
    <div class="nch-breadcrumb wrapper"><i class="icon-home"></i>
            <span><a href="https://www.taokubuy.com/shop">首页</a></span><span class="arrow">></span>
                <span>抢购</span>
          </div>
  </div>

<div class="ncg-topbar">
  <div id="headRelative" class="ncg-topbar-wrapper">
    <div class="title">
      <h2> 商城抢购 </h2>
          </div>
    <ul class="nav-menu">
      <li><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=index">抢购首页</a></li>
      <li><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list" class="current">线上抢</a></li>
      <li><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=vr_groupbuy_list">虚拟抢</a></li>
    </ul>
  </div>
</div>
<link href="https://www.taokubuy.com/shop/templates/default/css/home_group.css" rel="stylesheet" type="text/css">
<style type="text/css">
.nch-breadcrumb-layout {
	display: none;
}
</style>
<form id="search_form">
  <input name="act" type="hidden" value="show_groupbuy" />
  <input name="op" type="hidden" value="groupbuy_list" />
  <input id="groupbuy_class" name="groupbuy_class" type="hidden" value=""/>
  <input id="groupbuy_price" name="groupbuy_price" type="hidden" value=""/>
  <input id="groupbuy_order_key" name="groupbuy_order_key" type="hidden" value=""/>
  <input id="groupbuy_order" name="groupbuy_order" type="hidden" value=""/>
</form>
<div class="nch-breadcrumb-layout" style="display: block;">
  <div class="nch-breadcrumb wrapper"> <i class="icon-home"></i> <span> <a href="https://www.taokubuy.com/shop">首页</a> </span> <span class="arrow">></span> <span>线上抢</span></div>
</div>

<div class="ncg-container">
  <div class="ncg-category" id="ncgCategory">
    <h3>线上抢</h3>
    <ul>
      <li><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=7">家用电器</a></li>
      <li><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=5">手机数码</a></li>
      <li><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=6">办公电脑</a></li>
      <li><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=4">智能设备</a></li>
      <li><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=1">服装服饰</a></li>
      <li><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=10">美妆护肤</a></li>
    </ul>
    <h3>虚拟抢</h3>
    <ul>
      <li><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=vr_groupbuy_list&vr_class=15">便利到家</a></li>
      <li><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=vr_groupbuy_list&vr_class=5">送水到家</a></li>
      <li><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=vr_groupbuy_list&vr_class=13">鲜花到家</a></li>
      <li><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=vr_groupbuy_list&vr_class=14">蛋糕到家</a></li>
      <li><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=vr_groupbuy_list&vr_class=16">生鲜到家</a></li>
      <li><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=vr_groupbuy_list&vr_class=17">外卖到家</a></li>
    </ul>
  </div>

  <div class="ncg-content">
    <div class="ncg-nav">
      <ul>
        <li class="current"><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list">正在进行</a></li>
        <li><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_soon">即将开始</a></li>
        <li><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_history">已经结束</a></li>
      </ul>
    </div>

    <div class="ncg-screen">

      <!-- 分类过滤列表 -->
      <dl>
        <dt>分类：</dt>
        <dd class="nobg selected"><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=0&s_class=0">不限</a></dd>
        <dd><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=7&s_class=0">家用电器</a></dd>
        <dd><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=5&s_class=0">手机数码</a></dd>
        <dd><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=6&s_class=0">办公电脑</a></dd>
        <dd><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=4&s_class=0">智能设备</a></dd>
        <dd><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=1&s_class=0">服装服饰</a></dd>
        <dd><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=10&s_class=0">美妆护肤</a></dd>
        <dd><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=9&s_class=0">皮具箱包</a></dd>
        <dd><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=8&s_class=0">珠宝首饰</a></dd>
        <dd><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=3&s_class=0">家居用品</a></dd>
        <dd><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=2&s_class=0">户外用品</a></dd>
        <dd><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=11&s_class=0">母婴玩具</a></dd>
        <dd><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=12&s_class=0">食品生鲜</a></dd>
        <dd><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=13&s_class=0">医药保健</a></dd>
        <dd><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=14&s_class=0">家具建材</a></dd>
        <dd><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=15&s_class=0">汽车用品</a></dd>
        <dd><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=16&s_class=0">进口商品</a></dd>
        <dd><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&class=17&s_class=0">生活服务</a></dd>
      </dl>

      <!-- 价格过滤列表 -->
      <dl>
        <dt>价格：</dt>
        <dd class="selected"><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&groupbuy_price=0">不限</a></dd>
                        <dd > <a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&groupbuy_price=1">10-100</a> </dd>
                <dd > <a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&groupbuy_price=2">100-1000</a> </dd>
                <dd > <a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&groupbuy_price=3">1000-2000</a> </dd>
                <dd > <a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&groupbuy_price=4">2000-5000</a> </dd>
                <dd > <a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&groupbuy_price=5">5000-10000</a> </dd>
                <dd > <a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&groupbuy_price=6">10000以上</a> </dd>
                      </dl>
      <dl class="ncg-sortord">
        <dt>排序：</dt>
        <dd class="selected"><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&groupbuy_order_key=0&groupbuy_order=0">默认<i></i></a></dd>
        <dd ><a  href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&groupbuy_order_key=1&groupbuy_order=2">价格<i></i></a></dd>
        <dd ><a  href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&groupbuy_order_key=2&groupbuy_order=2">折扣<i></i></a></dd>
        <dd ><a  href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_list&groupbuy_order_key=3&groupbuy_order=2">销量<i></i></a></dd>
      </dl>
    </div>

        <!-- 抢购活动列表 -->
    <div class="group-list">
      <ul>
                <li class="online">
          <div class="ncg-list-content"> <a title="维达促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=47" class="pic-thumb" target="_blank"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/groupbuy/28/28_05690678104701469_mid.jpg" alt=""></a>
            <h3 class="title"><a title="维达促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=47" target="_blank">维达促销活动</a></h3>
                        <div class="item-prices"> <span class="price"><i>&yen;</i>20<em>.90</em></span>
              <div class="dock"><span class="limit-num">7.01&nbsp;折</span> <del class="orig-price">&yen;29.80</del></div>
              <span class="sold-num"><em>15</em>件已购买</span><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=47" target="_blank" class="buy-button">我要抢</a></div>
          </div>
        </li>
                <li class="online">
          <div class="ncg-list-content"> <a title="维达促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=48" class="pic-thumb" target="_blank"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/groupbuy/28/28_05690685513624381_mid.jpg" alt=""></a>
            <h3 class="title"><a title="维达促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=48" target="_blank">维达促销活动</a></h3>
                        <div class="item-prices"> <span class="price"><i>&yen;</i>13<em>.50</em></span>
              <div class="dock"><span class="limit-num">8.18&nbsp;折</span> <del class="orig-price">&yen;16.50</del></div>
              <span class="sold-num"><em>2</em>件已购买</span><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=48" target="_blank" class="buy-button">我要抢</a></div>
          </div>
        </li>
                <li class="online">
          <div class="ncg-list-content"> <a title="维达促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=49" class="pic-thumb" target="_blank"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/groupbuy/28/28_05690686387495781_mid.jpg" alt=""></a>
            <h3 class="title"><a title="维达促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=49" target="_blank">维达促销活动</a></h3>
                        <div class="item-prices"> <span class="price"><i>&yen;</i>26<em>.00</em></span>
              <div class="dock"><span class="limit-num">7.45&nbsp;折</span> <del class="orig-price">&yen;34.90</del></div>
              <span class="sold-num"><em>4</em>件已购买</span><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=49" target="_blank" class="buy-button">我要抢</a></div>
          </div>
        </li>
                <li class="online">
          <div class="ncg-list-content"> <a title="农夫山泉 天然饮用水促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=50" class="pic-thumb" target="_blank"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/groupbuy/28/28_05690687794635173_mid.png" alt=""></a>
            <h3 class="title"><a title="农夫山泉 天然饮用水促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=50" target="_blank">农夫山泉 天然饮用水促销活动</a></h3>
                        <div class="item-prices"> <span class="price"><i>&yen;</i>29<em>.90</em></span>
              <div class="dock"><span class="limit-num">7.48&nbsp;折</span> <del class="orig-price">&yen;40.00</del></div>
              <span class="sold-num"><em>15</em>件已购买</span><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=50" target="_blank" class="buy-button">我要抢</a></div>
          </div>
        </li>
                <li class="online">
          <div class="ncg-list-content"> <a title="农心白山水促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=51" class="pic-thumb" target="_blank"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/groupbuy/28/28_05690689238477956_mid.jpg" alt=""></a>
            <h3 class="title"><a title="农心白山水促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=51" target="_blank">农心白山水促销活动</a></h3>
                        <div class="item-prices"> <span class="price"><i>&yen;</i>29<em>.90</em></span>
              <div class="dock"><span class="limit-num">5.99&nbsp;折</span> <del class="orig-price">&yen;49.90</del></div>
              <span class="sold-num"><em>23</em>件已购买</span><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=51" target="_blank" class="buy-button">我要抢</a></div>
          </div>
        </li>
                <li class="online">
          <div class="ncg-list-content"> <a title="百事美年达橙味碳酸饮料 促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=64" class="pic-thumb" target="_blank"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/groupbuy/28/28_05695125735273112_mid.jpg" alt=""></a>
            <h3 class="title"><a title="百事美年达橙味碳酸饮料 促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=64" target="_blank">百事美年达橙味碳酸饮料 促销活动</a></h3>
                        <div class="item-prices"> <span class="price"><i>&yen;</i>36<em>.79</em></span>
              <div class="dock"><span class="limit-num">7.37&nbsp;折</span> <del class="orig-price">&yen;49.90</del></div>
              <span class="sold-num"><em>132</em>件已购买</span><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=64" target="_blank" class="buy-button">我要抢</a></div>
          </div>
        </li>
                <li class="online">
          <div class="ncg-list-content"> <a title="百事七喜碳酸饮料 促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=65" class="pic-thumb" target="_blank"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/groupbuy/28/28_05695127337684735_mid.jpg" alt=""></a>
            <h3 class="title"><a title="百事七喜碳酸饮料 促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=65" target="_blank">百事七喜碳酸饮料 促销活动</a></h3>
                        <div class="item-prices"> <span class="price"><i>&yen;</i>36<em>.79</em></span>
              <div class="dock"><span class="limit-num">7.37&nbsp;折</span> <del class="orig-price">&yen;49.90</del></div>
              <span class="sold-num"><em>163</em>件已购买</span><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=65" target="_blank" class="buy-button">我要抢</a></div>
          </div>
        </li>
                <li class="online">
          <div class="ncg-list-content"> <a title="百事七喜碳酸饮料 促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=66" class="pic-thumb" target="_blank"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/groupbuy/14/14_05695182428034547_mid.jpg" alt=""></a>
            <h3 class="title"><a title="百事七喜碳酸饮料 促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=66" target="_blank">百事七喜碳酸饮料 促销活动</a></h3>
                        <div class="item-prices"> <span class="price"><i>&yen;</i>33<em>.90</em></span>
              <div class="dock"><span class="limit-num">6.79&nbsp;折</span> <del class="orig-price">&yen;49.90</del></div>
              <span class="sold-num"><em>125</em>件已购买</span><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=66" target="_blank" class="buy-button">我要抢</a></div>
          </div>
        </li>
                <li class="online">
          <div class="ncg-list-content"> <a title="百事可乐碳酸饮料 促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=67" class="pic-thumb" target="_blank"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/groupbuy/14/14_05695183872263207_mid.jpg" alt=""></a>
            <h3 class="title"><a title="百事可乐碳酸饮料 促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=67" target="_blank">百事可乐碳酸饮料 促销活动</a></h3>
                        <div class="item-prices"> <span class="price"><i>&yen;</i>40<em>.50</em></span>
              <div class="dock"><span class="limit-num">8.12&nbsp;折</span> <del class="orig-price">&yen;49.90</del></div>
              <span class="sold-num"><em>346</em>件已购买</span><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=67" target="_blank" class="buy-button">我要抢</a></div>
          </div>
        </li>
                <li class="online">
          <div class="ncg-list-content"> <a title="百事美年达橙味碳酸饮料 促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=69" class="pic-thumb" target="_blank"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/groupbuy/14/14_05695185311690200_mid.jpg" alt=""></a>
            <h3 class="title"><a title="百事美年达橙味碳酸饮料 促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=69" target="_blank">百事美年达橙味碳酸饮料 促销活动</a></h3>
                        <div class="item-prices"> <span class="price"><i>&yen;</i>39<em>.50</em></span>
              <div class="dock"><span class="limit-num">7.92&nbsp;折</span> <del class="orig-price">&yen;49.90</del></div>
              <span class="sold-num"><em>157</em>件已购买</span><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=69" target="_blank" class="buy-button">我要抢</a></div>
          </div>
        </li>
                <li class="online">
          <div class="ncg-list-content"> <a title="百事可乐碳酸饮料 促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=70" class="pic-thumb" target="_blank"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/groupbuy/28/28_05695239459005462_mid.jpg" alt=""></a>
            <h3 class="title"><a title="百事可乐碳酸饮料 促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=70" target="_blank">百事可乐碳酸饮料 促销活动</a></h3>
                        <div class="item-prices"> <span class="price"><i>&yen;</i>40<em>.50</em></span>
              <div class="dock"><span class="limit-num">8.12&nbsp;折</span> <del class="orig-price">&yen;49.90</del></div>
              <span class="sold-num"><em>158</em>件已购买</span><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=70" target="_blank" class="buy-button">我要抢</a></div>
          </div>
        </li>
                <li class="online">
          <div class="ncg-list-content"> <a title="可口可乐饮料特价促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=72" class="pic-thumb" target="_blank"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/groupbuy/14/14_05700456389865231_mid.jpg" alt=""></a>
            <h3 class="title"><a title="可口可乐饮料特价促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=72" target="_blank">可口可乐饮料特价促销活动</a></h3>
                        <div class="item-prices"> <span class="price"><i>&yen;</i>37<em>.00</em></span>
              <div class="dock"><span class="limit-num">9.54&nbsp;折</span> <del class="orig-price">&yen;38.80</del></div>
              <span class="sold-num"><em>152</em>件已购买</span><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=72" target="_blank" class="buy-button">我要抢</a></div>
          </div>
        </li>
                <li class="online">
          <div class="ncg-list-content"> <a title="农心 白山水促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=76" class="pic-thumb" target="_blank"><img src="https://www.taokubuy.com/data/upload/shop/common/loading.gif" rel="lazy" data-url="https://www.taokubuy.com/data/upload/shop/groupbuy/14/14_05707102936440774_mid.jpg" alt=""></a>
            <h3 class="title"><a title="农心 白山水促销活动" href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=76" target="_blank">农心 白山水促销活动</a></h3>
                        <div class="item-prices"> <span class="price"><i>&yen;</i>1<em>.00</em></span>
              <div class="dock"><span class="limit-num">4.00&nbsp;折</span> <del class="orig-price">&yen;2.50</del></div>
              <span class="sold-num"><em>1533</em>件已购买</span><a href="https://www.taokubuy.com/shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=76" target="_blank" class="buy-button">我要抢</a></div>
          </div>
        </li>
              </ul>
    </div>
    <div class="tc mt20 mb20">
      <div class="pagination"><ul><li><span>首页</span></li><li><span>上一页</span></li><li><span class="currentpage">1</span></li><li><span>下一页</span></li><li><span>末页</span></li></ul></div>
    </div>
      </div>
</div>
<script src="https://www.taokubuy.com/shop/resource/js/home_index.js" ></script>
<script src="https://www.taokubuy.com/data/resource/js/waypoints.js"></script>
<script language="JavaScript">
 //浮动导航  waypoints.js
$("#ncgCategory").waypoint(function(event, direction) {
	$(this).parent().toggleClass('sticky', direction === "down");
	event.stopPropagation();
});
//鼠标触及更替li样式
$(document).ready(function(){
    $("#list").hide();
    $("#button_show").click(function(){
        $("#list").toggle();
    });
    $("#button_close").click(function(){
        $("#list").hide();
    });
});
</script>
					<link href="https://www.taokubuy.com/chat/templates/default/css/chat.css" rel="stylesheet" type="text/css">
					<div style="clear: both;"></div>
					<div id="web_chat_dialog" style="display: none;float:right;">
					</div>
					<a id="chat_login" href="javascript:void(0)" style="display: none;"></a>
					<script type="text/javascript">
					var APP_SITE_URL = 'https://www.taokubuy.com/shop';
					var CHAT_SITE_URL = 'https://www.taokubuy.com/chat';
					var SHOP_SITE_URL = 'https://www.taokubuy.com/shop';
					var connect_url = "https://127.0.0.1:8090";

					var layout = "layout/home_groupbuy_layout.php";
					var act_op = "show_groupbuy_groupbuy_list";
					var user = {};

					user['u_id'] = "";
					user['u_name'] = "";
					user['s_id'] = "";
					user['s_name'] = "";
					user['avatar'] = "https://www.taokubuy.com/data/upload/shop/common/05728119946145412.jpg";

					$("#chat_login").nc_login({
					  action:'/index.php?act=login',
					  nchash:'80ce74cc',
					  formhash:'zKOn-4sr_-XqEQyelxIvlPGV7VnHoGd'
					});
					</script><script type="text/javascript" src="https://www.taokubuy.com/data/resource/js/jquery.charCount.js" charset="utf-8"></script><script type="text/javascript" src="https://www.taokubuy.com/data/resource/js/jquery.smilies.js" charset="utf-8"></script><script type="text/javascript" src="https://www.taokubuy.com/chat/resource/js/user.js" charset="utf-8"></script><!--<div id="faq">
  <div class="faq-wrapper">
    <ul>
           <li> <dl class="s">
      <dt>
              </dt>
                  <dd><i></i><a href="" title="">  </a></dd>
                </dl></li>
        	</ul>	
<div class="help">
		<div class="w1190 clearfix" style="float:right">
    		<div class="contact f-l">
    			<div class="contact-border clearfix">
        			<span class="ic tel t20"></span>
        			<span class="ic mail"></span>
        			<div class="attention cleafix">
        				<div class="weixin f-l">						
    <img src="" class="f-l jImg img-error">
	   					<p class="f-l">
        						<span>扫一扫</span>
        						<span>关注我们</span>
        					</p>
        				</div>
        				<div class="weibo f-l">
        					<div class="ic qq" style="padding-left: 0px;"></div>
        					<div class="ic sina" style="padding-left: 0px;"></div>
        				</div>
        			</div>
    			</div>
    		</div>
		</div>
	</div>			
      </div>
</div>-->
<div id="footer" class="wrapper">
  <p><a href="https://www.taokubuy.com/shop">首页</a>
                                                                                        | <a  target="_blank" href="https://www.taokubuy.com/shop/index.php?act=article&amp;op=show&amp;article_id=1">关于我们</a>
                | <a  target="_blank" href="https://www.taokubuy.com/shop/index.php?act=article&amp;op=article&amp;ac_id=1">商城公告</a>
                | <a  target="_blank" href="https://www.taokubuy.com/shop/index.php?act=article&amp;op=article&amp;ac_id=6">客服中心</a>
                | <a  target="_blank" href="https://www.taokubuy.com/shop/index.php?act=article&amp;op=article&amp;ac_id=2">帮助中心</a>
                | <a  target="_blank" href="https://www.taokubuy.com/shop/index.php?act=article&amp;op=article&amp;ac_id=5">售后服务</a>
                | <a  target="_blank" href="https://www.taokubuy.com/shop/index.php?act=article&amp;op=article&amp;ac_id=4">支付方式</a>
                | <a  target="_blank" href="https://www.taokubuy.com/index.php?act=link">友情链接</a>
                | <a  target="_blank" href="https://www.taokubuy.com/delivery/index.php?act=login">物流加盟</a>
                | <a  target="_blank" href="https://www.taokubuy.com/shop/index.php?act=show_joinin&amp;op=index">商家入驻</a>
                                      </p>
  Copyright © 2012 - 2017 Taokubuy.com    | 淘库商城股份有限公司 保留版权及所有权利<br/>闽公网安备 35020302028562号  | 闽ICP备17020735号</div>
<script type="text/javascript" src="https://www.taokubuy.com/data/resource/js/jquery.cookie.js"></script>
<link href="https://www.taokubuy.com/data/resource/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://www.taokubuy.com/data/resource/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="https://www.taokubuy.com/data/resource/js/qtip/jquery.qtip.min.js"></script>
<script type="text/javascript" src="https://www.taokubuy.com/data/resource/js/jquery.lazyload.js"></script>
<link href="https://www.taokubuy.com/data/resource/js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css">
<script src="https://www.taokubuy.com/shop/resource/js/compare.js"></script>
<script type="text/javascript">
$(function(){
	// Membership card
	$('[nctype="mcard"]').membershipCard({type:'shop'});
});
</script>
</body></html>