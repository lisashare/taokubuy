require.config({
	paths:{
		"jquery":"jquery-1.11.3",
		"cookie":"jquery.cookie"
	}
})
require(["jquery","cookie"],function($,cookie){
//nav导航
$(function(){
	//获取json
	$.getJSON("../json/menu.json",function(json){
		var goodStr = "";
		for(var attr in json){
			var commodity = json[attr].list;
			goodStr += `<li class="hover">
								<div class="class">
									<span class="ico">
										<img src="../images/category-pic-888.jpg"/>
									</span>
									<h4><a href="#">${json[attr].name}</a></h4>
									<span class="arrow">
									</span>
								</div>
								<div class="sub-class">
								<div class="sub-class-content">
								<div class="recommend-class">
									<span><a href="#">冰箱</a></span>
									<span><a href="#">电视</a></span>
									<span><a href="#">空调</a></span>
								</div>
								
								<dl>
									<dt>
										<h3>
											<a href="#">家用电器</a>
										</h3>
									</dt>
									<dd class="goods-class">
										<a href="#">冰箱</a>
										<a href="#">电热毯</a>
										<a href="#">电熨斗</a>
										<a href="#">除湿机</a>
										<a href="#">取暖器</a>
										<a href="#">除湿器</a>
										<a href="#">电视</a>
										<a href="#">空调</a>
										<a href="#">洗衣机</a>
										<a href="#">热水器</a>
									</dd>
								</dl>
								</div>
								
								<div class="sub-class-right">
									<div class="brands-list">
										<ul>
											<li><a href="#">海信</a></li>
										</ul>
									</div>
								</div>
								</div>
							</li>`;
		}
		$(".menu").append(goodStr);
		//鼠标移入所有分类，菜单显示
		$(".all-category").mouseenter(function(){
			$(this).find(".category").css("display","block");
		}).mouseleave(function(){
			$(".category").css("display","none");
		})
	})
})
$(function(){
	//获取路径信息，切割获取商品的id
	//http://127.0.0.1/test/html/magnify.html?pid=001
	//ar cname = arr[1].split("=")[1];
	//获取ajax将id对应的src路径添加到中等图片里面
	$.ajax({
		"url"  :"../json/shopping.json",
		"type" :"get",
		"async":"true",
		success:function(json){
			var s = location.href;
			s = s.split("?")[1];
			//ar arr = s.split("&");
			var pid = s.split("=")[1];
			var str = "";
			var pidObj = json[pid].list;
			
			$(pidObj).each(function(index,value){
				str += `<li class="">
						<img src="../images/${value}" alt="" />
					</li>`;
			})
			$(".controller ul").append(str);
			$(".zj-goods-name").append( pidObj.title);
		//默认第一张图片,和第一张小图的红框
		$("#bigimg").attr("src",$('.controller ul li img').eq(0).attr("src"));
		$(".controller ul li").eq(0).addClass("current");
	//鼠标点击小图片，大图选择相应的图片
	var ind = 0;
	//点击小图片
	$('.controller ul li').click(function(){
		ind = $(this).index();
		
		$(this).addClass("current").siblings().removeClass("current");
		$("#bigimg").attr("src",$(this).find("img").attr("src"));
	})
	//鼠标移入遮罩层
	$(".layer").mousemove(function(e){
		
		var sr = $('.controller ul li').eq(ind).find("img").attr("src");
		//console.log(sr);
		$("#magnifyImg").attr("src",sr).show();
		$(".gallery").addClass("active");
		//小方框显示
		$(".mask").css("display","block");
		$(".magnify-glass").css("display",'block');

		var x = e.pageX - $(".gallery").offset().left - $(".mask").outerWidth()/2;
		var y =  e.pageY - $(".gallery").offset().top - $(".mask").outerHeight()/2;
		var maxL = $(".gallery").outerWidth()-$(".mask").outerWidth();
		var maxT = $(".gallery").outerHeight()-$(".mask").outerHeight();
		
		x = Math.min(maxL,Math.max(0,x));
		y = Math.min(maxT,Math.max(0,y));
		
		$(".mask").css({
			left : x,
			top : y
		})
		//大图left/mask.left = 大图宽度/小图宽度  =大图可视区宽度/mask宽度
		$("#magnifyImg").css({
			left : -x*700/320,
			top : -y*700/320
		})
	})
	//鼠标移出遮罩层
	$(".layer").mouseout(function(){
		$(".mask").css("display","none");
		$(".magnify-glass").css("display",'none');
		$(".gallery").removeClass("active");
	})
}
		//详情选项
		//默认选项是带on属性
	})
		$(".zj-goods-model dd span").eq(0).addClass("on");
		$(".zj-goods-color dd span").eq(0).addClass("on");
		$(".zj-goods-rom dd span").eq(0).addClass("on");
		$(".zj-goods-versions dd span").eq(0).addClass("on");
		
		$(".zj-goods-style dl dd span").each(function(index,value){
			$(this).click(function(){
				$(this).addClass("on").siblings().removeClass("on");
				
				if($(this).parent().parent().attr("class")=="zj-goods-model"||$(this).parent().parent().attr("class")=="zj-goods-rom"){
					//console.log($(this).parents(".zj-goods-model"));
					price();
				};
			})
		//判断价格的封装函数
		function price(){
			var p1 = 0;
			var p2 = 0;
			//判断型号
			$(".zj-goods-model span").each(function(index,value){
				if($(this).attr("class")=="on"){
					var ind = $(this).index();
					p1 = ind ? 6088:5288;
				}
			});
			//判断内存
			$(".zj-goods-rom span").each(function(){
				if($(this).attr("class")=="on"){
					var ind = $(this).index();
					switch (ind){
						case 0 : p2 = 0;break;
						case 1 : p2 = 800;break;
						case 2 : p2 = 1600;break;
					}
				}
			});
			$("#zj-price").text(p1+p2);
		}
		//点击页面button跳转回列表页
		$(".zj-goods-price button").click(function(){
			location.href = "shopping.html";
		})
		});
})

})