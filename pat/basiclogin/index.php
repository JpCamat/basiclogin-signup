<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="b.css"/>
<meta name="viewport" content=="width=device-width,initial-scale=1"/> 
	<title>Basic Login using PHP and MySql</title>
	
<style>
.body{
	float:left;
	margin: 5px;
	padding: 15px;
	max-width: 300px;
	heigth: 300px;
	border: 1 solid black;


}
</style>
</head>

<body>
	<background-image="123.jpg">
	<form method="post" action="login.php">
		<a>Username  <input type="text" name="tuname"/></a> <br><br>
		Password  <input type="password" name="tpword"/><br> <br>
		<input type="submit" name="login" value="Login">
	</form>
	
	<form method="post" action="signup.php">
		<a>Username  <input type="text" name="tuname" /></a><br><br>
		<a>Password  <input type="password" name="tpword"></a><br> <br>
		<input type="submit" name="signup" value="Signup">
	</form>

</body>
</html>