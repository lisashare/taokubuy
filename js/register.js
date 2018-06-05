require.config({
	paths : {
		"jquery":"jquery-1.11.3",
		"cookie":"jquery.cookie"
	}
})
require(["jquery","cookie"],function($,cookie){
$(function(){
	$("#user_name").val(""); 
	$("#email").val("");
	$("#captcha").val("");//验证码
	//注册 ：获取用户名和密码，判断值
	//获取input
	var $input = $("#register_form input");
	var arr = [false,false,false,false,false];
//	var usn = $("#user_name").val(); 
//	var pwd = $("#password").val();
//	var con = $("#password_confirm").val();
//	var email = $("#email").val();
//	var captcha = $("#captcha").val();//验证码
	//第一个用户名
	$input.eq(0).blur(function(){
		var reg_01 = /[\w\4e00-\9fa5]{3,15}/;
		if(!reg_01.test( $(this).val() )){
			$(this).next().css("display","block");
			arr[0] = false;
		}else{
			$(this).next().css("display","none");
			arr[0] = true;
		}
	})
	//第二个密码
	$input.eq(1).blur(function(){
		var reg_02 = /[\w\4e00-\9fa5]{6,20}/;
		if(!reg_02.test( $(this).val() )){
			$(this).next().css("display","block");
			arr[1] = false;
			console.log(this.value);
		}else{
			$(this).next().css("display","none");
			arr[1] = true;
		}
	})
	//第三个确认密码
	$input.eq(2).blur(function(){
	var con = $("#password_confirm").val();
	var pwd = $("#password").val();
		
		if(!(pwd == con)){
			$(this).next().css("display","block");
			arr[2] = false;
		}else{
			$(this).next().css("display","none");
			arr[2] = true;
		}
	})
	//第四个邮箱
	$input.eq(3).blur(function(){
		var reg_03 = /^[^0]\w+@\w+.\w+$/;
		if(!reg_03.test($(this).val() ) ){
			$(this).next().css("display","block");
			arr[3] = false;
		}else{
			$(this).next().css("display","none");
			arr[3] = true;
		}
	})
	//第五个验证码
	$input.eq(4).blur(function(){
		var num = 1234;
		if(!(captcha = num)){
			$(this).next().css("display","block");
			arr[4] = false;
		}else{
			$(this).next().css("display","none");
			arr[4] = true;
		}
	})
	//提交
	$("#Submit").click(function(){
		if($(".checkbox").is(":checked") ){
			if(!(arr.indexOf(false) == -1)){
				alert("信息不完善！");
			}else{
				
				//表单信息填写好之后，检测注册用户是否已经存在
				//获取cookie中的用户信息,如果cookie中有"registerUsers"，则进行下一步，否则返回空
				var usn = $("#user_name").val(); 
				var pwd = $("#password").val();
				var userStr = $.cookie("registerUsers") ? $.cookie("registerUsers") : "";
				//将字符串转为对象
				var userObj = converStrToObj(userStr);
				if(usn in userObj){
					alert("该用户名已经被注册!");
				}else{
					//alert(pwd);
					userObj[usn] = pwd;
					//将用户信息对象转化回字符串
					var userStr = converObjToStr(userObj);
					$.cookie('registerUsers',userStr,{expires:7,path:"/"});
					
					if(confirm("注册成功!是否去登录")){
						window.location = "login.html";
					}
				}
			
			}
		}
	})

//将字符串转为对象
function converStrToObj(str){
	if(!str){
		return {};
	}else{
	//key='{name : pwd,}';
	//假设不为空   "test1":123
	return JSON.parse(str);
	}
}
//将对象转为字符串
function converObjToStr(obj){
	if(!obj){
		return "";
	}else{
		return JSON.stringify(obj);
	}
}
})
	
})


