<?php
	$username=&_POST["username"];//获得参数
	$password=md5($_POST['password'];
	$email=$_POST['address'];
	$host="localhost";
	$user="root";
	$db_name="test";
	$link=mysql_connect($host,$user) or die(mysql_error());//链接数据库
	mysql_select_db($db_name,$link);//问题在于怎么建数据库，怎么编译php文件，pnhp代码怎么用
	$sql="select username from $table_user where username='$username'";
	$result=mysql_query($sql,$link);
	$nums=mysql_num_rows($result);
	if($nums!=0) echo " 用户名已经存在！点<a href=\'#\' onclick=history.go(-1)>这里</a>返回 " ; //加入一个html代码，地址可能不对
	else{
		$sql="insert into $table_user(username,password,address)values('$username','$password','email')";//理解语句，可能有误
		mysql_query($sql,$link) or die(mysql_error());//添加用户
		echo "注册成功!点<a href="登录界面.html" target="_blank">登录</a>跳转";
	}
?>