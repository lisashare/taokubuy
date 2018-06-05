//设置导入模块的路径
require.config({
	paths:{
		'jquery':'jquery-1.11.3',
		'cookie':'jquery.cookie',
		"index"	:"index",
		"json"	:"json",
		"slider":"slider",
		"top"	:"top"
	}
})
require(['jquery','cookie',"index","json","slider","top"],function($,cookie,index,json,slider,top){
	$(function(){
		index.slider01();
		index.login();
		json.jsonData();
		slider.slide();
		top.top();
	})
	
})
//导入模块

