define(function(){
	return {
		slide:function(){
				//$(function(){
					
	 			var timer = null;
				timer = setInterval(autoPlay,3000);
				var index = 0;
				var $ullis = $("#fullScreenSliders li");
				var $ollis = $(".full-screen-slider-pagination li");
				//自动轮播
				function autoPlay(){
					index++;
					if(index == $ullis.size()){
						index = 0;
					}
					$ullis.eq(index).fadeIn().siblings().fadeOut();
					$ollis.eq(index).addClass("current").siblings().removeClass('current');
					
				}
				
				$(".full-slider").mouseenter(function(){
					clearInterval(timer);
					$('.banner-arrow .arrow').animate({"opacity":1},500);
				})
				$(".full-slider").mouseleave(function(){
					clearInterval(timer);
					$('.banner-arrow .arrow').animate({'opacity':0},500);
						
					timer = setInterval(autoPlay,3000);
				})
	
		 		//左按钮
		 		$(".pre").click(function(){
		 			index--;
		 			if(index < 0){
		 				index = $ullis.size() - 1;
		 			}
		 				$ullis.eq(index).fadeIn().siblings().fadeOut();
				$ollis.eq(index).addClass("current").siblings().removeClass('current');
	   		})
		 		//右按钮
		 		$(".next").click(function(){
		 			index++;
		 			if(index > $ullis.size() - 1){
		 				index = 0;
		 			}
		 		$ullis.eq(index).fadeIn().siblings().fadeOut();
				$ollis.eq(index).addClass("current").siblings().removeClass('current');
	   		})
		 		//鼠标移入小圆点
		 		$ollis.mouseenter(function(){
		 			index = $(this).index();
		 			$ullis.eq(index).fadeIn().siblings().fadeOut();
				$ollis.eq(index).addClass("current").siblings().removeClass('current');
		 	})
		 		
	//大轮播下面的小轮播
		var $smallSlider = $(".jfocus-trigeminy ul li a");
		
		$(".jfocus-trigeminy").mouseenter(function(){
			$(".pagination .arrow").animate({opacity:0.5});
		}).mouseleave(function(){
			$(".pagination .arrow").animate({opacity:0},300);
		})
		$smallSlider.mouseenter(function(){
				$(this).animate({opacity:1},300);
				$(this).siblings().animate({opacity:0.5},300);
				//$(".pagination .arrow").animate({opacity:0.5});
		}).mouseout(function(){
			$smallSlider.animate({opacity:1},300);
			//$(".pagination .arrow").animate({opacity:0},300);
			
		})
		//鼠标移入按钮也显示
		$(".pagination .arrow ").mouseenter(function(){
			$(this).animate({opacity:0.5},300);
		}).mouseout(function(){
			$(this).animate({opacity:0},300);
			
		})
		//给左右按钮添加点击事件
		$(".pagination .pre").click(function(){
			$(".jfocus-trigeminy ul").animate({left:0},300);
		})
		$(".pagination .next").click(function(){
			$(".jfocus-trigeminy ul").animate({left:-985},300);
		})
		
	//})
	/*楼梯层的轮播*/
	//$(function(){
		var $timer = null;
		//获取
		var $ul = $(".right-side-focus ul");
		var $ulist = $(".right-side-focus ul li");
		var $imgW = $(".right-side-focus ul li").width();
		var $span = $(".pagination span");
		var $index = 0;
		//自动轮播
		autoplay();
		function autoplay(){
			$timer = setInterval(function(){
			$index ++;
			if($index == $ulist.size()){
				$index = 1;
				$ul.animate({left:0},0);
			}
			$ul.animate({left:-$index*$imgW});
			$span.eq($index == 5 ? 0 : $index).css("opacity",0.8).siblings().css('opacity',0.4)
		},3000);
	}
	 	//鼠标移入移出操作定时器   同时箭头显示和隐藏
		$('.right-side-focus').mouseover(function(){
	 		clearInterval($timer);
		})
		$('.right-side-focus').mouseout(function(){
	 		clearInterval($timer);
	 		autoplay();
		})
		
		
		//添加点击事件
		//右按钮
		$(".right-side-focus .next").click(function(){
			$index ++;
				if($index == $ulist.size()){
				$index = 1;
				$ul.animate({left:0},0);
			}
			$ul.animate({left:-$index*$imgW});
			$span.eq($index == 5 ? 0 : $index).css("opacity",0.8).siblings().css('opacity',0.4)
	})
		
		//左按钮
		$(".right-side-focus .pre").click(function(){
			//当第一张图片运动完成后，将index的值改为最长，将 left的值改为最大
			//然后才能index++
			if($index == 0){
				$index = $ulist.size()-1;
				$ul.animate({left:-$index*$imgW},0);
			}
			$index --;
	//		if($index == -1){
	//			$index = $ulist.size()-2;
	//		}
			$ul.animate({left:-$index*$imgW},1000);
			$span.eq($index == 5 ? 0 : $index).css("opacity",0.8).siblings().css('opacity',0.4)
	
		})
			$span.mouseover(function(){
	 			clearInterval($timer);
				$index = $(this).index();
				$ul.stop().animate({left:-$index*$imgW},1000);
				$span.eq($index).css("opacity",0.8).siblings().css('opacity',0.4)
				})	
			$span.mouseout(function(){
				$index = $(this).index();
				$ul.stop().animate({left:-$index*$imgW},1000);
				$span.eq($index).css("opacity",0.8).siblings().css('opacity',0.4)
				clearInterval($timer);
				autoplay();
		})
	//})



			}
		}
})
