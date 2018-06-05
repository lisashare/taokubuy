require.config({
	paths:{
		'jquery':'jquery-1.11.3',
		'cookie':'jquery.cookie'
	}
})
require(["jquery","cookie"],function($,cookie){
	$(function(){
		$("#user_name").val("");
		//给登录按钮添加点击事件
		$(".login").click(function(){
			
			//获取用户输入的用户名和密码
			var usn = $("#user_name").val();
			var psw = $("#psw").val();
			//校验用户名和密码是否正确
			//获取到cookie中的用户信息
			var userStr = $.cookie("registerUsers")?$.cookie("registerUsers"):"";
			//将字符串转为对象
			var userObj = convertStrToObj(userStr);
		
			if(usn in userObj){
					if(userObj[usn] == psw){
					//登录成功
					$.cookie("loginedUsers",usn,{expires:7,path:"/"});
					
					location.href = "../index.html";
					}else{
						//登录失败
						alert("用户名和密码不匹配，请确认后重试!");
					}
			}else{
				alert("请先注册!");
			}
		})
		//将字符串转为对象
			function convertStrToObj(str){
				if(!str){
					return {};
				}
				return JSON.parse(str);
			}
	})
})

