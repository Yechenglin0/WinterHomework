<?php
session_start();
header("Content-type:text/html;charset=utf-8");

	if($_POST['yzm_code']!=$_SESSION['yzm_code']){
		die("<script>alert('验证码错误！！');history.go(-1);</script>");}
	
	include 'connect.php';
	$name = $_POST['name'];
	$password = md5($_POST['password']);
	
	$sql_name = "SELECT * FROM consumer WHERE name='$name'";
	$res = $dbh->query($sql_name);
	$row = $res->fetchAll();

	$sql_password = "SELECT * FROM consumer WHERE name='$name' and password='$password'";
	
	if (!$row){
		die("<script>alert('该用户名不存在！！');history.go(-1);</script>");
	}
	else{
		$login = $dbh->query($sql_password);
		if($login){
			echo "<script>alert('登录成功！！');</script>";
			header("location:main.php");
			$_SESSION['login']=1;
		}
		else{
			die("<script>alert('密码错误！！');history.go(-2);</script>");
		}
	}

	
?>

