define(function(){
	return { jsonData :function(){
		//选项卡
//$(function(){
	//鼠标移入.tabs-nav li
	var $navLi = $(".tabs-nav li");
	
	$navLi.mouseover(function(){
		$(this).addClass("tabs-selected").siblings().removeClass('tabs-selected');
		var ind = $(this).index();
		$('.left-layout .sale-goods-list').eq(ind).removeClass('tabs-hide').siblings(".sale-goods-list").addClass('tabs-hide');
	})
//})
//通过ajax获取json/index.json中的数据
//$(function(){
	$.getJSON("json/index.json",function(data){
		var product_data = data;//得到返回的数据
		var $div_ul = $('.sale-goods-list ul');
		for(var product_name in product_data){
		
			if( product_name == "疯狂抢购"){
				var product_ = product_data[product_name];
				for(var good_info in product_){
					var str = "";
					$(product_[good_info]).each(function(index,value){
						str += `<li>
							<dl>
								<dt class="goods-thumb"><a href="${value.href}"><img src="images/${value.src}" alt="${value.alt}" /></a></dt>
								<dd class="goods-name"><a href="${value.href}" title="${value.title}">${value.title}</a></dd>
								<dd class="goods-price">商城价<em>${value.price}</em></dd>
							</dl>
						</li>`
					})
					$div_ul.eq(0).append(str);
				}
			}
			if(product_name == "热卖商品"){
				var product_ = product_data[product_name];
				for(var good_info in product_){
					var str = "";
					$(product_[good_info]).each(function(index,value){
						str += `<li>
							<dl>
								<dt class="goods-thumb"><a href="${value.href}"><img src="images/${value.src}" alt="${value.alt}" /></a></dt>
								<dd class="goods-name"><a href="${value.href}" title="${value.title}">${value.title}</a></dd>
								<dd class="goods-price">商城价<em>${value.price}</em></dd>
							</dl>
						</li>`
					})
					$div_ul.eq(1).append(str);
				}
			}
			if(product_name == "热评商品"){
				var product_ = product_data[product_name];
				for(var good_info in product_){
					var str = "";
					$(product_[good_info]).each(function(index,value){
						str += `<li>
							<dl>
								<dt class="goods-thumb"><a href="${value.href}"><img src="images/${value.src}" alt="${value.alt}" /></a></dt>
								<dd class="goods-name"><a href="${value.href}" title="${value.title}">${value.title}</a></dd>
								<dd class="goods-price">商城价<em>${value.price}</em></dd>
							</dl>
						</li>`
					})
					$div_ul.eq(2).append(str);
				}
			}
			if(product_name == "新品上架"){
				var product_ = product_data[product_name];
				for(var good_info in product_){
					var str = "";
					$(product_[good_info]).each(function(index,value){
						str += `<li>
							<dl>
								<dt class="goods-thumb"><a href="${value.href}"><img src="images/${value.src}" alt="${value.alt}" /></a></dt>
								<dd class="goods-name"><a href="${value.href}" title="${value.title}">${value.title}</a></dd>
								<dd class="goods-price">商城价<em>${value.price}</em></dd>
							</dl>
						</li>`
					})
					$div_ul.eq(3).append(str);
				}
			}
			if(product_name == "猜你喜欢"){
				var product_ = product_data[product_name];
				var product_ = product_data[product_name];
				for(var good_info in product_){
					var str = "";
					$(product_[good_info]).each(function(index,value){
						str += `<li>
							<dl>
								<dt class="goods-thumb"><a href="${value.href}"><img src="images/${value.src}" alt="${value.alt}" /></a></dt>
								<dd class="goods-name"><a href="${value.href}" title="${value.title}">${value.title}</a></dd>
								<dd class="goods-price">商城价<em>${value.price}</em></dd>
							</dl>
						</li>`
					})
					$div_ul.eq(4).append(str);
				}
			}
		}
	})
//})
//$(function(){
	var $list = $(".home-sale-con ul");
	//获取json数据
	$.getJSON("json/shopping.json",function(data){
		//console.log(data);
		for(var attr in data){
			var str = "";
			$(data[attr]).each(function(index,value){
						str += `<li>
							<dl>
								<dt class="goods-thumb"><a href="html/magnify.html?pid=${attr}"><img src="images/${value.src}" alt="${value.alt}" /></a></dt>
								<dd class="goods-name"><a href="html/magnify.html?${attr}" title="${value.title}">${value.title}</a></dd>
								<dd class="goods-price">商城价<em>${value.price}</em></dd>
							</dl>
						</li>`;
			})
			$list.append(str);
		}
	})
//})
		}
	}
})