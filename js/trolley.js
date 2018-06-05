require.config({
	paths : {
		'jquery':'jquery-1.11.3',
		'cookie':'jquery.cookie'
	}
})
require(["jquery","cookie"],function($,cookie){
$(function(){
		//获取cookie中的数据
		let cartStr = $.cookie("trolley") ? $.cookie("trolley") : "";
		//cartStr.length == 0
		if(cartStr == "{}"||!cartStr){
			$('.null-shopping').css('display','block');
		}else{
			let cartObj = convertStrToObj(cartStr);
			/*{'sp1' : {
				"name" : "香蕉",
				"price" : "30",
				"src" : "img/1.jpg",
				"num" : 1
			}}*/
			var str = "";
			for(let i in cartObj){
				let goodId = cartObj[i];
				str +=`
				<ul class="goodInfo" data-good-id="${i}">
					<li class="w50">
						<input type="checkbox" name="" id="" value="" />
					</li>
					<li class="w60">
						<a href="#"><img src="${goodId.src}" alt="" /></a>
					</li>
					<li class="w300">${goodId.name}</li>
					<li class="w60">规格</li>
					<li class="w120"><em id="item_price">${goodId.price}</em></div>
					<li class="w120 goodsNum">
						<a href="javascript:;" class="substract-key minus">-</a>
						<input type="text" class="text" value="${goodId.num}"/>
						<a href="javascript:;" class="substract-key plus">+</a>
					</li>
					<li class="w120 item_subtotal">
						${goodId.price*goodId.num}
					</li>
					<li class="w120 ">
						<a href="javascript:;" class="collect">收藏</a><br />
						<a href="javascript:;" class="del">删除</a>
					</li>
				</ul>`
			}
			//添加到页面
			$(".item_list").append(str);
			
			//全选操作
			$("#seclectAll").click(function(){
				$(".goodInfo input").prop("checked",$(this).prop("checked"))
				
			})
			addEvent();
		}
	function addEvent(){
		//给删除按钮添加事件
		$(".goodInfo .del").click(function(){
			//删除页面中的对应删除商品的ul并返回该商品的id
			let goodId = $(this).parents(".goodInfo").remove().attr("data-good-id");
			//删除对应cookie中id的内容
			let cartStr = $.cookie("trolley") ? $.cookie("trolley"):"";
			let cartObj = convertStrToObj(cartStr);
			delete cartObj[goodId];
			//将修改过的对象转为字符串重新加入cookie
			$.cookie("trolley",JSON.stringify(cartObj),{expires:7,path:'/'});
			
			if( $.cookie("trolley") == "{}"){
			$('.null-shopping').css('display','block');
			}
		})
		//给加按钮添加事件
		$(".plus").click(function(){
			let goodId = $(this).parents(".goodInfo").attr("data-good-id");
			//获取当前的商品数量
			let value = $(this).siblings('input').val();
			//修改数量
			$(this).siblings('input').val( ++value);
			//获取cookie,更新cookie中的商品数量
			let cartStr = $.cookie("trolley")?$.cookie("trolley"):"";
			let cartObj = convertStrToObj(cartStr);
			cartObj[goodId].num = value;
			console.log(cartObj[goodId].num*cartObj[goodId].price);
			$(this).parent().next().text(cartObj[goodId].num*cartObj[goodId].price);
			//重新加入cookie
			$.cookie('trolley',JSON.stringify(cartObj),{expires:7,path:'/'})
			
		})
		//给减按钮添加事件
		$(".minus").click(function(){
			let goodId = $(this).parents('.goodInfo').attr("data-good-id");
			let cartStr = $.cookie("trolley")?$.cookie("trolley"):"";
			let cartObj = convertStrToObj(cartStr);
			
			if(cartObj[goodId].num > 1){
				cartObj[goodId].num --;
			}
			//更新页面中数量的文本框
			$(this).next().val(cartObj[goodId].num);
			//更新合计
			$(this).parent().next().text(cartObj[goodId].num*cartObj[goodId].price);
			//重新加入cookie
			$.cookie('trolley',JSON.stringify(cartObj),{expires:7,path:'/'})
		})
		//给商品数量的文本框加失焦事件
		$(".goodsNum input").blur(function(){
			//获取当前商品的id
			let goodId = $(this).parents('.goodInfo').attr('data-good-id');
			//更新cookie数量
			let cartStr = $.cookie("trolley")?$.cookie("trolley"):"";
			let cartObj = convertStrToObj(cartStr);
			//获取当前文本框中的数量值
			var value = $(this).val();
			if(/^\d+$/.test(value)&&value>0){
				cartObj[goodId].num = value;
			}else{
				cartObj[goodId].num = 1;
			}
			//更新文本框中的数值
			$(this).val(cartObj[goodId].num);
			//更新合计
			$(this).parent().next().text(cartObj[goodId].num*cartObj[goodId].price);
			
			//重新创建cookie
			$.cookie("trolley",JSON.stringify(cartObj),{expires:1,path:"/"})
		})
		//$("#cartTotal").html();
		
		
	}
		
		
	function convertStrToObj(str){
		if(!str){return {};}
		else{
			return JSON.parse(str);
		}
	}
	})

})