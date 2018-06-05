//用户名登录注销
define(function(){
	return{
		slider01:function(){
				//左侧侧边栏 鼠标移入事件
				//除了最后一个li的样式不变，其移入增加class
				$('.nav_box ul li').not('.last').hover(function(){
					$(this).addClass('hover');
				},function(){
					$(this).removeClass('hover');
				})
				//鼠标点击:所有的a:block-->none none--block,当前相反
				//鼠标点击前
				var mark = 1;
				$(".nav_box ul li").not('.last').click(function(){
					//改变标记
					mark = 2;
					//排他思想
					$(".nav_box ul li").find(".word").css("display",'none');
					$(".nav_box ul li").find(".num").css("display",'block');
					
					$(this).find(".word").css("display",'block');
					$(this).find(".num").css('display','none');
					//点击左边导航，然后跳到指定的楼层
					//首先。获取当前点击的对应序列号
					var $index = $(this).index();
					//alert(index);
					//获取指定楼梯与浏览器上面的距离
					var top = $(".home-standard-layout").eq($index).offset().top;
					//alert(top);
					
					//浏览器滚动的高度
					$("body,html").animate({scrollTop : top},500,function(){
						mark = 1;
					})
				
				})
				//浏览器窗口滚动事件
				$(window).scroll(function(){
					if(mark == 1){
						var $top = $(this).scrollTop();
						//获取滚动条滚动的高度
						//document.title = $top;
						//通过滚动条来判断
						if($top > 1300){
							//淡入 导航，慢慢显示出来
							$(".nav_box").fadeIn();
						}else{
							//淡出 导航慢慢消失
							$(".nav_box").fadeOut();
						}
						//循环每一个楼梯，然后找到最先满足条件的那个楼梯
						var $obj = $(".home-standard-layout");
						$obj.each(function(index,value){
							//楼层与浏览器上面的高度
							var $height = $obj.eq(index).offset().top + $(this).height()/2;
							//alert(height);
							//document.title = $top + "-" +$height;
							//当前楼层的高度+楼层一半 》 当前滚动的高度 
							if($top < $height){
								$(".nav_box ul li").find(".word").css("display",'none');
					$(".nav_box ul li").find(".num").css("display",'block');
					$(".nav_box ul li").eq(index).find(".word").css("display",'block');
					$('.nav_box ul li').eq(index).find(".num").css('display','none');
					return false;
							}
						})
					}
				})
				//点击Top按钮，跳转到浏览器顶部
				$(".nav_box ul li.last").click(function(){
					$("body,html").animate({scrollTop:0},500,function(){
						mark = 1;
					})
				})
				//楼层右侧
				$(function(){
					$(".banner-thumb").hover(function(){
						$(this).animate({top:-10},500)
					},function(){
						$(this).animate({top:0},500)
					})
				})
		},
		login :	function(){
					var str = $.cookie("loginedUsers")?$.cookie("loginedUsers"):"";
					if(str){
						var topUname = `您好!<span><a href="#">${str}</a></span>欢迎回来，<a href="#">淘库商城</a><span><a href="html/login.html">[退出]</a></span>`;		
						$(".user-entry").append(topUname);
					}
					else{
						var topStr = `Hi,欢迎来
								<a href="#" title="首页" alt="首页">淘库商城</a>
								<a href="html/login.html" id="login">请登录</a>
								<span><a href="html/register.html" id="register">免费注册</a></span>`;
						$(".user-entry").append(topStr);
					}
			}
		}
})


