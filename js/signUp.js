function signUpMessage(){
	var id=document.forms["signUp"]["id"].value;
	var pw=document.forms["signUp"]["password"].value;
	var pw2=document.forms["signUp"]["checkpassword"].value;
	var name=document.forms["signUp"]["name"].value;
	var email=document.forms["signUp"]["email"].value;
	if(id==""){
		alert("請輸入帳號");
		return false;
	}
	if(pw==""){
		alert("請輸入密碼");
		return false;
	}
	if(pw2==""){
		alert("請再次輸入密碼");
		return false;
	}
	if(name==""){
		alert("請輸入姓名");
		return false;
	}
	if(email==""){
		alert("請輸入email");
		return false;
	}
}