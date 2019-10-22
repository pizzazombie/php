<?php
	session_start();
	//$_SESSION['login'] = $_GET('login');
	//$_SESSION['passwd'] = $_GET('passwd');
	if ($_GET['submit'] === "OK") {
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
	}


?>
<html>
<head>
<style>

.submit{
	background: #515151;
	color: #40E0D0;
}
.text{
	color: #008080;
	font-size: 15pt;
}
</style>
</head>
<body>

<form method="get" action="">
username: <input class="text" type="text" name="login" value="<?php if ($_SESSION["login"]){ echo $_SESSION["login"];} ?>"/>
</br>
password: <input class="text" type="text" name="passwd" value="<?php if ($_SESSION["passwd"]){ echo $_SESSION["passwd"];} ?>"/>
<input type="submit" name="submit"  value="OK">
</form>
</body>
</html>