require.config({
	paths : {
		'jquery':'jquery-1.11.3',
		'cookie':'jquery.cookie',
		'flew'	:'jquery.fly'
	}
})
require(["jquery","cookie","flew"],function($,cookie,flew){
$(function(){
	//点击侧边栏_top，回到顶部
	$("#_top").click(function(){
		$("body,html").animate({scrollTop:0},300);
	})
	//先从../json/shopping.json中获取商品数据，存放页面
	$.getJSON('../json/shopping.json?t='+ new Date().getTime(),function(data){
		for(var attr in data){
			//console.log(data);
			var str = "";
			$(data[attr]).each(function(index,value){
				//href="m/html?pid=${pro.id}&cname="${attr}";
				str +=`
					<li data-good-id="${attr}">
						<dl>
							<dt class="goods-thumb"><a href="magnify.html?pid=${attr}" target="_blank"><img src="../images/${value.src}"/></a></dt>
							<dd class="goods-name">
								<a target="_blank" href="magnify.html?pid=${attr}" title="${value.title}">${value.title}</a>
								</dd>
							<dd class="goods-price">商城价<em>${value.price}</em><input type="button" value="购买" class="addToCart" /></dd>
						</dl>
					</li>`
			})
			$(".group-list ul").append(str);
		}
		initCart();
		loadPage();
	})
//封装的cookie购物车的函数
function loadPage(){
//给button添加到购物车按钮点击事件
	var $buy = $(".addToCart");
	$buy.click(function(evt){
		/*'cart={
	 * 			"id" : {
	 * 				"name" : "名字",
	 * 				"price" : "价格",
	 * 				"num" : 数量,
	 * 				"src" : 地址
	 * 			}
				 }*/
		//var evt = evt || window.event;
		//获取商品id
		let goodId = $(this).parents("li").attr("data-good-id");
		//获取商品名称
		let goodName = $(this).parent().prev().children("a").text();
		//获取商品价格
		let goodPrice = parseInt($(this).prev().html());
		//获取商品img的src
		let goodSrc = $(this).parent().siblings("dt").find('img').attr('src');
		//获取当前的cookie
		var cartStr = $.cookie("trolley")?$.cookie("trolley"):"";
		//console.log($.cookie("trolley"));
		//将cookie字符串转成对象
		var cartObj = convertStrToObj(cartStr);
		//判断cookie中是否存在这个商品
		if(goodId in cartObj){
			//如果存在数量++
			cartObj[goodId].num ++;
		}else{
			cartObj[goodId] = {
				"name" :goodName,
				"price":goodPrice,
				"src" :goodSrc,
				"num" :1
			}
		}
		//将这个新的对象转为字符串，存在cookie
		$.cookie("trolley",JSON.stringify(cartObj),{expires:7,path:"/"});
		let $img = $(this).parent().siblings("dt").find('img').clone().css({width:50,height:50});
		$img.fly({
			start:{
				top:evt.clientY,
				left:evt.clientX
			},
		end:{
			top:$(".tools_img").offset().top,
			left:$(".tools_img").offset().left,
			width:0,
			height:0
		},autoPlay:true,
		onEnd : function(){
			//正则 
			let num = parseInt($("#mmm").text().match(/\d+/g));
			//alert(num);
			$('#mmm').text("购物车("+(num+1)+")");
			$img.remove();
		}
		})
	})
}
//字符串转成对象
function convertStrToObj(str){
	if(!str)return {};
	else{
		return JSON.parse(str);
	}
}
//当页面重新加载时，初始化购物车

function initCart(){
	//获取cookie
	let cartStr = $.cookie("trolley")?$.cookie("trolley"):"";
	let cartObj = convertStrToObj(cartStr);
	//设置一个变量，计算一共的数量
	var count = 0;
	//遍历出每一个商品,每次的num相加
	for(let id in cartObj){
		count += cartObj[id].num;
	}
	$("#mmm").text("购物车("+ count +")");
}


	

})
})