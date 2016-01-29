<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>主页</title>
</head>
<body>
	<?php
		session_start();
		if (!isset($_SESSION['login'])) {
			?>
				<a href="login.html">登入</a>
				<a href="regist.html">注册</a>
			<?php
		}	
		else{
			?>
			<form action="logout.php" method="post">
				<input type="submit" value="注销">
				<a href="member.php" target="_blank" >个人空间</a>
			</form>
			<?php
		}
	?>
	<a href="file.php">投稿</a>
</body>
</html>
