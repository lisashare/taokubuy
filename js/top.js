define(function(){
	return {
		top:function(){
	let $dls = $(".quick-menu dl");
	$dls.hover(function(){
		$(this).children("dd").css("display","block");
	},function(){
		$dls.children("dd").css("display","none")
	});
	let $dds = $(".quick-menu dl dd a");
	$dds.hover(function(){
		$(this).css("background","#f7f7f7");
	},function(){
		$(this).css("background","");
	})
}
	}
})

